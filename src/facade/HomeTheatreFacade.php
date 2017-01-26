<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 24/01/2017
 * Time: 11:43
 */

namespace HFDP\facade;

class HomeTheatreFacade
{
    /**
     * @var Amplifier
     */
    private $amp;
    /**
     * @var Tuner
     */
    private $tuner;
    /**
     * @var DvdPlayer
     */
    private $dvd;
    /**
     * @var CdPlayer
     */
    private $cd;
    /**
     * @var TheatreLights
     */
    private $lights;
    /**
     * @var Screen
     */
    private $screen;
    /**
     * @var PopCornPopper
     */
    private $popper;
    /**
     * @var Pojector
     */
    private $projector;

    public function __construct(Amplifier $amp,
        Tuner $tuner, 
        DvdPlayer $dvd,
        CdPlayer $cd,
        Pojector $projector,
        TheatreLights $lights,
        Screen $screen,
        PopCornPopper $popper)
    {

        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->lights = $lights;
        $this->screen = $screen;
        $this->popper = $popper;
        $this->projector = $projector;
    }

    public function watchMovie($movie)
    {
       $message = [];
       $message[] =  $this->popper->on();
       $message[] =  $this->popper->pop();  
       $message[] =  $this->lights->dim();  
       $message[] =  $this->screen->down();
       $message[] =  $this->projector->wideScreenMode();
       $message[] =  $this->amp->on();
       $message[] =  $this->amp->setDvd($movie);
       $message[] =  $this->amp->setSurraoundSound();
       $message[] =  $this->amp->setVolume(5);
       $message[] =  $this->dvd->on();
       $message[] =  $this->dvd->play($movie);
        
        return $message;
    }

    public function endMovie()
    {
        $message = [];        
        $message[] = $this->popper->off();
        $message[] = $this->lights->on();
        $message[] = $this->screen->up();
        $message[] = $this->projector->off();
        $message[] = $this->amp->off();
        $message[] = $this->dvd->stop();
        $message[] = $this->dvd->eject();
        $message[] = $this->dvd->off();

        return $message;
    }
    
}