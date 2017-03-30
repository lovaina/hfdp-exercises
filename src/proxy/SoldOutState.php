<?php


namespace HFDP\proxy;


class SoldOutState implements State
{

    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function inserQuarter()
    {
        return "You can't insert a quarter, the machine is sold out";
    }

    public function ejectQuarter()
    {
        return "You can't eject, you haven't inserted a quarter yet";
    }

    public function turnCrank()
    {
        return "You turned but there are no gumballs";
    }

    public function dispense()
    {
        return "No gumball dispensed";
    }
}