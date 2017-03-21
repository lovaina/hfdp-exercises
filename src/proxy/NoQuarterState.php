<?php


namespace HFDP\proxy;


class NoQuarterState implements State
{
    /**
     * @var GumballMachine
     */
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function inserQuarter()
    {
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
        return "You inserted a quarter";
    }

    public function ejectQuarter()
    {
        return "There's no quarter inserted!";
    }

    public function turnCrank()
    {
        return "You turned, but there's no quarter";
    }

    public function dispense()
    {
        return "You need to pay first";
    }
}