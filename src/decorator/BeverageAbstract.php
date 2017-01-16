<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 16/01/2017
 * Time: 9:20
 */

namespace HFDP\decorator;


abstract class BeverageAbstract
{
    protected $description = 'Unknown Beverage';

    public function getDescription()
    {
        return $this->description;
    }

    abstract public function cost();
}