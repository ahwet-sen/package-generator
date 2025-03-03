<?php

namespace AhwetSen\PackageGenerator\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class RoutesInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package-generator:routes-install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the package-generator routes files';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->routes();
    }

    /**
     * Routes.
     */
    protected function routes(): void
    {
        foreach ((new Filesystem)->allFiles(__DIR__.'/../../routes') as $allFile) {
            (new Filesystem)->copy(__DIR__.'/../../routes/'.$allFile->getFilename(), base_path('routes/'.$allFile->getFilename()));

            unset($allFile);
        }

        $this->info('The route file publishing process has been successfully completed.');
    }
}
