<?php


namespace HFDP\state;


class GumballMachine
{

    const SOLD_OUT = 'sold_out';
    const NO_QUARTER = 'no_quarter';
    const HAS_QUARTER = 'has_quarter';
    const SOLD = 'sold';

    protected $state = self::SOLD_OUT;
    protected $count = 0;

    public function __construct($count)
    {
        $this->count = $count;
        if ($this->count > 0){
            $this->state = self::NO_QUARTER;
        }
    }

    public function insertQuarter()
    {
        if($this->state == self::HAS_QUARTER){
            return "You can't insert another quarter";
        }elseif ($this->state == self::NO_QUARTER){
            $this->state = self::HAS_QUARTER;
            return "You inserted a quarter";
        }elseif ($this->state == self::SOLD_OUT){
            return "You can't insert a quarter, the machine is sold out";
        }elseif($this->state == self::SOLD){
            return "Please wait, we're already giving you a gumball";
        }
    }


    public function ejectQuarter()
    {
        if($this->state == self::HAS_QUARTER){
            $this->state = self::NO_QUARTER;
            return "Quarter returned!";
        }elseif ($this->state == self::NO_QUARTER){
            return "You haven't inserted a quarter";
        }elseif ($this->state == self::SOLD){
            return "Sorry, you already turned the crank";
        }elseif($this->state == self::SOLD_OUT){
            return "You can't eject, you haven't inserted a quarter yet";
        }
    }

    public function turnCrank()
    {

        if($this->state == self::SOLD){
            return "Turning twice doesn't get you another gumball!";
        }elseif ($this->state == self::NO_QUARTER){
            return "You turned but there's no quarter";
        }elseif ($this->state == self::SOLD_OUT){
            return "You turned but there are no gumballs";
        }elseif($this->state == self::HAS_QUARTER){
            $this->state = self::SOLD;
            return $this->dispense();
        }
    }

    private function dispense()
    {
        if($this->state == self::SOLD){
            $this->count = $this->count - 1;
            if($this->count == 0){
                $this->state = self::SOLD_OUT;
                return "Get the last gumball of the machine";
            }else{
                $this->state = self::NO_QUARTER;
                return "A gumball comes rolling out of the lot";
            }
        }elseif ($this->state == self::NO_QUARTER){
            return "You need to pay first";
        }elseif ($this->state == self::SOLD_OUT){
            return "No gumball dispensed";
        }elseif($this->state == self::HAS_QUARTER){
            return "No gumball dispensed";
        }
    }

    public function getState()
    {
        return $this->state;
    }


}