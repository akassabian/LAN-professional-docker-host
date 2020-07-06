<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4127f545612bf946ff64d5105a25eec3
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPackio\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPackio\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpackio/enqueue/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4127f545612bf946ff64d5105a25eec3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4127f545612bf946ff64d5105a25eec3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
