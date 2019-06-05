<?php

interface  cooking
{
    // 料理の基本
    //// 焼く、茹でる、炒める、揚げる、煮る、和える、蒸す
    public function Burn (): void;
    public function Boil(): void;
    public function StirFry(): void;
    public function Fry(): void;
    public function Simmer(): void;
    public function MixedUp(): void;
    public function Steam(): void;
    public function ReceiveFood(): String;
}