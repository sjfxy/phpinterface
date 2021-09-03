<?php
namespace Client;
class ConsulClient
{
    private static $instance;
    public static function instance()
    {
        if (!isset(self::$instance)){
            self::$instance =  new \SensioLabs\Consul\ServiceFactory();
            return self::$instance;
        }
       return self::$instance;
    }
}