<?php

namespace HFDP\singleton;


/**
 * @property  singleton
 */
class Singleton
{
    private static $singleton;

    private function __construct(){}

    public static function getInstance()
    {
        if(self::$singleton == null){
            self::$singleton = new Singleton();
        }
        
        return self::$singleton;
    }
}