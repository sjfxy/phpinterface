<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Votes;

/**
 */
class VotesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 获取作品信息
     * @param \Votes\EnrollInfoReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Votes\EnrollResp
     */
    public function GetEnrollInfo(\Votes\EnrollInfoReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/votes.Votes/GetEnrollInfo',
        $argument,
        ['\Votes\EnrollResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取 作品列表
     * @param \Votes\ActidReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Votes\EnrollListResp
     */
    public function GetEnrollList(\Votes\ActidReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/votes.Votes/GetEnrollList',
        $argument,
        ['\Votes\EnrollListResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取 活动信息
     * @param \Votes\ActInfoReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Votes\ActInfoResp
     */
    public function GetActivityInfo(\Votes\ActInfoReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/votes.Votes/GetActivityInfo',
        $argument,
        ['\Votes\ActInfoResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 报名
     * @param \Votes\EnrollReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Votes\EnrollResp
     */
    public function Enroll(\Votes\EnrollReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/votes.Votes/Enroll',
        $argument,
        ['\Votes\EnrollResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 投票
     * @param \Votes\VotesReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Votes\VotesResp
     */
    public function Votes(\Votes\VotesReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/votes.Votes/Votes',
        $argument,
        ['\Votes\VotesResp', 'decode'],
        $metadata, $options);
    }

    /**
     * 增加活动的爆光量
     * @param \Votes\ActInfoReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Votes\ActInfoResp
     */
    public function IncrActiviView(\Votes\ActInfoReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/votes.Votes/IncrActiviView',
        $argument,
        ['\Votes\ActInfoResp', 'decode'],
        $metadata, $options);
    }

}
