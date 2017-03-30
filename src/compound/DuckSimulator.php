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

    protected function duckSimulate(Quackable $duck)
    {
        return $duck->quack();
    }
}