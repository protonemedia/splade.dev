<?php

namespace Tests\Unit;

use App\Console\Commands\UpdateDocumentationRepository;
use App\Documentation;
use Illuminate\Console\Command;
use Illuminate\Console\OutputStyle;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;
use Mockery;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Process\Process;
use Tests\TestCase;

class UpdateDocumentationRepositoryTest extends TestCase
{
    /** @test */
    public function it_updates_the_docs_directory_with_git_and_clears_the_cache_and_generates_the_sitemap()
    {
        Http::preventStrayRequests();

        Http::fake([
            'algolia.com/*' => Http::response('ok'),
        ]);

        config([
            'services.algolia.crawler_id'      => 'a',
            'services.algolia.crawler_user_id' => 'b',
            'services.algolia.crawler_api_key' => 'c',
        ]);

        $documentation = Mockery::mock(Documentation::class)
            ->shouldReceive('clearCache')
            ->getMock();

        app()->singleton(Process::class, function () {
            return Mockery::mock(Process::class)
                ->shouldReceive('run')
                ->getMock();
        });

        Artisan::shouldReceive('call')->with('sitemap:generate');

        $command = new UpdateDocumentationRepository;
        $command->setOutput(new OutputStyle(new ArrayInput([]), new NullOutput));
        $this->assertEquals(Command::SUCCESS, $command->handle($documentation));

        Http::assertSent(function (Request $request) {
            $this->assertEquals('https://crawler.algolia.com/api/1/crawlers/a/reindex', $request->url());
            $this->assertEquals(['Basic Yjpj'], $request->header('Authorization'));
            $this->assertEquals([], $request->data());
            $this->assertEquals('POST', $request->method());

            return true;
        });
    }
}
