<?php


namespace HFDP\Compound;


class DuckFactory extends AbstractDuckFactory
{

    public function createMallardDuck()
    {
       return new MallardDuck();
    }

    public function createRedHeadDuck()
    {
        return new RedheadDuck();
    }

    public function createDuckCall()
    {
        return new DuckCall();
    }

    public function createRubberDuck()
    {
        return new RubberDuck();
    }
}