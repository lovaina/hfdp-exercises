<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 13/01/2017
 * Time: 9:01
 */

namespace HFDP\command;


class GarageDoorOpenCommand implements CommandInterface
{
    protected $garageDoor;

    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }
    public function execute()
    {
        return $this->garageDoor->up();
    }
}