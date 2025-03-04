<?php

namespace AhwetSen\PackageGenerator\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package-generator:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the package-generator package files';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->start();

        $this->startInstallation();

        $this->end();
    }

    /**
     * Start.
     */
    protected function start(): void
    {
        $this->writeln($this->seperator());
    }

    /**
     * Write ln.
     */
    protected function writeln(string $line): void
    {
        echo $line.PHP_EOL;
    }

    /**
     * Seperator.
     */
    protected function seperator(): string
    {
        return match (configValue('seperator')) {
            'dashed' => '------------------------------------------------------------------------------------------------------------------------------------------------------',
            'dotted' => '......................................................................................................................................................',
            default => '======================================================================================================================================================',
        };
    }

    /**
     * Start installation.
     */
    protected function startInstallation(): void
    {
        foreach (configValue('package_commands') as $packageCommand => $status) {
            if ($status) {
                $this->call('package-generator:'.$packageCommand.'-install');

                $this->writeln($this->seperator());
            }

            unset($packageCommand);

            unset($status);
        }
    }

    /**
     * End.
     */
    protected function end(): void
    {
        $this->info('package-generator scaffolding installed successfully.');

        $this->writeln($this->seperator());

        $this->comment('The installation process was carried out successfully. Please visit your web page.');

        $this->writeln($this->seperator());
    }
}
