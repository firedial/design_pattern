<?php

require_once('WeatherData.php');
require_once('CurrentConditionsDisplay.php');

$weatherData = new WeatherData;
$weatherData->setMeasurements(1.1);

$current1 = new CurrentConditionsDisplay($weatherData);
$current2 = new CurrentConditionsDisplay($weatherData);
$current3 = new CurrentConditionsDisplay($weatherData);

$weatherData->setMeasurements(1.2);

$weatherData->removeObserver($current1);
$weatherData->setMeasurements(1.3);

unset($current2);
$weatherData->setMeasurements(1.4);
