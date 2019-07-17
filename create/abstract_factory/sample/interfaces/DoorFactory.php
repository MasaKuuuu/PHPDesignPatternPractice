<?php
namespace interfaces;

use interfaces\Door;
use interfaces\DoorFittingExpert;

interface DoorFactory
{
    public function makeDoor(): Door;
    public function makeFittingExpert(): DoorFittingExpert;
}