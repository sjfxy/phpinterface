<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Votes;

use Client\GrpcBaseClient;

/**
 */
class PaySvcClient extends GrpcBaseClient {

    const SERVICENAME = "vote.svc";

    public function __construct($host="") {
        $this->setServiceName(self::SERVICENAME);
        parent::__construct($host);
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
