<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 16/01/2017
 * Time: 9:24
 */

namespace HFDP\decorator;


abstract class CondimentDecoratorAbstract extends BeverageAbstract
{
    public function getDescription()
    {
        return $this->description;
    }
}