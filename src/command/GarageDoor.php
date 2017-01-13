<?php

namespace HFDP\command;


class GarageDoor
{

    protected $status = 'CLOSE';

    public function up()
    {
        $this->status = 'OPENED';
        return  $this->status();
    }

    public function down()
    {
        $this->status = 'CLOSED';
        return  $this->status();
    }

    public function stop()
    {
        $this->status = 'STOPED';
        return  $this->status();
    }

    public function lightOn()
        {
            $this->status = 'WITH LIGHT ON';
            return  $this->status();
        }

    public function lightOff()
        {
            $this->status = 'WITH LIGHT ON';
            return  $this->status();
        }

    public function status(){
        return 'Garage Door is '. $this->status;
    }


}