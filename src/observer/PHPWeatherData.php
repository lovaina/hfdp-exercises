<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 11/01/2017
 * Time: 14:27
 */

namespace HFDP\observer;


use SplObserver;

class PHPWeatherData implements \SplSubject
{

    protected $temperature;
    protected $humidity;
    protected $pressure;
    private $observers;
    private $name;

    public function __construct($name)
    {
        $this->observers = new \SplObjectStorage();
        $this->name = $name;
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }


    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        $data = [];
        foreach ($this->observers as $observer) {
            $data[] = $observer->update($this);
        }

        return $data;
    }

    public function getName() {
        return $this->name;
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @return mixed
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * @return mixed
     */
    public function getPressure()
    {
        return $this->pressure;
    }
}