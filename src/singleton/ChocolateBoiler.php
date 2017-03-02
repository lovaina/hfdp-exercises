<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 20/01/2017
 * Time: 9:47
 */

namespace HFDP\singleton;


class ChocolateBoiler
{
    private static $empty;
    private static $boiled;

    private static $chocolateBoiler;

    private function __construct(){
        self::$empty = true;
        self::$boiled = false;
    }

    public static function getChocolateInstance(){
        if(self::$chocolateBoiler == null){
            self::$chocolateBoiler = new ChocolateBoiler();
        }

        return self::$chocolateBoiler;
    }

    public function fill()
    {
        if($this->isEmpty()){
            self::$empty = false;
            self::$boiled = false;
        }
    }

    public function drain()
    {
        if(!$this->isEmpty() && $this->isBoiled()){
            self::$empty = true;
        }
    }
    public function boil()
    {
        if(!$this->isEmpty() && !$this->isBoiled()){
            self::$boiled = true;
        }
    }

    public function isEmpty()
    {
        return self::$empty;
    }

    public function isBoiled()
    {
        return self::$boiled;
    }

}