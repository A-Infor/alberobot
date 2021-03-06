<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3b9036af0d355be07e9c1219a58874b
{
    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
    );

    public static $classMap = array (
        'WikiFile' => __DIR__ . '/../..' . '/Wikimate.php',
        'WikiPage' => __DIR__ . '/../..' . '/Wikimate.php',
        'Wikimate' => __DIR__ . '/../..' . '/Wikimate.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc3b9036af0d355be07e9c1219a58874b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc3b9036af0d355be07e9c1219a58874b::$classMap;

        }, null, ClassLoader::class);
    }
}
