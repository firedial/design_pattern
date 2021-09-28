<?php

require_once('MallardDuck.php');
require_once('FlyNoWay.php');

$mallardDuck = new MallardDuck;
echo $mallardDuck->performFly();

$mallardDuck->setFlyBehavior(new FlyNoWay);
echo $mallardDuck->performFly();

