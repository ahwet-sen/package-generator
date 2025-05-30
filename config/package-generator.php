<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Package Information
    |--------------------------------------------------------------------------
    |
    | Package information.
    |
    */

    'package_information' => [
        'name' => 'package-generator',
        'description' => 'Simple Package To Quickly Generate Basic Structure For Other Laravel Packages.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Supported Languages
    |--------------------------------------------------------------------------
    |
    | Supported languages.
    |
    */

    'supported_languages' => [
        'en',
        'tr',
    ],

    /*
    |--------------------------------------------------------------------------
    | Optimization Commands
    |--------------------------------------------------------------------------
    |
    | Optimization commands.
    |
    */

    'optimization_commands' => [
        'optimize:clear',
        'config:cache',
        'event:cache',
        'route:cache',
        'view:cache',
    ],

    /*
    |--------------------------------------------------------------------------
    | Package Commands
    |--------------------------------------------------------------------------
    |
    | Package commands.
    |
    */

    'package_commands' => [
        'assets' => false,
        'config' => true,
        'database' => false,
        'lang' => false,
        'resources' => false,
        'routes' => false,
        'stubs' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Seperator
    |--------------------------------------------------------------------------
    |
    | Seperator.
    |
    | Values that can be used: dashed, dotted, double
    |
    */

    'seperator' => 'dotted',

    /*
    |--------------------------------------------------------------------------
    | Seperator Length
    |--------------------------------------------------------------------------
    |
    | Seperator length.
    |
    |
    */

    'seperator_length' => 210,

];
