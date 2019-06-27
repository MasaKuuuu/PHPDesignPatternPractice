<?php

// 旅行ガイドさん
abstract class TravelGuide
{
    // Factory method
    abstract protected function makeGuide(): Guide;

    // お客様が来られたら誠心誠意、心を込めてオモテナシ（接客の基礎）
    public function CustomerService()
    {
        // お客様が来られたら、案内人を呼び出す
        $guide = $this->makeGuide();

        // ガイドラインに従って接客対応！
        $guide->WelcomeCustomers();
        $guide->AskDestination();
        $guide->recomendePlace();
    }
}