<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 30/01/2017
 * Time: 9:47
 */

namespace HFDP\iterator;


class MenuItem
{

    private $price;
    private $name;
    private $description;
    /** @var  boolean */
    private $vegetarian;

    public function __construct($name, $description,$vegetarian, $price)
    {

        $this->price = $price;
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return boolean
     */
    public function isVegetarian()
    {
        return $this->vegetarian;
    }
}