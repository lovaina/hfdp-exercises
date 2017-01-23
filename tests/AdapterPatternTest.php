<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 23/01/2017
 * Time: 9:27
 */

namespace tests;


use HFDP\adapter\DuckMallard;
use HFDP\adapter\TurkeyAdapter;
use HFDP\adapter\WildTurkey;

class AdapterPatternTest extends \PHPUnit_Framework_TestCase
{
    public function test_TurkeyAdapter()
    {
        $duck = new DuckMallard();
        $this->assertInstanceOf('HFDP\adapter\Duck', $duck);
        $turkey = new WildTurkey();
        $this->assertInstanceOf('HFDP\adapter\Turkey', $turkey);
        
        $this->assertEquals('Quack', $duck->quack());
        $this->assertEquals('I can fly!', $duck->fly());
        $this->assertEquals('Gobble', $turkey->gobble());
        $this->assertEquals('I also fly!', $turkey->fly());
        
        $turkeyAdapter = new TurkeyAdapter($turkey);
        
        $this->assertInstanceOf('HFDP\adapter\Duck', $turkeyAdapter);
        $this->assertEquals('Gobble', $turkeyAdapter->quack());
        $this->assertEquals('I also fly!', $turkeyAdapter->fly());
    }
}
