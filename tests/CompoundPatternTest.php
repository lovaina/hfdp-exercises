<?php


namespace tests;


use HFDP\Compound\DuckSimulator;

class CompoundPatternTest extends \PHPUnit_Framework_TestCase
{
    public function test_Simulator()
    {
        $simulator = new DuckSimulator();
        $duck = $simulator->simulate();

        $this->assertContains('Quack', $duck);
        $this->assertContains('Squeak', $duck);
        $this->assertContains('Kwak', $duck);

        $count = array_filter($duck, function($quack){
            $count = 0;
            if ($quack == 'Quack')
                return $count + 1;
        });

        $this->assertCount(2, $count);
    }
}
