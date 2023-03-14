<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65b16e2c0c39d0c845adad2ddb4f43bb
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
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65b16e2c0c39d0c845adad2ddb4f43bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65b16e2c0c39d0c845adad2ddb4f43bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit65b16e2c0c39d0c845adad2ddb4f43bb::$classMap;

        }, null, ClassLoader::class);
    }
}
