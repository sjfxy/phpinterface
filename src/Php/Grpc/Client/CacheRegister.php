<?php
namespace Client;
/**
 * 缓存服务发现的接口默认Redis实现
 */
interface CacheRegister
{
    /**
     * @param $key
     * @return string
     */
    function Get($key):string;

    /**
     * @param $key
     * @param $value
     * @return bool
     */
    function Store($key,$value,$timeout=3600):bool;
}