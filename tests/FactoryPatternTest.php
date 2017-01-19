<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 17/01/2017
 * Time: 9:32
 */

namespace tests;

use HFDP\factory\NYStylePIzzaStore;

class FactoryPatternTest extends \PHPUnit_Framework_TestCase
{

    public function testNYPizzaStore()
    {
        $NYStore = new NYStylePIzzaStore();

        $pizza = $NYStore->orderPizza('cheese');
        $this->assertInstanceOf('HFDP\factory\NYStyleCheesePizza', $pizza);
    }
}
