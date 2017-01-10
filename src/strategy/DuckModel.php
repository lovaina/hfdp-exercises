<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 10/01/2017
 * Time: 14:31
 */

namespace HFDP\strategy;


class DuckModel extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlayNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        return "Soy DuckModel";
    }
}