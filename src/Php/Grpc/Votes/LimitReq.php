<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: votes.proto

namespace Votes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>votes.LimitReq</code>
 */
class LimitReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 offset = 1;</code>
     */
    protected $offset = 0;
    /**
     * Generated from protobuf field <code>int64 size = 2;</code>
     */
    protected $size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $offset
     *     @type int|string $size
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Votes::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 offset = 1;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Generated from protobuf field <code>int64 offset = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 size = 2;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>int64 size = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->size = $var;

        return $this;
    }

}

