<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ef9dbc12809045188999afdf8d24cd2
{
    public static $classMap = array (
        'App\\Test' => __DIR__ . '/../..' . '/Test.php',
        'App\\testing\\Test' => __DIR__ . '/../..' . '/testing/Test.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit8ef9dbc12809045188999afdf8d24cd2::$classMap;

        }, null, ClassLoader::class);
    }
}
