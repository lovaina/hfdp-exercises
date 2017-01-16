<?php

namespace HFDP\decorator;


class Mocha extends CondimentDecoratorAbstract
{
    /** @var BeverageAbstract  */
    protected $beverage;
    protected $description = ', Mocha';

    public function __construct(BeverageAbstract $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . $this->description;
    }

    public function cost()
    {
        return .20 + $this->beverage->cost();
    }
}