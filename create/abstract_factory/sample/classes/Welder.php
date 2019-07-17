<?php
namespace classes;

use interfaces\DoorFittingExpert;

class Welder implements DoorFittingExpert
{
    public function getDescription()
    {
        echo '私が取り付けられるのは鉄のドアだけです';
    }
}