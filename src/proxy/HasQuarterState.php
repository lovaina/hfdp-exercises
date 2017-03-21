<?php


namespace HFDP\proxy;


class HasQuarterState implements State
{

    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function inserQuarter()
    {
        return "You can't insert another quarter";
    }

    public function ejectQuarter()
    {
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        return "Quarter returned!";
    }

    public function turnCrank()
    {
       $this->gumballMachine->setState($this->gumballMachine->getSoldState());
       
    }

    public function dispense()
    {
        return "No gumball dispensed";
    }
}