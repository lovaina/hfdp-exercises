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
        $goose = new GooseAdapter(new Goose());

        $message = [];

        $message[] = $this->duckSimulate($mallard);
        $message[] = $this->duckSimulate($redhead);
        $message[] = $this->duckSimulate($duckCall);
        $message[] = $this->duckSimulate($rubber);
        $message[] = $this->duckSimulate($goose);

        return $message;
    }

    protected function duckSimulate(Quackable $duck){
        return $duck->quack();
    }
}