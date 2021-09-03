<?php
namespace Client;
interface GrpcServiceinterface
{
    //服务注册
    public function Registry();

    //服务反注册
    public function UnRegistry();

    //服务列表信息
    public function Services($servicename):string;

    //服务信息的监控信息
    public function Agent($node_id):array;
}