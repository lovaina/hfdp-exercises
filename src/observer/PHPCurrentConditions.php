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
    private $temperature;
    private $humidity;

    public function update(SplSubject $subject)
    {
        $this->temperature = $subject->getTemperature();
        $this->humidity = $subject->getHumidity();
        return $this->display();
        
    }

    public function display()
    {
        return "Current Conditions: Temp (Celsius): ".$this->temperature ." Humidity (%): ".$this->humidity;
    }
}