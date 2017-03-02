<?php

namespace HFDP\adapter;


class TurkeyAdapter implements Duck
{
    /** @var Turkey  */
    protected $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        return $this->turkey->gobble();
    }

    public function fly()
    {
        return $this->turkey->fly();
    }
}