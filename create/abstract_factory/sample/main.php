<?php
require_once ('Autoloader.php');

use classes\WoodenDoorFactory;
use classes\IronDoorFactory;

$woodenFactory = new WoodenDoorFactory();

$door = $woodenFactory->makeDoor();
$expert = $woodenFactory->makeFittingExpert();

$door->getDescription();   // 出力: 私は木のドアです
$expert->getDescription(); // 出力: 私が取り付けられるのは木のドアだけです

// 鉄製ドアの場合も同様
$ironFactory = new IronDoorFactory();

$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();

$door->getDescription();   // 出力: 私は鉄のドアです
$expert->getDescription(); // 出力: 私が取り付けられるのは鉄製ドアだけです