<?php


namespace Tests;


use HFDP\state\GumballMachine;

class StatePatternTest extends \PHPUnit_Framework_TestCase
{
    public function test_gumballMachine()
    {
        $gumballMachine = new GumballMachine(5);
        $this->assertEquals('no_quarter', $gumballMachine->getState());

        $this->assertEquals('You inserted a quarter', $gumballMachine->insertQuarter());
        $this->assertEquals('A gumball comes rolling out of the lot', $gumballMachine->turnCrank());

        $this->assertEquals('no_quarter', $gumballMachine->getState());

        $this->assertEquals('You inserted a quarter', $gumballMachine->insertQuarter());
        $this->assertEquals('Quarter returned!', $gumballMachine->ejectQuarter());
        $this->assertEquals('You turned but there\'s no quarter', $gumballMachine->turnCrank());

        $this->assertEquals('no_quarter', $gumballMachine->getState());

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        $this->assertEquals('You inserted a quarter', $gumballMachine->insertQuarter());
        $this->assertEquals('Get the last gumball of the machine', $gumballMachine->turnCrank());

        $this->assertEquals('sold_out', $gumballMachine->getState());

        $this->assertEquals('You can\'t insert a quarter, the machine is sold out', $gumballMachine->insertQuarter());
        $this->assertEquals('You turned but there are no gumballs', $gumballMachine->turnCrank());
    }
}
