<?php

namespace tests;


use HFDP\decorator\DarkRoast;
use HFDP\decorator\Espresso;
use HFDP\decorator\Mocha;
use HFDP\decorator\Whip;

class DecoratorPatternTest extends \PHPUnit_Framework_TestCase
{

    public function test_Espresso()
    {
        $beverage = new Espresso();

        $this->assertEquals('Espresso', $beverage->getDescription());
        $this->assertEquals(1.99, $beverage->cost());
    }

    public function test_DarkRoast()
    {
        $beverage = new DarkRoast();
        $beverage = new Mocha($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);

        $this->assertEquals('Dark Roast, Mocha, Mocha, Whip', $beverage->getDescription());
        $this->assertEquals(1.49, $beverage->cost());
    }
}
