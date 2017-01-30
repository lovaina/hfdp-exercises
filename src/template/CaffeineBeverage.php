<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/01/2017
 * Time: 11:01
 */

namespace HFDP\template;


abstract class CaffeineBeverage
{
    public function prepareRecipe(){
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }
    
    abstract public function brew();
    abstract public function addCondiments();

    final public function boilWater()
    {
        return "Boiling Water";
    }

    final public function pourInCup()
    {
        return "Pouring into cup";
    }
}