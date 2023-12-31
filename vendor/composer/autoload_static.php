<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f039145fc90fceb55ddf019dee1a184
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TestTask\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TestTask\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f039145fc90fceb55ddf019dee1a184::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f039145fc90fceb55ddf019dee1a184::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f039145fc90fceb55ddf019dee1a184::$classMap;

        }, null, ClassLoader::class);
    }
}
