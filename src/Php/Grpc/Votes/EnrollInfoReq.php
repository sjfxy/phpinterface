<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: votes.proto

namespace Votes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>votes.EnrollInfoReq</code>
 */
class EnrollInfoReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 aeid = 1;</code>
     */
    protected $aeid = 0;
    /**
     * Generated from protobuf field <code>int64 actid = 2;</code>
     */
    protected $actid = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $aeid
     *     @type int|string $actid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Votes::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 aeid = 1;</code>
     * @return int|string
     */
    public function getAeid()
    {
        return $this->aeid;
    }

    /**
     * Generated from protobuf field <code>int64 aeid = 1;</code>
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
     * Generated from protobuf field <code>int64 actid = 2;</code>
     * @return int|string
     */
    public function getActid()
    {
        return $this->actid;
    }

    /**
     * Generated from protobuf field <code>int64 actid = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setActid($var)
    {
        GPBUtil::checkInt64($var);
        $this->actid = $var;

        return $this;
    }

}

