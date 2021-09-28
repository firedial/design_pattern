<?php

require_once('FlyBehaviorInterface.php');

abstract class Duck
{
    protected $flyBehavior;

    public function __construct()
    {
    }

    public function performFly()
    {
        return $this->flyBehavior->fly();
    }
    public function setFlyBehavior(FlyBehaviorInterface $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }
}


