<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 17/01/2017
 * Time: 8:54
 */

namespace HFDP\factory;


abstract class AbstractPizza
{
   protected $name;
   protected $dough;
   protected $sauce;
   protected $toppings = [];

    public function prepare()
    {
        return "Preparing ". $this->name;
    }

    public function bake()
    {
        // TODO: Implement bake() method.
    }

    public function cut()
    {
        // TODO: Implement cut() method.
    }

    public function box()
    {
        // TODO: Implement box() method.
    }

}