<?php


namespace HFDP\command;


class LightOnCommand implements CommandInterface 
{
    protected $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }
    public function execute()
    {
        return $this->light->on();
    }

    public function undo()
    {
        return $this->light->off();
    }
}