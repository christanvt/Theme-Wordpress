<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbd348bdebc4a8f172921c31e3b37d71
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbd348bdebc4a8f172921c31e3b37d71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbd348bdebc4a8f172921c31e3b37d71::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfbd348bdebc4a8f172921c31e3b37d71::$classMap;

        }, null, ClassLoader::class);
    }
}