<?php


namespace HFDP\Compound;


class DuckSimulator
{
    public function simulate()
    {
        $mallard = new QuackCounter(new MallardDuck());
        $redhead = new QuackCounter(new RedheadDuck());
        $duckCall = new QuackCounter(new DuckCall());
        $rubber = new QuackCounter(new RubberDuck());
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