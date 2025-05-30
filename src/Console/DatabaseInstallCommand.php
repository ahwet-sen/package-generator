<?php

declare(strict_types=1);

namespace AhwetSen\PackageGenerator\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

final class DatabaseInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package-generator:database-install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the package-generator database files';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->database();
    }

    /**
     * Database.
     */
    protected function database(): void
    {
        $this->migrations();

        $this->seeders();

        $this->info('The database files publishing process has been successfully completed.');
    }

    /**
     * Migrations.
     */
    protected function migrations(): void
    {
        foreach ((new Filesystem)->allFiles(__DIR__.'/../../database/migrations') as $allFile) {
            (new Filesystem)->copy(__DIR__.'/../../database/migrations/'.$allFile->getFilename(), database_path('migrations/'.$allFile->getFilename()));

            unset($allFile);
        }

        $this->info('The migrations files publishing process has been successfully completed.');
    }

    /**
     * Seeders.
     */
    protected function seeders(): void
    {
        foreach ((new Filesystem)->allFiles(__DIR__.'/../../database/seeders') as $allFile) {
            (new Filesystem)->copy(__DIR__.'/../../database/seeders/'.$allFile->getFilename(), database_path('seeders/'.$allFile->getFilename()));

            unset($allFile);
        }

        $this->info('The seeders files publishing process has been successfully completed.');
    }
}
