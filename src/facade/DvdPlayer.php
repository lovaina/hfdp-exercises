<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 24/01/2017
 * Time: 11:46
 */

namespace HFDP\facade;


class DvdPlayer
{

    public function on()
    {
        return "DvdPlayer on";

    }

    public function play($movie)
    {
        return "DvdPlayer play";
    }

    public function stop()
    {
        return "DvdPlayer stop";
    }

    public function eject()
    {
        return "DvdPlayer eject";
    }

    public function off()
    {
        return "DvdPlayer off";
    }
}