<?php

namespace HFDP\observer;


class WeatherData implements SubjectInterface
{
    protected $observers;
    protected $temperature;
    protected $humidity;
    protected $pressure;

    public function __construct()
    {
        $this->observers = [];
    }


    public function registerObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer)
    {
        if(count($this->observers) > 0 && in_array($observer, $this->observers)){
            if(in_array($observer, $this->observers)){
                $key = array_search($observer, []);
                unset($this->observers[$key]);
            }
        }

        return $this->observers;
    }

    public function notifyObserver()
    {
        $display = [];
        foreach ($this->observers as $index => $observer){
            $display[]= $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
        
        return $display;
    }

    public function measurementsChanged()
    {
        return $this->notifyObserver();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        return $this->measurementsChanged();
    }
}