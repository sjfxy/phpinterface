<?php
namespace Client;
/**
 * grpc服务发现接口
 */
interface GrpcRegisterinterface
{
    /**
     * @param $service_name 服务名称 consule信息
     * @param $randType  随机的类型 默认使用数组的随机信息
     * @return mixed
     */
   function GetServiceByName($service_name,$randType);
}