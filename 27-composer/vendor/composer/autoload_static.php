<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90d9d2c2b5e7f61faec1aa3fc79d9ce9
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'docker\\components\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'docker\\components\\' => 
        array (
            0 => __DIR__ . '/../..' . '/components',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90d9d2c2b5e7f61faec1aa3fc79d9ce9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90d9d2c2b5e7f61faec1aa3fc79d9ce9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit90d9d2c2b5e7f61faec1aa3fc79d9ce9::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit90d9d2c2b5e7f61faec1aa3fc79d9ce9::$classMap;

        }, null, ClassLoader::class);
    }
}