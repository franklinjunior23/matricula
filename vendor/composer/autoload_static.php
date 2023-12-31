<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit75e8b728722ba8eff4e974e2a37f26af
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
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit75e8b728722ba8eff4e974e2a37f26af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit75e8b728722ba8eff4e974e2a37f26af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit75e8b728722ba8eff4e974e2a37f26af::$classMap;

        }, null, ClassLoader::class);
    }
}
