<?php
namespace Maksimusyan\SmsSender;

interface ISender
{
    public function sendSMS(array $data);
    public function getBalance();
}
