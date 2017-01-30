<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 30/01/2017
 * Time: 12:16
 */

namespace HFDP\iterator;


interface OwnIterator
{
    public function hasNext();
    public function next();
}