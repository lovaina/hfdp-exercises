<?php

namespace HFDP\decorator;


class Soy extends CondimentDecoratorAbstract
{

    /** @var BeverageAbstract  */
    protected $beverage;
    protected $description = ', Soy';

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
        return .15 + $this->beverage->cost();
    }
}