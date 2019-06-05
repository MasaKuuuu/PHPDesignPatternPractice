<?php
include_once('FoodFactory.php');

$meet = FoodFactory::cookFood('pork');
$meet->Boil();
echo 'ご注文は: ' . $meet->ReceiveFood();

$meet->Burn();
echo 'ご注文は: ' . $meet->ReceiveFood();