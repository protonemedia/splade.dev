<?php

namespace App\Http\Controllers;

use App\Documentation;
use Illuminate\Support\Str;
use ProtoneMedia\Splade\Facades\SEO;

class DocumentationController
{
    public function __invoke(Documentation $documentation, ?string $page = null)
    {
        if (!$page) {
            return redirect()->route('docs', [
                'page' => $documentation->index()->collapse()->first(),
            ]);
        }

        $metadata = $documentation->metadata($page);

        SEO::title($metadata['title'])
            ->description(Str::limit($metadata['description'], 200))
            ->keywords($metadata['keywords']);

        return view('documentation', [
            'page'  => $page,
            'index' => $documentation->index(),
            'html'  => $documentation->html($page),
        ]);
    }
}
