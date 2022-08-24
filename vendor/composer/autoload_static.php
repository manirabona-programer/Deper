<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d8b8af32100b8007d677fafc133c7f1
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Patienceman\\Deper\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Patienceman\\Deper\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d8b8af32100b8007d677fafc133c7f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d8b8af32100b8007d677fafc133c7f1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d8b8af32100b8007d677fafc133c7f1::$classMap;

        }, null, ClassLoader::class);
    }
}
