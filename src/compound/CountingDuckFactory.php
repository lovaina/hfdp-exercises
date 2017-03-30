<?php


namespace HFDP\Compound;


class CountingDuckFactory extends AbstractDuckFactory
{

    public function createMallardDuck()
    {
        return new QuackCounter(new MallardDuck());

    }

    public function createRedHeadDuck()
    {
        return new QuackCounter(new RedheadDuck());

    }

    public function createDuckCall()
    {
        return new QuackCounter(new DuckCall());
    }

    public function createRubberDuck()
    {
        return new QuackCounter(new RubberDuck());
    }
}

