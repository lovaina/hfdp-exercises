<?php


namespace tests;


use HFDP\proxy\GumballMachine;
use HFDP\proxy\GumballMonitor;

class ProxyPatternTest extends \PHPUnit_Framework_TestCase
{

    public function test_GumballMonitor_report()
    {
        $machine = new GumballMachine('Castellón', 112);
        $monitor = new GumballMonitor($machine);

        $report = $monitor->report();

        $this->assertContains('Castellón', $report[0]);
        $this->assertContains('112', $report[1]);
        $this->assertContains('NoQuarterState', $report[2]);
    }
}
