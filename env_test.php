<?php
include "vendor/autoload.php";
use Dotenv\Dotenv;
use Client\RedisInstance;
Dotenv::createUnsafeImmutable(__DIR__, '.env')->load();
//只需要其他框架 进行初始化即可
//加载到环境变量即可
define("APP_DEBUG", env('APP_DEBUG'));

var_dump(env("REDIS_PASSWORD"));

//$redis = RedisInstance::instance();
//if ($redis instanceof \Client\RedisException){
//    var_dump($redis->getMessage());
//}
///** @var  $redis \Redis */
//
//var_dump($redis->set("sin","222",1.0));

//$cnsul = \Client\ConsulClient::instance();
//$agent = $cnsul->get(SensioLabs\Consul\Services\AgentInterface::class);
//$res= $agent->services();
//$res = $res->json();
//var_dump($res);
//$consul = new \Client\ConsuleRegister();
//$res = $consul->GetServiceByName("consul",1);
//var_dump($res);
//$redisSvc = new \Client\RedisCache();
//$redisSvc->Store("sin","2222",1.0);
//var_dump($redisSvc->Get("sin"));
//sleep(2);
//var_dump($redisSvc->Get("sin"));

$GrcpClient = new \Client\GrpcBaseClient();
$info = $GrcpClient->Services("consul");
var_dump($info);


