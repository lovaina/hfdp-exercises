<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 10/01/2017
 * Time: 14:12
 */

namespace HFDP\strategy;


class Quack implements QuackBehavior
{

    public function quack()
    {
        return "Quack";
    }
}