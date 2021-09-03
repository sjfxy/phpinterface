<?php
namespace Client;
class RedisCache implements CacheRegister
{
    private $client;
    public function __construct()
    {
        $this->client = RedisInstance::instance();
    }


    public function Get($key): string
    {
        return  $this->client->get($key);
    }
    public function Store($key, $value, $timeout = 3600): bool
    {
        return  $this->client->set($key,$value,$timeout);
    }
}