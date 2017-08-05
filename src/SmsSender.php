<?php
namespace Maksimusyan\SmsSender;

class SmsSender
{
    protected $provider;
    protected $config;

    public function __construct()
    {

    }

    public function init($provider='Epochta',array $config=array()){
        $this->provider = $provider;
        $this->config = $config;
        switch ($this->provider) {
            case 'Epochta':
                return new Epochta\Epochtasms($this->config);
                break;
        }
    }

}