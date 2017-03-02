<?php


namespace HFDP\decorator;


class Whip extends BeverageAbstract
{

    /** @var BeverageAbstract  */
    protected $beverage;
    protected $description = ', Whip';

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
        return .10 + $this->beverage->cost();
    }
}