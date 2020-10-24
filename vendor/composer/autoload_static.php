<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc58bcebbdd119efa4962bf227845669e
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc58bcebbdd119efa4962bf227845669e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc58bcebbdd119efa4962bf227845669e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc58bcebbdd119efa4962bf227845669e::$classMap;

        }, null, ClassLoader::class);
    }
}
