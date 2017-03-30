<?php


namespace HFDP\proxy;


class GumballMonitor
{
    /** @var  GumballMachine */
    protected $machine;

    public function __construct(GumballMachine $machine)
    {
        $this->machine = $machine;
    }

    public function report()
    {
        return [
            'GumballMachine location: '. $this->machine->getLocation(),
            'Inventory: '. $this->machine->getCount(),
            'State: '.get_class($this->machine->getState())
        ];
    }
}