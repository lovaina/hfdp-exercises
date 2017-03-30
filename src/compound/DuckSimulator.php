<?php


namespace HFDP\Compound;


class DuckSimulator
{
    /** @var CountingDuckFactory  */
    protected $factory;

    /**
     * DuckSimulator constructor.
     */
    public function __construct()
    {
        $this->factory = new CountingDuckFactory();
    }

    public function simulate()
    {
        $mallard = $this->factory->createMallardDuck();
        $redhead = $this->factory->createRedHeadDuck();
        $duckCall = $this->factory->createDuckCall();
        $rubber = $this->factory->createRubberDuck();
        $goose = new GooseAdapter(new Goose());

        $message = [];

        $message[] = $this->duckSimulate($mallard);
        $message[] = $this->duckSimulate($redhead);
        $message[] = $this->duckSimulate($duckCall);
        $message[] = $this->duckSimulate($rubber);
        $message[] = $this->duckSimulate($goose);
        $message['count'] = QuackCounter::getQuacks();

        return $message;
    }

    public function simulateFlock()
    {
        $mallard1 = $this->factory->createMallardDuck();
        $mallard2 = $this->factory->createMallardDuck();
        $mallard3 = $this->factory->createMallardDuck();
        $mallard4 = $this->factory->createMallardDuck();

        $redhead = $this->factory->createRedHeadDuck();
        $duckCall = $this->factory->createDuckCall();
        $rubber = $this->factory->createRubberDuck();
        $goose = new GooseAdapter(new Goose());

        $flockOfDucks = new Flock();
        $flockOfDucks->add($redhead);
        $flockOfDucks->add($duckCall);
        $flockOfDucks->add($rubber);
        $flockOfDucks->add($goose);

        $message = $flockOfDucks->quack();

        $mallardFlock = new Flock();
        $mallardFlock->add($mallard1);
        $mallardFlock->add($mallard2);
        $mallardFlock->add($mallard3);
        $mallardFlock->add($mallard4);

        $message = array_merge($message, $mallardFlock->quack());

        $message['count'] = QuackCounter::getQuacks();

        return $message;
    }

    protected function duckSimulate(Quackable $duck)
    {
        return $duck->quack();
    }
}