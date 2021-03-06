<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa690cb6913154112bf97f94f25158f6
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa690cb6913154112bf97f94f25158f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa690cb6913154112bf97f94f25158f6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfa690cb6913154112bf97f94f25158f6::$classMap;

        }, null, ClassLoader::class);
    }
}
