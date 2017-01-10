<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 10/01/2017
 * Time: 14:10
 */

namespace HFDP\strategy;


class FlayNoWay implements FlyBehavior
{

    public function fly()
    {
        return "No vuelo";
    }
}