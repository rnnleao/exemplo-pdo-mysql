<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita00ad4399e4a8fa657aef98066c71e65
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExemploPDOMySQL\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExemploPDOMySQL\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita00ad4399e4a8fa657aef98066c71e65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita00ad4399e4a8fa657aef98066c71e65::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita00ad4399e4a8fa657aef98066c71e65::$classMap;

        }, null, ClassLoader::class);
    }
}
