<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/01/2017
 * Time: 10:53
 */

namespace HFDP\template;


class Coffee extends CaffeineBeverage
{


    public function brew()
    {
        return "Dripping Coffee through filter";
    }

    public function addCondiments()
    {
        return "Adding Suggar and Milk";
    }
}