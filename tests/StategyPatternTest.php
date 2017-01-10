<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 10/01/2017
 * Time: 14:34
 */

namespace Tests;


use HFDP\strategy\DuckMallard;
use HFDP\strategy\DuckModel;
use HFDP\strategy\FlayNoWay;
use HFDP\strategy\QuackSqueak;

class StategyPatternTest extends \PHPUnit_Framework_TestCase
{
    public function test_Duck_Instance()
    {
        $duck = new DuckModel();
        $this->assertInstanceOf('HFDP\strategy\Duck', $duck);
    }

    public function test_duckModel()
    {
        $duckModel = new DuckModel();
        $this->assertEquals('Soy DuckModel', $duckModel->display());
        $this->assertEquals('No vuelo', $duckModel->performFly());
        $this->assertEquals('Quack', $duckModel->performQuack());

    }

    public function test_DuckMallard()
    {
        $mallardDuck = new DuckMallard();

        $this->assertEquals('Soy DuckMallard', $mallardDuck->display());
        $this->assertEquals('Vuelo!', $mallardDuck->performFly());
        $this->assertEquals('Silencio', $mallardDuck->performQuack());
        
        $mallardDuck->setQuackBehavior(new QuackSqueak());
        $this->assertEquals('Chirría', $mallardDuck->performQuack());
        $mallardDuck->setFlyBehavior(new FlayNoWay());
        $this->assertEquals('No vuelo', $mallardDuck->performFly());
        
    }
}
