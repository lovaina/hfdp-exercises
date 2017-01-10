<?php

namespace HFDP\Strategy;


abstract class Duck
{
    /** @var  FlyBehavior */
    protected $flyBehavior;
    /** @var  QuackBehavior */
    protected $quackBehavior;

    public function swim(){
        return "Los patos no nadan, flotan";
    }
    abstract public function display();

    public function performFly(){
        return $this->flyBehavior->fly();
    }
    public function performQuack(){
        return $this->quackBehavior->quack();
    }
    public function setFlyBehavior(FlyBehavior $flyBehavior){
        $this->flyBehavior = $flyBehavior;
    }
    public function setQuackBehavior(QuackBehavior $quackBehavior){
        $this->quackBehavior = $quackBehavior;
    }
}