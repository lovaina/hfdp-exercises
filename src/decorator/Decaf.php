<?php


namespace HFDP\decorator;


class Decaf extends BeverageAbstract
{
    protected $description = 'Decaf';

    public function cost()
    {
        return 1.05;
    }
}