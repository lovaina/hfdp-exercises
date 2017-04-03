<?php


namespace HFDP\Compound;

//Decorator
class QuackCounter implements Quackable
{
    /**
     * @var Quackable
     */
    protected $duck;
    protected static $numberOfQuacks;

    public function __construct(Quackable $duck)
    {
        $this->duck = $duck;
        self::$numberOfQuacks = 0;
    }

    public function quack()
    {
        self::$numberOfQuacks = self::$numberOfQuacks + 1;
        return $this->duck->quack();
    }

    public static function getQuacks()
    {
        return self::$numberOfQuacks;
    }

    public function registerObserver(Observer $observer)
    {
        $this->duck->registerObserver($observer);
    }

    public function notifyObservers()
    {
        $this->duck->notifyObservers();
    }
};