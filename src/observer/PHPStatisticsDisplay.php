<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 11/01/2017
 * Time: 14:35
 */

namespace HFDP\observer;


use SplSubject;

class PHPStatisticsDisplay implements \SplObserver
{
    private $temperature;

    public function update(SplSubject $subject)
    {
        $this->temperature = $subject->getTemperature();
        return $this->display();
    }

    public function display()
    {
        return "Avg/Max/Min temperature: ".$this->temperature;
    }
}