<?php

namespace AhwetSen\PackageGenerator\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class ResourcesInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package-generator:resources-install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the package-generator resources files';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->resources();
    }

    /**
     * Resources.
     */
    protected function resources(): void
    {
        $this->views();

        $this->info('The resources files publishing process has been successfully completed.');
    }

    /**
     * Views.
     */
    protected function views(): void
    {
        (new Filesystem)->copyDirectory(__DIR__.'/../../resources/views', resource_path('views/package-generator'));

        $this->info('The views files publishing process has been successfully completed.');
    }
}
