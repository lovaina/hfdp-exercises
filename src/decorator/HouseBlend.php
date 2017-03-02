<?php


namespace HFDP\decorator;


class HouseBlend extends BeverageAbstract
{
    protected $description = 'House Blend Coffee';
    
    public function cost()
    {
        return .89;
    }
}