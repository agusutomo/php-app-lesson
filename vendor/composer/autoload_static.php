<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48f2a2aac893146d457ae8ef8646a8d7
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit48f2a2aac893146d457ae8ef8646a8d7::$classMap;

        }, null, ClassLoader::class);
    }
}
