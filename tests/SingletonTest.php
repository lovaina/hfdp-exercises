<?php

namespace Tests;


use HFDP\singleton\ChocolateBoiler;
use HFDP\singleton\Singleton;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function test_getSingletonInstance()
    {
        $instance = Singleton::getInstance();
        
        $this->assertInstanceOf('HFDP\singleton\Singleton', $instance);
    }

    public function test_ChocolateBoiler()
    {
        $instance = ChocolateBoiler::getChocolateInstance();
        $this->assertInstanceOf('HFDP\singleton\ChocolateBoiler', $instance);
        
        $this->assertTrue($instance->isEmpty());
        $this->assertFalse($instance->isBoiled());
        
        $instance->fill();
        $instance->boil();

        $this->assertFalse($instance->isEmpty());
        $this->assertTrue($instance->isBoiled());
    }
}
