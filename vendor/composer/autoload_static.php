<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf97209db59b9c441686ec5e5dc44a1d
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dat\\Demo\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dat\\Demo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf97209db59b9c441686ec5e5dc44a1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf97209db59b9c441686ec5e5dc44a1d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf97209db59b9c441686ec5e5dc44a1d::$classMap;

        }, null, ClassLoader::class);
    }
}
