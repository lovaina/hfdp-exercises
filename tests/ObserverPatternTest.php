<?php

namespace Tests;


use HFDP\observer\CurrentConditionsDisplay;
use HFDP\observer\StatisticsDisplay;
use HFDP\observer\WeatherData;

class ObserverPatternTest extends \PHPUnit_Framework_TestCase
{

    public function test_SubjectInterfaceInstace()
    {
        $subject = new WeatherData();
        $this->assertInstanceOf('HFDP\observer\SubjectInterface', $subject);
    }

    public function test_CurrentConditionsDisplay()
    {
        $subject = new WeatherData();
        $observer = new CurrentConditionsDisplay($subject);
        $this->assertInstanceOf('HFDP\observer\ObserverInterface', $observer);
        $this->assertInstanceOf('HFDP\observer\DisplayElementInterface', $observer);
    }

    public function test_WeatherStationObject()
    {
        $subject = new WeatherData();
        $currentCondition = new CurrentConditionsDisplay($subject);
        $statistic = new StatisticsDisplay($subject);        
        
        $display = $subject->setMeasurements(80,65,30.4);
     
        $this->assertContains('Current Conditions: Temp (Celsius): 80 Humidity (%): 65', $display);
        $this->assertContains('Avg/Max/Min temperature: 80', $display);

        $display = $subject->setMeasurements(82,70,29.2);

        $this->assertContains('Current Conditions: Temp (Celsius): 82 Humidity (%): 70', $display);
        $this->assertContains('Avg/Max/Min temperature: 82', $display);
        
    }

    public function test_UnregisterObserver()
    {
        $subject = new WeatherData();
        $currentCondition = new CurrentConditionsDisplay($subject);
        $statistic = new StatisticsDisplay($subject);
        $this->assertCount(1,$subject->removeObserver($currentCondition));
        
        $display = $subject->setMeasurements(80,65,30.4);
        $this->assertNotContains('Current Conditions: Temp (Celsius): 80 Humidity (%): 65', $display);
        $this->assertContains('Avg/Max/Min temperature: 80', $display);
    }
}
