<?php

namespace HFDP\command;


class LightOffCommand implements CommandInterface
{
    /** @var  Light */
    protected $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }
    public function execute()
    {
        return $this->light->off();
    }

    public function undo()
    {
        return $this->light->on();
    }
}