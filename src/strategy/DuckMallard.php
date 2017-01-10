<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 10/01/2017
 * Time: 14:52
 */

namespace HFDP\strategy;


class DuckMallard extends Duck
{

    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new QuackMute();
    }
    public function display()
    {
        return 'Soy DuckMallard';
    }
}