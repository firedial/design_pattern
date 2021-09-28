<?php

require_once('FlyWithWings.php');
require_once('Duck.php');

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings;
    }
}


