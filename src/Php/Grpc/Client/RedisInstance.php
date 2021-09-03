<?php
namespace Client;
class RedisInstance
{
    private static $instance;
    public static function instance()
    {
        if (!isset(self::$instance)){
            $redis = new \Redis();
            $flag = $redis->connect(
                env("REDIS_HOST"),
                env("REDIS_PORT"),
                env("REDIS_TIMEOUT")
            );
            if (!empty(env("REDIS_PASSWORD"))){
                $flag = $redis->auth(env("REDIS_PASSWORD"));
            }
            if(!$flag){
                self::$instance = new RedisException($redis->getLastError());
            }else{
                self::$instance = $redis;
            }
            return self::$instance;
        }
        return  self::$instance;
    }

}