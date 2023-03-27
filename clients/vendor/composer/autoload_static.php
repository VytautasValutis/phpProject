<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit229b4d32182ea346c7c23f044520682e
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit229b4d32182ea346c7c23f044520682e::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit229b4d32182ea346c7c23f044520682e::$classMap;

        }, null, ClassLoader::class);
    }
}