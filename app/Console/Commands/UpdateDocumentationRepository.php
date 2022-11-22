<?php

namespace App\Console\Commands;

use App\Documentation;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
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

        $this->info('Done!');

        return Command::SUCCESS;
    }
}
