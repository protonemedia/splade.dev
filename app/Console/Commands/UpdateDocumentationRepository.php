<?php

namespace App\Console\Commands;

use App\Documentation;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Process\Process;

class UpdateDocumentationRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docs:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the documentation repository.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(Documentation $documentation)
    {
        $this->info('Updating documentation...');

        /** @var Process $process */
        $process = app()->make(Process::class, [
            'command' => ['git', 'pull'],
            'cwd'     => base_path('docs'),
        ]);

        $process->run(function ($type, $buffer) {
            $type === Process::OUT ? $this->line($buffer) : $this->error($buffer);
        });

        $this->info('Clearing cache...');
        $documentation->clearCache();

        $this->info('Generating new sitemap...');
        Artisan::call('sitemap:generate');

        $this->info('Reindex Algolia...');
        Http::asJson()
            ->withBasicAuth(config('services.algolia.crawler_user_id'), config('services.algolia.crawler_api_key'))
            ->post('https://crawler.algolia.com/api/1/crawlers/' . config('services.algolia.crawler_id') . '/reindex');

        $this->info('Done!');

        return Command::SUCCESS;
    }
}
