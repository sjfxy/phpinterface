<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: votes.proto

namespace Votes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *返回票数
 *
 * Generated from protobuf message <code>votes.VotesResp</code>
 */
class VotesResp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 auid = 1;</code>
     */
    protected $auid = 0;
    /**
     * Generated from protobuf field <code>int64 beid = 2;</code>
     */
    protected $beid = 0;
    /**
     * Generated from protobuf field <code>int64 ptyid = 3;</code>
     */
    protected $ptyid = 0;
    /**
     * Generated from protobuf field <code>int64 uid = 4;</code>
     */
    protected $uid = 0;
    /**
     * Generated from protobuf field <code>int64 avid = 5;</code>
     */
    protected $avid = 0;
    /**
     * Generated from protobuf field <code>int64 aeid = 6;</code>
     */
    protected $aeid = 0;
    /**
     * Generated from protobuf field <code>int64 votecount = 7;</code>
     */
    protected $votecount = 0;
    /**
     * Generated from protobuf field <code>int64 viewcount = 8;</code>
     */
    protected $viewcount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $auid
     *     @type int|string $beid
     *     @type int|string $ptyid
     *     @type int|string $uid
     *     @type int|string $avid
     *     @type int|string $aeid
     *     @type int|string $votecount
     *     @type int|string $viewcount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Votes::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 auid = 1;</code>
     * @return int|string
     */
    public function getAuid()
    {
        return $this->auid;
    }

    /**
     * Generated from protobuf field <code>int64 auid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAuid($var)
    {
        GPBUtil::checkInt64($var);
        $this->auid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 beid = 2;</code>
     * @return int|string
     */
    public function getBeid()
    {
        return $this->beid;
    }

    /**
     * Generated from protobuf field <code>int64 beid = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBeid($var)
    {
        GPBUtil::checkInt64($var);
        $this->beid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 ptyid = 3;</code>
     * @return int|string
     */
    public function getPtyid()
    {
        return $this->ptyid;
    }

    /**
     * Generated from protobuf field <code>int64 ptyid = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPtyid($var)
    {
        GPBUtil::checkInt64($var);
        $this->ptyid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 uid = 4;</code>
     * @return int|string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>int64 uid = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkInt64($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 avid = 5;</code>
     * @return int|string
     */
    public function getAvid()
    {
        return $this->avid;
    }

    /**
     * Generated from protobuf field <code>int64 avid = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAvid($var)
    {
        GPBUtil::checkInt64($var);
        $this->avid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 aeid = 6;</code>
     * @return int|string
     */
    public function getAeid()
    {
        return $this->aeid;
    }

    /**
     * Generated from protobuf field <code>int64 aeid = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAeid($var)
    {
        GPBUtil::checkInt64($var);
        $this->aeid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 votecount = 7;</code>
     * @return int|string
     */
    public function getVotecount()
    {
        return $this->votecount;
    }

    /**
     * Generated from protobuf field <code>int64 votecount = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVotecount($var)
    {
        GPBUtil::checkInt64($var);
        $this->votecount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 viewcount = 8;</code>
     * @return int|string
     */
    public function getViewcount()
    {
        return $this->viewcount;
    }

    /**
     * Generated from protobuf field <code>int64 viewcount = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setViewcount($var)
    {
        GPBUtil::checkInt64($var);
        $this->viewcount = $var;

        return $this;
    }

}

