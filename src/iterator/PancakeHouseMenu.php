<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 30/01/2017
 * Time: 9:55
 */

namespace HFDP\iterator;


class PancakeHouseMenu implements Menu
{
    /** @var  array */
    protected $menuItems = [];

    public function __construct()
    {
        $this->addItem("K&B's Pancake Breakfast", "Pancakes with scrambled eggs, and toast", true, 2.99);
        $this->addItem("Regular Pancake Breakfast", "Pancakes with fried eggs, sausage", false, 2.99);
        $this->addItem("Blueberry Pancake Breakfast", "Pancakes with fresh blueberries", true, 3.49);
        $this->addItem("Waffles", "Waffles, with your choice of blueberries or strawberries", true, 3.59);
    }

    public function addItem($name, $description, $vegetarian, $price)
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        array_push($this->menuItems,$menuItem);
    }

    public function createIterator()
    {
        return new PancakeHouseIterator($this->menuItems);
    }
}