<?php


namespace HFDP\Compound;


class DuckCall implements Quackable
{
    protected $observable;

    public function __construct()
    {
        $this->observable = new Observable($this);
    }
    
    public function quack()
    {
        $this->notifyObservers();
        return "Kwak";
    }

    public function registerObserver(Observer $observer)
    {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers()
    {
        $this->observable->notifyObservers();
    }
}