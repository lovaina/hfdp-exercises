<?php


namespace HFDP\Compound;


class GooseAdapter implements Quackable
{
    /**
     * @var Goose
     */
    private $goose;

    protected $observable;

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
        $this->observable = new Observable($this);
    }
    public function quack()
    {
        $this->notifyObservers();
        return $this->goose->honk();
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