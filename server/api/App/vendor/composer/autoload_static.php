<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a8a6866a73d114f930f5cf30dc5138b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a8a6866a73d114f930f5cf30dc5138b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a8a6866a73d114f930f5cf30dc5138b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a8a6866a73d114f930f5cf30dc5138b::$classMap;

        }, null, ClassLoader::class);
    }
}
