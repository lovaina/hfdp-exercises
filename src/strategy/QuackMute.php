<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 10/01/2017
 * Time: 14:14
 */

namespace HFDP\strategy;


class QuackMute implements QuackBehavior
{

    public function quack()
    {
        return "Silencio";
    }
}