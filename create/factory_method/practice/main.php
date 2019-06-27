<?php
include_once ('Autoloader.php');

// 国内の旅行案内
$domesticGuide = new DomesticGuide();

// お客様がこられた！
$domesticGuide->CustomerService();

echo "\n";

// 海外の旅行案内
$overseasGuide = new OverseasGuide();

// お客様がこられた！
$overseasGuide->CustomerService();