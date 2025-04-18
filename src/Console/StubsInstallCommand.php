<?php

declare(strict_types=1);

namespace AhwetSen\PackageGenerator\Console;

use Illuminate\Console\Command;

final class StubsInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package-generator:stubs-install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the package-generator stubs files';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->stubs();
    }

    /**
     * Stubs.
     */
    protected function stubs(): void
    {
        //

        $this->info('The stubs files publishing process has been successfully completed.');
    }
}
