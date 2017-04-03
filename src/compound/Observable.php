<?php


namespace HFDP\Compound;


use ArrayObject;

class Observable implements QuackObservable
{


    /**
     * @var QuackObservable
     */
    protected $duck;
    protected $observers;

    public function __construct(QuackObservable $duck)
    {
        $this->observers = new ArrayObject();
        $this->duck = $duck;
    }

    public function registerObserver(Observer $observer)
    {
        $this->observers->append($observer);
    }

    public function notifyObservers()
    {
        $iterator = $this->observers->getIterator();
        $display = [];

        while ($iterator->valid()){
            $display[] = $iterator->current()->update($this->duck);
            $iterator->next();
        }

    }
}