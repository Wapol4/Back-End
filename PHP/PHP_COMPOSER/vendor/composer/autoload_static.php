<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1066395aa6784786af12f589e31ed82
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'airist4\\php_library\\' => 20,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'Airist\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'airist4\\php_library\\' => 
        array (
            0 => __DIR__ . '/..' . '/airist4/php_library/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Airist\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1066395aa6784786af12f589e31ed82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1066395aa6784786af12f589e31ed82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1066395aa6784786af12f589e31ed82::$classMap;

        }, null, ClassLoader::class);
    }
}