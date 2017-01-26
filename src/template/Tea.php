<?php


namespace HFDP\template;


class Tea
{
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->steepTeaBag();
        $this->pourInCup();
        $this->addLemon();
    }

    public function boilWater()
    {
        return "Boiling Water";
    }

    public function steepTeaBag()
    {
        return "Steeping the tea";
    }

    public function pourInCup()
    {
        return "Pouring into cup";
    }

    public function addLemon()
    {
        return "Adding Lemon";
    }

}