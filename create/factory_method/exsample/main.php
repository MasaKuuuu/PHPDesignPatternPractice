<?php
include_once ('Autoloader.php');

//include_once ('DevelopmentManager.php');
//include_once ('MarketingManager.php');

$devManager = new DevelopmentManager();
$devManager->takeInterview();       // 出力: デザインパターンについて尋ねる

$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); // コミュニティ育成について尋ねる