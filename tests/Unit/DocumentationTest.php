<?php

namespace Tests\Unit;

use App\Documentation;
use Tests\TestCase;

class DocumentationTest extends TestCase
{
    private Documentation $documentation;

    public function setUp(): void
    {
        parent::setUp();

        $this->documentation = new Documentation('test-docs');
        $this->documentation->clearCache();
    }

    /** @test */
    public function it_parses_the_index()
    {
        $this->assertEquals([
            'Introduction' => [
                'Introducing Splade' => 'introducing-splade',
                'Credits'            => 'credits',
            ],
            'Table' => [
                'Overview' => 'table-overview',
            ],
        ], $this->documentation->index()->all());
    }

    /** @test */
    public function it_converts_the_markdown_to_html()
    {
        $html = $this->documentation->html('credits');

        $this->assertStringContainsString('<h1>Credits</h1>', $html);
    }

    /** @test */
    public function it_wraps_an_iframe_into_a_aspect_ratio_div()
    {
        $html = $this->documentation->html('table-overview');

        $this->assertStringContainsString('<div class="aspect-w-16 aspect-h-9"><iframe', $html);
    }

    /** @test */
    public function it_rewrites_links_to_other_documentation_pages()
    {
        $this->assertStringContainsString('<a href="/docs/introducing-splade">', $this->documentation->html('table-overview'));
    }

    /** @test */
    public function it_extracts_the_title_from_the_index()
    {
        $this->assertEquals('Introducing Splade', $this->documentation->metadata('introducing-splade')['title']);
        $this->assertEquals('Overview', $this->documentation->metadata('table-overview')['title']);
    }

    /** @test */
    public function it_can_generate_a_description()
    {
        $this->assertEquals('Splade provides a super easy way to build Single Page Applications (SPA) using standard Laravel Blade templates, enhanced with renderless Vue 3 components. In essence, you can write your app using the simplicity of Blade, and besides that magic SPA-feeling, you can sparkle it to make it interactive. All without ever leaving Blade.', $this->documentation->metadata('introducing-splade')['description']);
    }

    /** @test */
    public function it_can_parse_the_metadata()
    {
        $metadata = $this->documentation->metadata('table-overview');

        $this->assertEquals('Splade has an advanced Table component.', $metadata['description']);
        $this->assertEquals([
            'laravel datatable',
            'laravel datatables',
            'laravel table',
            'laravel table component',
            'laravel tables',
            'laravel spa',
            'laravel splade',
            'laravel single page application',
            'laravel blade',
            'blade vue',
            'blade javascript',
            'blade components',
        ], $metadata['keywords']);
    }
}
