<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 10/01/2017
 * Time: 14:09
 */

namespace HFDP\strategy;


class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        return "Vuelo!";
    }
}