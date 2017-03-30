<?php


namespace HFDP\Compound;


class GooseAdapter implements Quackable
{
    /**
     * @var Goose
     */
    private $goose;

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
    }
    public function quack()
    {
        return $this->goose->honk();
    }
}