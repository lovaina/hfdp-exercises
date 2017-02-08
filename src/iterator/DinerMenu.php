<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 30/01/2017
 * Time: 10:22
 */

namespace HFDP\iterator;


class DinerMenu implements Menu
{
    const MAX_ITEMS = 6;
    protected $menuItems = [];

    public function __construct()
    {
        $this->addItem("Vegetarian BLT", "(Fakin') Bacon with lettuce & tomato on whole wheat", true, 2.99);
        $this->addItem("BLT", "Bacon with lettuce & tomato on whole wheat", false, 2.99);
        $this->addItem("Soup of the day", "Soup of the day, with a side of potato salad", false, 3.29);
        $this->addItem("Hotdog", "A hot dog, with saurkaut relish, onions, topped with cheese", false, 3.05);
    }

    public function addItem($name, $description, $vegetarian, $price)
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);

        if(count($this->menuItems) >= self::MAX_ITEMS){
            return "Sorry, menú is full";
        }else{
            $this->menuItems[] = $menuItem;
        }
    }
    
    public function createIterator()
    {
        return new DinerMenuIterator($this->menuItems);
    }
}