<?php

namespace App;

use Closure;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Cache\TaggedCache;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\CommonMark\Extension\FrontMatter\Output\RenderedContentWithFrontMatter as FrontMatter;
use League\CommonMark\Output\RenderedContentInterface;

class Documentation
{
    private ?FilesystemAdapter $disk = null;

    private TaggedCache $cache;

    public function __construct(private string $diskName = 'docs')
    {
        $this->cache = Cache::tags('documentation');
    }

    public function clearCache(): bool
    {
        return $this->cache->flush();
    }

    private function disk(): FilesystemAdapter
    {
        if ($this->disk) {
            return $this->disk;
        }

        return $this->disk = Storage::disk($this->diskName);
    }

    private function file($path): string
    {
        $disk = $this->disk();

        abort_if($disk->fileMissing($path), 404);

        return $disk->get($path);
    }

    private function cache(string $key, Closure $callback): mixed
    {
        return $this->cache->rememberForever($key, $callback);
    }

    public function index(): Collection
    {
        return $this->cache('index', function () {
            return Collection::make(
                json_decode($this->file('index.json'), true)
            );
        });
    }

    private function titles(): Collection
    {
        return $this->cache('titles', function () {
            return $this->index()->mapWithKeys(function ($section, $header) {
                $section = array_flip($section);

                if (!in_array($header, ['Form components', 'Table component'])) {
                    return $section;
                }

                return Collection::make($section)
                    ->map(function ($title) use ($header) {
                        return Str::before($header, ' ') . ' ' . $title;
                    })
                    ->all();
            });
        });
    }

    public static function markdown(string $content): RenderedContentInterface
    {
        return Markdown::convert($content);
    }

    public function content(string $page): RenderedContentInterface
    {
        return $this->cache("markdown-{$page}", function () use ($page) {
            return static::markdown($this->file("{$page}.md"));
        });
    }

    private function generateDescription(string $page): string
    {
        $html = $this->html($page);

        $lines = Collection::make(explode(PHP_EOL, $html))
            ->filter(fn ($line) => Str::startsWith($line, '<p>'))
            ->implode(' ');

        return htmlspecialchars_decode(strip_tags($lines));
    }

    public function metadata(string $page): array
    {
        return $this->cache("metadata-{$page}", function () use ($page) {
            $content = $this->content($page);

            $metadata = $content instanceof FrontMatter
                ? $content->getFrontMatter()
                : [];

            $metadata['title']       ??= $this->titles()->get($page);
            $metadata['description'] ??= $this->generateDescription($page);
            $metadata['keywords']    ??= [];

            if (is_string($metadata['keywords'])) {
                $metadata['keywords'] = array_map('trim', explode(',', $metadata['keywords']));
            }

            $metadata['keywords'] = array_unique(array_merge($metadata['keywords'], config('splade.seo.defaults.keywords')));

            return $metadata;
        });
    }

    public function html($page): string
    {
        return $this->content($page)->getContent();
    }
}
