<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb825b7fe69acf9b0e9e7e54163cd60f1
{
    public static $files = array (
        '044913376294999cc65c45979cc34427' => __DIR__ . '/../..' . '/src/Test.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb825b7fe69acf9b0e9e7e54163cd60f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb825b7fe69acf9b0e9e7e54163cd60f1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}