<?php


namespace HFDP\proxy;


interface State
{
    public function inserQuarter();
    public function ejectQuarter();
    public function turnCrank();
    public function dispense();

}