<?php

require_once('SubjectInterface.php');
require_once('ObserverInterface.php');
require_once('DisplayInterface.php');

class CurrentConditionsDisplay implements ObserverInterface, DisplayInterface
{
    private $temp;
    private $weatherData;

    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function __destruct()
    {
        $this->weatherData->removeObserver($this);
    }

    public function update(float $temp)
    {
        $this->temp = $temp;
        $this->display();
    }

    public function display()
    {
        echo $this->temp . PHP_EOL;
    }
}
