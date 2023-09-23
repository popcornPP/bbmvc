<?php

namespace app\core\Settings;

class Settings
{
    public static array $config;

    public function __construct()
    {
        self::$config = APP_PATH . '/app/config/config.php';
    }

    public static function getConfig()
    {
        return self::$config;
    }
}
