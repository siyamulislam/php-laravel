<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82a4e603a437dfa640445bbd4bd9b3ae
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82a4e603a437dfa640445bbd4bd9b3ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82a4e603a437dfa640445bbd4bd9b3ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit82a4e603a437dfa640445bbd4bd9b3ae::$classMap;

        }, null, ClassLoader::class);
    }
}
