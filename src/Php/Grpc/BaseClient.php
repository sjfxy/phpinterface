<?php
namespace Grpc;
use Client\GrpcBaseClient;
use Grpc\ChannelCredentials;
class BaseClient extends \Grpc\BaseStub
{


    const SERVICENAME = "vote.svc";
    /**
     * @var string
     */
    private $hostname;

    /**
     * @return string
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }

    /**
     * @param string $hostname
     */
    public function setHostname(string $hostname): void
    {
        $this->hostname = $hostname;
    }

    /**
     * @var GrpcBaseClient
     */
    private $baseClient;

    /**
     * @return GrpcBaseClient
     */
    public function getBaseClient(): GrpcBaseClient
    {
        return $this->baseClient;
    }

    /**
     * @param GrpcBaseClient $baseClient
     */
    public function setBaseClient(GrpcBaseClient $baseClient): void
    {
        $this->baseClient = $baseClient;
    }

    private $service_name;

    /**
     * @return mixed
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * @param mixed $service_name
     */
    public function setServiceName($service_name): void
    {
        $this->service_name = $service_name;
    }

    public function __construct($host="")
    {

        if (empty($this->baseClient))
        {
            $this->baseClient = new GrpcBaseClient();
        }
        if (empty($this->servciename))
        {
            $this->servciename = self::SERVICENAME;
        }
        if (empty($host))
        {
            $hostname = $this->baseClient->Services($this->servciename);
        }else{
            $hostname = $host;
        }
        $opts = [
            'credentials' => ChannelCredentials::createInsecure(),
        ];
        parent::__construct($hostname, $opts, null);
    }

}