<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2f4a2b75e1df9085b6021d6d25a7526
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Filesystem\\' => 29,
        ),
        'G' => 
        array (
            'Grav\\Theme\\Scholar\\' => 19,
            'Grav\\Plugin\\StaticGenerator\\' => 28,
            'Grav\\Framework\\Cache\\Adapter\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Grav\\Theme\\Scholar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/addons',
        ),
        'Grav\\Plugin\\StaticGenerator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'Grav\\Framework\\Cache\\Adapter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2f4a2b75e1df9085b6021d6d25a7526::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2f4a2b75e1df9085b6021d6d25a7526::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
