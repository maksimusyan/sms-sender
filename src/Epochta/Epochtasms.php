<?php
namespace Maksimusyan\SmsSender\Epochta;
//include("APISMS.php");
//include("Addressbook.php");
//include("Exceptions.php");
//include("Account.php");
//include("Stat.php");

use Maksimusyan\SmsSender;

class Epochtasms implements SmsSender\ISender
{
    public $transport;
    public $addressbook;
    public $exceptions;
    public $account;
    public $stat;
    public $config = array(
        'key_private' => '',
        'key_public' => '',
        'url_gateway' => 'http://api.atompark.com/sms/3.0/',
        'testmode' => false,
    );

    public function __construct(array $config = array())
    {
        $this->config = array_merge($this->config,$config);
        $this->transport = new APISMS($this->config['key_private'],$this->config['key_public'],$this->config['url_gateway'],$this->config['testmode']);
        $this->addressbook = new Addressbook($this->transport);
        $this->exceptions = new Exceptions($this->transport);
        $this->account = new Account($this->transport);
        $this->stat = new Stat($this->transport);
    }

    public function register($name,$country_code){
        //Первым делом, зарегистрируем имя отправителя, если собираемся рассылать СМС в том числе в Украину
        //Если вы собираетесь отправлять смс исключительно в Россию - регистрировать имя отправителя нет необходимости
        $result = $this->account->registerSender($name,$country_code);
        if(!empty($result['error'])) {
            return $result['error'];
        } else {
            return $result;
        }
    }

    public function sendSMS(array $data){
        /* ОТПРАВКА ОДНОГО СМС
        $data = array:
            sender 	Идентификатор отправителя
            text 	Текст сообщения
            phone 	Номер получателя
            datetime 	Отправка в заданное время (2012-05-01 00:20:00)
            sms_lifetime 	Время жизни смс (0 = максимум, 1, 6, 12, 24 часа)
        */
        $result = $this->stat->sendSMS($data['sender'],$data['text'],$data['phone'],$data['datetime'],$data['sms_lifetime']);
        if(!empty($result['error'])) {
            return $result['error'];
        } else {
            return $result['result'];
        }
    }

    public function getBalance($currency='RUB'){
        // Доступные валюты: 'USD','GBP','UAH','RUB','EUR'.
        $result = $this->account->getUserBalance($currency);
        if(!empty($result['error'])) {
            return $result['error'];
        } else {
            return $result['result']['balance_currency'];
        }
    }

}
