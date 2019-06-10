<?php
//include_once ('Autoloader.php');
include_once ('NsAutoloader.php');
//include_once('FoodFactory.php');

use food\FoodFactory;

$meet = FoodFactory::cookFood('pork');
$meet->Boil();
echo 'ご注文は: ' . $meet->ReceiveFood();

$meet->Burn();
echo 'ご注文は: ' . $meet->ReceiveFood();