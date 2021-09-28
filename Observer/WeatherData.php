<?php

require_once('SubjectInterface.php');
require_once('ObserverInterface.php');

class WeatherData implements SubjectInterface
{
    private $observers;
    private $temp;

    public function __construct()
    {
        $this->observers = array();
    }

    public function registerObserver(ObserverInterface $o)
    {
        $this->observers[] = $o;
    }

    public function removeObserver(ObserverInterface $o)
    {
        foreach ($this->observers as $index => $observer) {
            if ($observer === $o) {
                var_dump($this->observers);
                $this->observers = array_splice($this->observers, $index, 1);
                var_dump($this->observers);
                break;
            }
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temp);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temp)
    {
        $this->temp = $temp;
        $this->measurementsChanged();
    }

}
