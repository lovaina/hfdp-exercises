<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 11/01/2017
 * Time: 14:28
 */

namespace HFDP\observer;


use SplSubject;

class PHPCurrentConditions implements \SplObserver
{


    public function update(SplSubject $subject)
    {
        return __CLASS__ . ' - ' . $subject->getName();
    }
}