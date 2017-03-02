<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 13/01/2017
 * Time: 9:38
 */

namespace HFDP\command;


class noCommand implements CommandInterface
{
    public function execute() { return null; }

    public function undo() {return null; }
}