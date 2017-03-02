<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 17/01/2017
 * Time: 8:54
 */

namespace HFDP\factory;


abstract class AbstractPizza
{
    protected $name;
    /** @var  Dough */
    protected $dough;
    /** @var  Sauce */
    protected $sauce;
    protected $veggies = [];
    /** @var  Cheese */
    protected $cheese;
    /** @var  Pepperoni */
    protected $pepperoni;
    /** @var  Clams */
    protected $clams;

    public function prepare()
    {
        return "Preparing ". $this->name;
    }

    public function bake()
    {
        return "Baking 25min at 350.";
    }

    public function cut()
    {
        return "Cutting.";
    }

    public function box()
    {
        return "Puting pizza inside a box.";
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}