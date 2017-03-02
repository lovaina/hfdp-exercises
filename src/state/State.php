<?php


namespace HFDP\state;


interface State
{
    public function inserQuarter();
    public function ejectQuarter();
    public function turnCrank();
    public function dispense();

}