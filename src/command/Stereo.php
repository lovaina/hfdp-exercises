<?php

namespace HFDP\command;


class Stereo
{
    protected $status = 'OFF';

    public function on()
    {
        $this->status = 'ON';
        return  $this->status();
    }

    public function off()
    {
        $this->status = 'ON';
        return  $this->status();
    }


    public function setCd()
    {
        $this->status = 'with CD';
        return  $this->status();
    }

    public function setVolume($size = 12)
    {
        $this->status = 'with volume: '.$size;
        return  $this->status();
    }

    public function status(){
        return 'Stereo is '. $this->status;
    }
}