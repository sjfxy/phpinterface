<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Votes;

use Client\GrpcBaseClient;
use Grpc\ChannelCredentials;
/**
 */
class PaySvcClient extends \Grpc\BaseStub {

    const SERVICENAME = "vote.svc";

    /**
     * @var GrpcBaseClient
     */
    private $baseClient;

    /**
     * @var string
     */
    private $servciename;

    /**
     * @var string
     */
    private $hostname;

    /**
     * @param string $hostname
     */
    public function setHostname(string $hostname): void
    {
        $this->hostname = $hostname;
    }



    /**
     * @param string $servciename
     */
    public function setServciename(string $servciename): void
    {
        $this->servciename = $servciename;
    }
    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($host="") {


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
        //这里我们进行拦截器处理
        parent::__construct($hostname, $opts, null);
    }

    /**
     * @param \Votes\ArgsGetPayInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Votes\ReplyGetPayinfo
     */
    public function GetInfo(\Votes\ArgsGetPayInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/votes.PaySvc/GetInfo',
        $argument,
        ['\Votes\ReplyGetPayinfo', 'decode'],
        $metadata, $options);
    }

}
