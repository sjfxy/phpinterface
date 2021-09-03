<?php
namespace Client;
/**
 *
 */
class ServiceHelper
{
    public static function new()
    {
        $service["id"] = env("RPC_ID");
        $service["name"] = env("RPC_SERVICE_NAME");
        $service["address"] = env("RPC_ADDRESS");
        $service["port"] = intval(env("RPC_PROT"));
        return $service;
    }
}