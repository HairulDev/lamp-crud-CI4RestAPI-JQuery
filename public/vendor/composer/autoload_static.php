<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b830e0db0dd0d013b7a9c75d1dd2380
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chriskacerguis\\RestServer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chriskacerguis\\RestServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsstream/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b830e0db0dd0d013b7a9c75d1dd2380::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b830e0db0dd0d013b7a9c75d1dd2380::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5b830e0db0dd0d013b7a9c75d1dd2380::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}