<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Votes;

/**
 */
class PaySvcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
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
