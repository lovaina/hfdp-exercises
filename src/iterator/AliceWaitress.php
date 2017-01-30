<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 30/01/2017
 * Time: 9:54
 */

namespace HFDP\iterator;


class AliceWaitress
{
    protected $pancakeMenu;
    protected $dinerMenu;

    public function __construct(PancakeHouseMenu $pancakeHouseMenu, DinerMenu $dinerMenu)
    {
        $this->pancakeMenu = $pancakeHouseMenu->getMenuItems();
        $this->dinerMenu = $dinerMenu->getMenuItems();
    }

    public function printMenu()
    {
        foreach ($this->pancakeMenu as $key => $menuItem){

            echo $menuItem->getName(). '\n';
            echo $menuItem->getPrice(). '\n';
            echo $menuItem->getDescription(). '\n';
            echo '----';

        }


        foreach ($this->dinerMenu as $key => $menuItem){

            echo $menuItem->getName(). '\n';
            echo $menuItem->getPrice(). '\n';
            echo $menuItem->getDescription(). '\n';
            echo '----';

        }
    }
}