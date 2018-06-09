<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c5f19b94edcf5fc3c2e8e9a65c4a044
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YuriTavares\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YuriTavares\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c5f19b94edcf5fc3c2e8e9a65c4a044::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c5f19b94edcf5fc3c2e8e9a65c4a044::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
