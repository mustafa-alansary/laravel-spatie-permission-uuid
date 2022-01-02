<?php

namespace Mustafaalansary\laravelSpatiePermissionUuid\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lspuuid:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Laravel Spatie Permission uuid Models, Migration, Traits and Config';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $files = new Filesystem;

        // Models...
        $files->ensureDirectoryExists(app_path('Models'));
        $files->copyDirectory(__DIR__ . '/../../stubs/Models', app_path('Models'));

        // Migration...
        $files->ensureDirectoryExists(app_path('../database/migrations'));
        $files->copyDirectory(__DIR__ . '/../../stubs/database/migrations', app_path('../database/migrations'));

        // Traits...
        $files->ensureDirectoryExists(app_path('Traits'));
        $files->copyDirectory(__DIR__ . '/../../stubs/Traits', app_path('Traits'));

        // Config...
        $files->ensureDirectoryExists(app_path('../config'));
        $files->copyDirectory(__DIR__ . '/../../stubs/config', app_path('../config'));

        $this->info('lspuuid scaffolding installed successfully.');
    }

}
