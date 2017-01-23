<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 23/01/2017
 * Time: 9:21
 */

namespace HFDP\adapter;


class DuckMallard implements Duck
{

    public function quack()
    {
        return "Quack";
    }

    public function fly()
    {
        return "I can fly!";
    }
}