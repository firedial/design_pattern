<?php

require_once('FlyBehaviorInterface.php');

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        return 'fly with wings';
    }
}
