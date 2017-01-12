<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 11/01/2017
 * Time: 14:40
 */

namespace Tests;


use HFDP\observer\PHPCurrentConditions;
use HFDP\observer\PHPStatisticsDisplay;
use HFDP\observer\PHPWeatherData;

class ObserverPatterPHPTest extends \PHPUnit_Framework_TestCase
{
    public function test_ObserPatternPHP_own_php_library()
    {
        $conditions = new PHPCurrentConditions();
        $statistics = new PHPStatisticsDisplay();
        
        $subject = new PHPWeatherData('TEST');
        
        $subject->attach($conditions);
        $subject->attach($statistics);
        $subject->setMeasurements(80,65,30.4);
        $display = $subject->notify();
        
        $this->assertContains('Current Conditions: Temp (Celsius): 80 Humidity (%): 65', $display);
        $this->assertContains('Avg/Max/Min temperature: 80', $display);


        $subject->detach($statistics);
        
        $subject->setMeasurements(82,70,29.2);
        $display = $subject->notify();

        $this->assertContains('Current Conditions: Temp (Celsius): 82 Humidity (%): 70', $display);
        $this->assertNotContains('Avg/Max/Min temperature: 82', $display);
    }
}
