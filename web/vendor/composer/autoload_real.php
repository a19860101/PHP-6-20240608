<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcf99cc8bd0ab26379b6deab620fad402
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

        spl_autoload_register(array('ComposerAutoloaderInitcf99cc8bd0ab26379b6deab620fad402', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcf99cc8bd0ab26379b6deab620fad402', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcf99cc8bd0ab26379b6deab620fad402::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
