<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 30/01/2017
 * Time: 12:27
 */

namespace HFDP\iterator;


class PancakeHouseIterator implements OwnIterator
{

    protected $menuItems;
    protected $position = 0;

    public function __construct($menuItems)
    {
        $this->menuItems = $menuItems;
    }

    public function next()
    {
        $menuItem = $this->menuItems[$this->position];
        $this->position = $this->position+1;
        return $menuItem;
    }

    public function hasNext(){
        if($this->position >= count($this->menuItems) || $this->menuItems[$this->position] == null){
            return false;
        }else{
            return true;
        }
    }
}