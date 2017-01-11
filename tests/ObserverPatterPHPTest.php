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
        
        $display = $subject->notify();
        
        $this->assertContains('HFDP\observer\PHPCurrentConditions - TEST', $display);
        $this->assertContains('HFDP\observer\PHPStatisticsDisplay - TEST', $display);
        
        $subject->detach($statistics);
        $display = $subject->notify();

        $this->assertContains('HFDP\observer\PHPCurrentConditions - TEST', $display);
        $this->assertNotContains('HFDP\observer\PHPStatisticsDisplay - TEST', $display);
    }
}
