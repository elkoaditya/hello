<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca37b693ea31af3f1a34da8424590ad9
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ElcoSystem\\HelloWorld\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ElcoSystem\\HelloWorld\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitca37b693ea31af3f1a34da8424590ad9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca37b693ea31af3f1a34da8424590ad9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitca37b693ea31af3f1a34da8424590ad9::$classMap;

        }, null, ClassLoader::class);
    }
}
