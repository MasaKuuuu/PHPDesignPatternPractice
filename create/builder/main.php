<?php

/*
 * メソッドチェーンについては以下も参考になる
 * https://qiita.com/ichi_404/items/17bba17c46363a702909
 */
$burger = (new BurgerBuilder(14))
    ->addPepperoni()
    ->addLettuce()
    ->addTomato()
    ->build();