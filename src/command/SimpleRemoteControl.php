<?php

namespace HFDP\command;


class SimpleRemoteControl
{
    /** @var  CommandInterface */
    protected $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
        return $this;
    }

    public function buttonWasPressed()
    {
        return $this->command->execute();
    }
}