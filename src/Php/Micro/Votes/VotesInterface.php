<?php
# Generated by the protocol buffer compiler (https://github.com/mix-php/grpc). DO NOT EDIT!
# source: votes.proto

namespace Votes;

use Mix\Grpc;
use Mix\Grpc\Context;

interface VotesInterface extends Grpc\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "votes.Votes";

    /**
    * @param Context $context
    * @param EnrollInfoReq $request
    * @return EnrollResp
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function GetEnrollInfo(Context $context, EnrollInfoReq $request): EnrollResp;

    /**
    * @param Context $context
    * @param ActidReq $request
    * @return EnrollListResp
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function GetEnrollList(Context $context, ActidReq $request): EnrollListResp;

    /**
    * @param Context $context
    * @param ActInfoReq $request
    * @return ActInfoResp
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function GetActivityInfo(Context $context, ActInfoReq $request): ActInfoResp;

    /**
    * @param Context $context
    * @param EnrollReq $request
    * @return EnrollResp
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function Enroll(Context $context, EnrollReq $request): EnrollResp;

    /**
    * @param Context $context
    * @param VotesReq $request
    * @return VotesResp
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function Votes(Context $context, VotesReq $request): VotesResp;

    /**
    * @param Context $context
    * @param ActInfoReq $request
    * @return ActInfoResp
    *
    * @throws Grpc\Exception\InvokeException
    */
    public function IncrActiviView(Context $context, ActInfoReq $request): ActInfoResp;
}
