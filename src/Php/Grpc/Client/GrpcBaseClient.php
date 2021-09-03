<?php
namespace Client;
/**
 * 基础的grpc基础控制器库
 * 所有客户端的魔板信息
 */
class GrpcBaseClient implements GrpcServiceinterface
{

    /**
     * @var CacheRegister
     */
    private $cacheInterface;

    /**
     * @param CacheRegister $cacheInterface
     */
    public function setCacheInterface(CacheRegister $cacheInterface): void
    {
        $this->cacheInterface = $cacheInterface;
    }

    /**
     * @param GrpcRegisterinterface $grpcSericeInter
     */
    public function setGrpcSericeInter(GrpcRegisterinterface $grpcSericeInter): void
    {
        $this->grpcSericeInter = $grpcSericeInter;
    }

    /**
     * @var GrpcRegisterinterface
     */
    private $grpcSericeInter;





    public function Registry()
    {
        if (empty($this->grpcSericeInter))
        {
            $this->grpcSericeInter = new ConsuleRegister();
        }
        $this->grpcSericeInter->ServiceRegister();
    }

    public function UnRegistry()
    {
        if (empty($this->grpcSericeInter))
        {
            $this->grpcSericeInter = new ConsuleRegister();
        }
        // TODO: Implement UnRegistry() method.
        $this->grpcSericeInter->ServiceUnRegister();
    }

    public function Services($servicename): string
    {
        if (empty($this->cacheInterface))
        {
            $this->cacheInterface = new RedisCache();
        }
        if(empty($this->grpcSericeInter))
        {
            $this->grpcSericeInter = new ConsuleRegister();
        }
        $address = $this->cacheInterface->Get($servicename);
        if(!empty($address)){
            return  $address;
        }
        $address = $this->grpcSericeInter->GetServiceByName($servicename);
        $this->cacheInterface->Store($servicename,$address,env("REDIS_CACHE_TIME_OUT",3600));
        return  $address;
    }

    public function Agent($node_id): array
    {
        return array();
    }
}