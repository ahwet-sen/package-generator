<?php

namespace AhwetSen\PackageGenerator;

class PackageGenerator
{
    /**
     * Package name.
     */
    private const PACKAGE_NAME = 'package-generator';

    /**
     * Package version.
     */
    private const PACKAGE_VERSION = 'v0.0.0';

    /**
     * Package name.
     */
    public static function packageName(): string
    {
        return self::PACKAGE_NAME;
    }

    /**
     * Package version.
     */
    public static function packageVersion(): string
    {
        return self::PACKAGE_VERSION;
    }

    /**
     * Config value.
     */
    public static function configValue(string $configKeyName = 'package_information.name'): mixed
    {
        return config(self::packageName().'.'.$configKeyName);
    }

    /**
     * View path.
     */
    public static function viewPath(string $viewFileName = 'pages.home.index'): string
    {
        return self::packageName().'.'.$viewFileName;
    }

    /**
     * Asset path.
     */
    public static function assetPath(string $assetFileName = 'images/favicon.ico'): string
    {
        return asset(self::packageName().'/'.$assetFileName);
    }
}
