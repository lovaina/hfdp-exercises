<?php

namespace HFDP\command;


interface CommandInterface
{
    public function execute();
    public function undo();
}