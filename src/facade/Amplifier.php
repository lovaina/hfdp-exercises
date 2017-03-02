<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 24/01/2017
 * Time: 11:46
 */

namespace HFDP\facade;


class Amplifier
{

    public function on()
    {
        return "Amplifier on";
    }

    public function setDvd($movie)
    {
        return "Amplifier set dvd: ". $movie;
    }

    public function setSurraoundSound()
    {
        return "Amplifier set SurroundSound";
    }

    public function setVolume($int)
    {
        return "Amplifier set volume: ". $int;

    }
    public function off()
    {
        return "Amplifier off";

    }
}