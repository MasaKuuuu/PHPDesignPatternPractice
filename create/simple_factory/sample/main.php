<?php
include_once('DoorFactory.php');

$door = DoorFactory::makeDoor(100, 200);
echo 'Width: ' . $door->getWidth();
echo 'Height: ' . $door->getHeight();