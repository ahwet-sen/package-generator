<?php

if (! function_exists('packageName')) {
    /**
     * Package name.
     */
    function packageName(): mixed
    {
        return app('package-generator')->packageName();
    }
}

if (! function_exists('packageVersion')) {
    /**
     * Package version.
     */
    function packageVersion(): mixed
    {
        return app('package-generator')->packageVersion();
    }
}

if (! function_exists('configValue')) {
    /**
     * Config value.
     */
    function configValue(string $configKeyName = 'package_information.name'): mixed
    {
        return app('package-generator')->configValue($configKeyName);
    }
}

if (! function_exists('viewPath')) {
    /**
     * View path.
     */
    function viewPath(string $viewFileName = 'pages.home.index'): string
    {
        return app('package-generator')->viewPath($viewFileName);
    }
}

if (! function_exists('assetPath')) {
    /**
     * Asset path.
     */
    function assetPath(string $assetFileName = 'images/favicon.ico'): mixed
    {
        return app('package-generator')->assetPath($assetFileName);
    }
}

if (! function_exists('seperator')) {
    /**
     * Seperator.
     */
    function seperator(): mixed
    {
        return configValue('seperator');
    }
}

if (! function_exists('seperatorLength')) {
    /**
     * Seperator length.
     */
    function seperatorLength(): mixed
    {
        return configValue('seperator_length');
    }
}
