<?php

namespace HFDP\command;


class RemoteControl
{
    protected $onCommands = [];
    protected $offCommands = [];

    protected $arraySlotsSize = 7;

    public function __construct()
    {
        $this->initCommandArray();
    }

    private function initCommandArray()
    {
        $noCommand = new noCommand();

        for ($i = 0; $i < $this->arraySlotsSize; $i++){
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
        }

        return $this;
    }

    public function setCommand($slot, CommandInterface $onCommand, CommandInterface $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;

        return $this;
    }

    public function onButtonWasPushed($slot)
    {
        return $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPushed($slot)
    {
        return $this->offCommands[$slot]->execute();
    }

    public function getRemoteControlMenu()
    {
        $menu = [];

        for ($i = 0; $i < $this->arraySlotsSize; $i++){

            $menu['slot '.$i] = get_class($this->onCommands[$i]) . ' | ' . get_class($this->offCommands[$i]);
        }

        return $menu;
    }
}
