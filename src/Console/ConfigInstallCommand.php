<?php

declare(strict_types=1);

namespace AhwetSen\PackageGenerator\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

final class ConfigInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package-generator:config-install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the package-generator config files';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->config();
    }

    /**
     * Config.
     */
    protected function config(): void
    {
        (new Filesystem)->copy(__DIR__.'/../../config/package-generator.php', config_path('package-generator.php'));

        $this->info('The config files publishing process has been successfully completed.');
    }
}
