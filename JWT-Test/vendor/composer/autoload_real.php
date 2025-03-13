<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit433a65fa9eebf52fa24e1690aaf96325
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit433a65fa9eebf52fa24e1690aaf96325', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit433a65fa9eebf52fa24e1690aaf96325', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit433a65fa9eebf52fa24e1690aaf96325::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
