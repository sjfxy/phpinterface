<?php
namespace Client;
class ConsuleRegister implements GrpcRegisterinterface
{



    /**
     * @var \SensioLabs\Consul\ServiceFactory
     */
    private $client;

    public function __construct()
    {
        $this->client = ConsulClient::instance();
    }


    //服务注册
    public function ServiceRegister()
    {

        $service = ServiceHelper::new();

        /** @var \SensioLabs\Consul\Services\Agent $agent */
        $agent = $this->client->get(\SensioLabs\Consul\Services\AgentInterface::class);

        $agent->registerService($service);

        // TODO: Implement ServiceRegister() method.
    }

    //服务卸载
    public function ServiceUnRegister()
    {
        // TODO: Implement ServiceUnRegister() method.
        $service = ServiceHelper::new();
        /** @var \SensioLabs\Consul\Services\Agent $agent */
        $agent = $this->client->get(\SensioLabs\Consul\Services\AgentInterface::class);


        $agent->deregisterService($service["id"]);
    }


    public function GetServiceByName($service_name, $randType=null)
    {
        try {
            if(!empty($this->client))
            {
                /** @var \SensioLabs\Consul\Services\Agent $agent */
                $agent = $this->client->get(\SensioLabs\Consul\Services\AgentInterface::class);
                $res= $agent->services();
                $res = $res->json();
                $address = [];
                array_filter($res,function ($item)use ($service_name,&$address){
                    if ($item["Service"] == $service_name){
                        array_push($address,$item["Address"].":".$item["Port"]);
                    }
                });
                if (!empty($address))
                {
                    return $address[array_rand($address)];
                }else{
                    throw new \Exception(sprintf("服务: %s 没有发现",$service_name));
                }
            }else{
                throw new \Exception(sprintf("无法链接consul客户端信息 :%s",env("CONSUL_HTTP_ADDR")));
            }
        }catch (\Exception $exception){
            throw $exception;
        }
    }
}