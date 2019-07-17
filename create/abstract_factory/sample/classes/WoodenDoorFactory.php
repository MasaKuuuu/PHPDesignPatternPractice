<?php
namespace classes;

use interfaces\DoorFactory;
use interfaces\Door;
use interfaces\DoorFittingExpert;
use classes\WoodenDoor;
use classes\Carpenter;

// 木製ドアのファクトリーは大工と木製ドアを返す
class WoodenDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }
}