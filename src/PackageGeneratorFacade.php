<?php

declare(strict_types=1);

namespace AhwetSen\PackageGenerator;

use Illuminate\Support\Facades\Facade;

final class PackageGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'package-generator';
    }
}
