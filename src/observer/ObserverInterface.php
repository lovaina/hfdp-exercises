<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 11/01/2017
 * Time: 8:51
 */

namespace HFDP\observer;


interface ObserverInterface
{
    public function update($temperature, $humidity, $pressure);
}