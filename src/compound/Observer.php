<?php


namespace HFDP\Compound;


interface Observer
{
    public function update(QuackObservable $duck);
}