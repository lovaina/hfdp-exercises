<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 17/01/2017
 * Time: 8:54
 */

namespace HFDP\factory;


interface PizzaInterface
{
    public function prepare();
    public function bake();
    public function cut();
    public function box();

}