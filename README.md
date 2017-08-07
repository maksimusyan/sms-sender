Sms Sender
========
Sending sms via api Epochta

Library is published on the Composer: https://packagist.org/packages/maksimusyan/sms-sender

Connect a stable version through the Composer:

> composer require maksimusyan/sms-sender
```php
{
    "require": {
        "maksimusyan/sms-sender": "^1.2"
    }
}
```
or the developer version directly from github:
```php
{
  "repositories": [
    {
      "type": "vcs",
      "url": "git://github.com/maksimusyan/sms-sender.git"
    }
  ],
    "require": {
        "maksimusyan/sms-sender": "dev-master"
    }
}
```

Basic Usage:
-------
```php
$provider = 'Epochta';
$config = array(
    'key_private' => 'YOUR_API_PRIVATE_KEY'
    ,'key_public' => 'YOUR_API_PUBLIC_KEY'
    //,'url_gateway' => 'http://api.atompark.com/sms/3.0/'
    //,'testmode' => false
);

$sms = new \Maksimusyan\SmsSender\Sender($provider,$config);
```

API methods
======

Send SMS:

```php
$data = array(
    'sender' => 'MYCOMPANY', // Sender ID. Maximum 11 characters
    'text' => 'You have successfully made a purchase', // Message text 
    'phone' => '79008881155', // Number of recipient
    'datetime' => '2018-05-01 00:20:00', // Sending at the set time
    'sms_lifetime' => '0' //SMS life time (0 = maximum, 1, 6, 12, 24 hour)
);
$sms->sendSMS($data);
```

Get balance:

```php
$currency = 'RUB'; // Available currencies: 'USD','GBP','UAH','RUB','EUR'
$balance = $sms->getBalance($currency);
```

Get country codes:

```php
$countries = $sms->getCountryCodes();
```
#