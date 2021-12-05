<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea24b3b25bab07a9fe8c6b347d141f2a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea24b3b25bab07a9fe8c6b347d141f2a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea24b3b25bab07a9fe8c6b347d141f2a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea24b3b25bab07a9fe8c6b347d141f2a::$classMap;

        }, null, ClassLoader::class);
    }
}