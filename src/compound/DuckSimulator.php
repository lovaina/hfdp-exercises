<?php


namespace HFDP\Compound;


class DuckSimulator
{
    public function simulate()
    {
        $mallard = new MallardDuck();
        $redhead = new RedheadDuck();
        $duckCall = new DuckCall();
        $rubber = new RubberDuck();

        $message = [];

        $message[] = $this->duckSimulate($mallard);
        $message[] = $this->duckSimulate($redhead);
        $message[] = $this->duckSimulate($duckCall);
        $message[] = $this->duckSimulate($rubber);

        return $message;
    }

    protected function duckSimulate(Quackable $duck){
        return $duck->quack();
    }
}