<?php

namespace HFDP\observer;


class CurrentConditionsDisplay implements ObserverInterface, DisplayElementInterface
{
    /**
     * @var SubjectInterface
     */
    private $weatherData;

    private $temperature;
    private $humidity;

    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display()
    {
        return "Current Conditions: Temp (Celsius): ".$this->temperature ." Humidity (%): ".$this->humidity;
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        return $this->display();
    }
}