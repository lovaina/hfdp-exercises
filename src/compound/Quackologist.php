<?php


namespace HFDP\Compound;


class Quackologist implements Observer
{

    public function update(QuackObservable $duck)
    {
        var_dump('Quackologist: '.get_class($duck).' just quacked.');
    }
}