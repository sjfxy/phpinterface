<?php
include "vendor/autoload.php";
use Votes\PaySvcClient;
use Votes\ArgsGetPayInfo;
use Grpc\ChannelCredentials;
use Dotenv\Dotenv;
Dotenv::createUnsafeImmutable(__DIR__, '.env')->load();
//只需要其他框架 进行初始化即可
//加载到环境变量即可
define("APP_DEBUG", env('APP_DEBUG'));

$cli = new PaySvcClient();
$argsGetPayInfo = new ArgsGetPayInfo();
$argsGetPayInfo->setOrderNo("HS2002020020");
list($relyGetPayinfo,$error) = $cli->GetInfo($argsGetPayInfo)->wait();
if($error->code!=0){
    var_dump($error->details);
    return;
}
/** @var  $relyGetPayinfo \Votes\ReplyGetPayinfo */
var_dump($relyGetPayinfo->getData()->getOrderNo());
