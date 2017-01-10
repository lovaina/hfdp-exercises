<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 10/01/2017
 * Time: 14:15
 */

namespace HFDP\strategy;


class QuackSqueak implements QuackBehavior
{

    public function quack()
    {
        return "Chirría";
    }
}