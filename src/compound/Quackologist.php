<?php


namespace HFDP\Compound;


class Quackologist implements Observer
{

    public function update(QuackObservable $duck)
    {
        return 'Quackologist: '.get_class($duck).' just quacked.';
    }
}