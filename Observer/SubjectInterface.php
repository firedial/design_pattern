<?php

require_once('ObserverInterface.php');

interface SubjectInterface
{
    public function registerObserver(ObserverInterface $o);
    public function removeObserver(ObserverInterface $o);
    public function notifyObservers();
}
