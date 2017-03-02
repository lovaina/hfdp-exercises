<?php

namespace HFDP\command;


class RemoteControlWithUndo
{
    protected $onCommands = [];
    protected $offCommands = [];
    /** @var  CommandInterface */
    protected $undoCommand;

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

        $this->undoCommand = $noCommand;

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
        $this->undoCommand = $this->onCommands[$slot];
        return $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPushed($slot)
    {
        $this->undoCommand = $this->offCommands[$slot];
        return $this->offCommands[$slot]->execute();
    }

    public function undoButtonWasPushed()
    {
        return $this->undoCommand->undo();
    }

    public function getRemoteControlMenu()
    {
        $menu = [];

        for ($i = 0; $i < $this->arraySlotsSize; $i++){

            $menu['slot '.$i] = get_class($this->onCommands[$i]) . ' | ' . get_class($this->offCommands[$i]);
        }
            $menu['undo'] = get_class($this->undoCommand);
        return $menu;
    }
}