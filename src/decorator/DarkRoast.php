<?php


namespace HFDP\decorator;


class DarkRoast extends BeverageAbstract
{
    protected $description = 'Dark Roast';
    
    public function cost()
    {
        return .99;
    }
}