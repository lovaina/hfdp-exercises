<?php


namespace HFDP\observer;


class StatisticsDisplay implements ObserverInterface, DisplayElementInterface
{
    /**
     * @var SubjectInterface
     */
    private $weatherData;

    private $temperature;


    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display()
    {
        return "Avg/Max/Min temperature: ".$this->temperature;
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        return $this->display();
    }
}