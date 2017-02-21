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

    public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu)
    {
        $this->pancakeMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu()
    {
        $pancakeIterator = $this->pancakeMenu->createIterator();
        $dinerMenuIterator = $this->dinerMenu->createIterator();

        $this->printIteratorMenu($pancakeIterator);
        $this->printIteratorMenu($dinerMenuIterator);
    }

    private function printIteratorMenu(OwnIterator $iterator)
    {
        while ($iterator->hasNext()){
            $menuItem = $iterator->next();
            echo $menuItem->getName(). '\n';
            echo $menuItem->getPrice(). '\n';
            echo $menuItem->getDescription(). '\n';
        }
    }
}