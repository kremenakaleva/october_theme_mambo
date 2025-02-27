<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3d2471853a2d69cb0a27eca6b32653bf
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3d2471853a2d69cb0a27eca6b32653bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3d2471853a2d69cb0a27eca6b32653bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3d2471853a2d69cb0a27eca6b32653bf::$classMap;

        }, null, ClassLoader::class);
    }
}
