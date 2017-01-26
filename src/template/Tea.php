<?php


namespace HFDP\template;


class Tea extends CaffeineBeverage
{


    public function brew()
    {
        return "Steeping the tea";
    }


    public function addCondiments()
    {
        return "Adding Lemon";
    }

}