<?php


namespace HFDP\proxy;


class GumballMachine
{
    /** @var SoldOutState */
    protected $soldOutState;
    /** @var NoQuarterState */
    protected $noQuarterState;
    /** @var HasQuarterState */
    protected $hasQuarterState;
    /** @var SoldState */
    protected $soldState;

    /** @var State */
    protected $state;

    protected $count;

    protected $location;

    public function __construct($location, $numberGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        

        $this->count = $numberGumballs;
        if($numberGumballs >0){
            $this->state = $this->noQuarterState;
        }else{
            $this->state = $this->soldOutState;
        }
        $this->location = $location;
    }

    public function insertQuarter()
    {
        return $this->state->inserQuarter();
    }

    public function ejectQuarter()
    {
        return $this->state->ejectQuarter();
    }

    public function turnCranck()
    {
        $this->state->turnCrank();
        return $this->state->dispense();
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function releaseBall()
    {
        if ($this->count != 0){
            $this->count = $this->count - 1;
        }
    }

    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    public function getSoldState()
    {
        return $this->soldState;
    }

    public function getSouldOutState()
    {
        return $this->soldOutState;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function getLocation()
    {
        return $this->location;
    }


}