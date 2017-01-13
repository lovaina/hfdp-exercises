<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 13/01/2017
 * Time: 10:52
 */

namespace HFDP\command;


class GarageDoorCloseCommand implements CommandInterface
{

    protected $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }
    public function execute()
    {
        return $this->garageDoor->down();
    }
    public function undo()
    {
        return $this->garageDoor->up();
    }
}