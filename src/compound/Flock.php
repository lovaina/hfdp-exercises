<?php


namespace HFDP\Compound;


use ArrayObject;

class Flock implements Quackable
{
    protected $quackers;

    /**
     * Flock constructor.
     */
    public function __construct()
    {
        $this->quackers = new ArrayObject();
    }

    public function add(Quackable $quacker)
    {
        $this->quackers->append($quacker);
    }

    public function quack()
    {
        $quack = [];
        $iterator = $this->quackers->getIterator();

        while ($iterator->valid()){
            $quack[] = $iterator->current()->quack();
            $iterator->next();
        }

        return $quack;
    }

    public function registerObserver(Observer $observer)
    {
        $iterator = $this->quackers->getIterator();
        $duck = [];

        while ($iterator->valid()){
            $duck[] = $iterator->current()->registerObserver($observer);
            $iterator->next();
        }
    }

    public function notifyObservers()
    {
        //
    }
}