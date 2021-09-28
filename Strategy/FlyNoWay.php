<?php

require_once('FlyBehaviorInterface.php');

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
        return 'fly no way';
    }
}
