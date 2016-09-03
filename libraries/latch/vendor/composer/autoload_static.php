<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit25b79341a9c7d60283bf025dc0cae048
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ElevenPaths\\Latch\\Joomla\\' => 25,
            'ElevenPaths\\Latch\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ElevenPaths\\Latch\\Joomla\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'ElevenPaths\\Latch\\' => 
        array (
            0 => __DIR__ . '/..' . '/ElevenPaths/latch-sdk-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit25b79341a9c7d60283bf025dc0cae048::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit25b79341a9c7d60283bf025dc0cae048::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}