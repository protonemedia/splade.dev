<?php

namespace Tests\Unit;

use App\Console\Commands\UpdateDocumentationRepository;
use App\Documentation;
use Illuminate\Console\Command;
use Illuminate\Console\OutputStyle;
use Illuminate\Support\Facades\Artisan;
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
    }
}
