<?php

include_once('cooking.interface.php');

class Beef implements cooking
{
    protected $material;
    protected $state;

    public function __construct(String $material)
    {
        $this->material = $material;
    }

    public function Burn(): void
    {
        $this->state = '焼けた';
    }

    public function Boil(): void
    {
        $this->state = '煮た';
    }

    public function StirFry(): void
    {
        $this->state = '炒めた';
    }


    public function Fry(): void
    {
        $this->state = '揚げた';
    }


    public function Simmer(): void
    {
        $this->state = '茹でた';
    }


    public function MixedUp(): void
    {
        $this->state = '和えた';
    }


    public function Steam(): void
    {
        $this->state = '蒸した';
    }

    public function ReceiveFood(): String
    {
        return $this->state . $this->material;
    }

}