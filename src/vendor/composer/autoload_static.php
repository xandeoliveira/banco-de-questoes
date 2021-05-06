<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit554497f36df64c7dab416a06ece8a91b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit554497f36df64c7dab416a06ece8a91b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit554497f36df64c7dab416a06ece8a91b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit554497f36df64c7dab416a06ece8a91b::$classMap;

        }, null, ClassLoader::class);
    }
}