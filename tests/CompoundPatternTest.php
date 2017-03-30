<?php


namespace tests;


use HFDP\Compound\DuckSimulator;
use HFDP\Compound\Goose;
use HFDP\Compound\GooseAdapter;

class CompoundPatternTest extends \PHPUnit_Framework_TestCase
{
    protected $duck;

    public function setUp()
    {
        $simulator =  new DuckSimulator();
        $this->duck = $simulator->simulate();
    }
    public function test_Simulator()
    {
        $this->assertContains('Quack', $this->duck);
        $this->assertContains('Squeak', $this->duck);
        $this->assertContains('Kwak', $this->duck);

        $count = array_filter($this->duck, function($quack){
            $count = 0;
            if ($quack == 'Quack')
                return $count + 1;
        });

        $this->assertCount(2, $count);
    }

    public function test_Goose()
    {
        $this->assertContains('Honk', $this->duck);

        $goose = new Goose();
        $gooseAdapter = new GooseAdapter($goose);

        $this->assertFalse(method_exists($goose, 'quack'));
        $this->assertTrue(method_exists($gooseAdapter, 'quack'));

        $this->assertTrue(method_exists($goose, 'honk'));
        $this->assertFalse(method_exists($gooseAdapter, 'honk'));

    }
}
