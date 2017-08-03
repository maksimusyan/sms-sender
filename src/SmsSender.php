<?php
namespace Maksimusyan\SmsSender;

class SmsSender
{
    protected $driver;
    protected $config;

    public function __construct($driver='Epochta',array $config=array())
    {
        $this->driver = $driver;
        $this->config = $config;
        $this->init();
    }

    public function init(){
        switch ($this->driver) {
            case 'Epochta':
                return new Epochta\Epochtasms($this->config);
                break;
        }
    }

}