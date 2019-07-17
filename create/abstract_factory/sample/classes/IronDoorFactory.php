<?php
namespace classes;

use interfaces\Door;
use interfaces\DoorFactory;
use interfaces\DoorFittingExpert;

// 鉄製ドアのファクトリーで鉄製ドアとそれに合う取付職人を取得
class IronDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}