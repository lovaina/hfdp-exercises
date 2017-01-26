<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/01/2017
 * Time: 9:03
 */

namespace tests;


use HFDP\facade\Amplifier;
use HFDP\facade\CdPlayer;
use HFDP\facade\DvdPlayer;
use HFDP\facade\HomeTheatreFacade;
use HFDP\facade\Pojector;
use HFDP\facade\PopCornPopper;
use HFDP\facade\Screen;
use HFDP\facade\TheatreLights;
use HFDP\facade\Tuner;

class FacadePatternTest extends \PHPUnit_Framework_TestCase
{

    public function test_watchMovie()
    {

        $theatre = new HomeTheatreFacade(
            new Amplifier(),
            new Tuner(),
            new DvdPlayer(),
            new CdPlayer(),
            new Pojector(),
            new TheatreLights(),
            new Screen(),
            new PopCornPopper()
        );

        $message = $theatre->watchMovie('Jumanji');

        $this->assertContains('PopCornPopper on', $message);
        $this->assertContains('PopCornPopper pop', $message);
        $this->assertContains('TheatreLights dim', $message);
        $this->assertContains('Screen down', $message);
        $this->assertContains('Pojector wideScreenMode', $message);
        $this->assertContains('Amplifier on', $message);
        $this->assertContains('Amplifier set dvd: Jumanji', $message);
        $this->assertContains('Amplifier set SurroundSound', $message);
        $this->assertContains('Amplifier set volume: 5', $message);
        $this->assertContains('DvdPlayer on', $message);
        $this->assertContains('DvdPlayer play', $message);
    }

    public function test_endMovie()
    {
        $theatre = new HomeTheatreFacade(
            new Amplifier(),
            new Tuner(),
            new DvdPlayer(),
            new CdPlayer(),
            new Pojector(),
            new TheatreLights(),
            new Screen(),
            new PopCornPopper()
        );

       $theatre->watchMovie('The Avengers');
       $message = $theatre->endMovie();


        $this->assertContains('PopCornPopper off', $message);
        $this->assertContains('TheatreLights on', $message);
        $this->assertContains('Screen up', $message);
        $this->assertContains('Pojector off', $message);
        $this->assertContains('Amplifier off', $message);
        $this->assertContains('DvdPlayer stop', $message);
        $this->assertContains('DvdPlayer eject', $message);
        $this->assertContains('DvdPlayer off', $message);
    }

}
