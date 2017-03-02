<?php

namespace HFDP\command;


class Light
{
    protected $status = 'OFF';
    /**
     * @var string
     */
    private $place;

    public function __construct($place = "")
    {

        $this->place = $place;
    }

    public function on()
    {
        $this->status = 'ON';
        return  $this->status();
    }

    public function off()
    {
        $this->status = 'OFF';
        return  $this->status();
    }

    public function status(){
        
        return (empty($this->place)) ? 
            'Light is '. $this->status : 
             $this->place . ' Light is '. $this->status;
    }
}