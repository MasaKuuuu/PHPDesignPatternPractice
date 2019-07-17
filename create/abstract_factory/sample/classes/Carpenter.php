<?php
namespace classes;

use interfaces\DoorFittingExpert;

class Carpenter implements DoorFittingExpert
{
    public function getDescription()
    {
        echo '私が取り付けられるのは木のドアだけです';
    }
}