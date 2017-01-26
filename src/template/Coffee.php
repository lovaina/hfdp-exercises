<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/01/2017
 * Time: 10:53
 */

namespace HFDP\template;


class Coffee
{
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->brewCoffeeGrinds();
        $this->pourInCup();
        $this->addSugarAndMil();
    }

    public function boilWater()
    {
        return "Boiling Water";
    }

    public function brewCoffeeGrinds()
    {
        return "Dripping Coffee through filter";
    }

    public function pourInCup()
    {
        return "Pouring into cup";
    }

    public function addSugarAndMil()
    {
        return "Adding Suggar and Milk";
    }
}