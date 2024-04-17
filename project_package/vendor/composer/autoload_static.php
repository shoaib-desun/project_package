<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7675fad59a1d6bed100389fe94898769
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shoaib\\Fibo\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shoaib\\Fibo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7675fad59a1d6bed100389fe94898769::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7675fad59a1d6bed100389fe94898769::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7675fad59a1d6bed100389fe94898769::$classMap;

        }, null, ClassLoader::class);
    }
}
