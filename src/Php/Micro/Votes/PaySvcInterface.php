<?php
# Generated by the protocol buffer compiler (https://github.com/mix-php/grpc). DO NOT EDIT!
# source: xindalu.proto

namespace Votes;

use Mix\Grpc;
use Mix\Grpc\Context;

interface PaySvcInterface extends Grpc\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "votes.PaySvc";

    /**
    * @param Context $context
    * @param ArgsGetPayInfo $request
    * @return ReplyGetPayinfo
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function GetInfo(Context $context, ArgsGetPayInfo $request): ReplyGetPayinfo;
}
