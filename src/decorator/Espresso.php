<?php

namespace HFDP\decorator;


class Espresso extends BeverageAbstract
{
    protected $description = 'Espresso';

    public function cost()
    {
        return 1.99;
    }
}