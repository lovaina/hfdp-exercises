<?php


namespace HFDP\state;


class SoldState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function inserQuarter()
    {
        return "Please wait, we're already giving you a gumball";
    }

    public function ejectQuarter()
    {
        return "Sorry, you already turned the crank";
    }

    public function turnCrank()
    {
        return "Turning twice doesn't get you another gumball!";
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if($this->gumballMachine->getCount() > 0){
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            return "A gumball comes rolling out of the lot";
        }else{
            $this->gumballMachine->setState($this->gumballMachine->getSouldOutState());
            return "Get the last gumball of the machine";
        }
    }
}