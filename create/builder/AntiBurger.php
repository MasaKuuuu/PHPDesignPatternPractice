<?php

/**
 * このパターンは「telescopingConstructort」というアンチパターンです
 */
class AntiBurger
{
    protected $size;
    protected $cheese;
    protected $pepperoni;
    protected $tomato;
    protected $lettuce;

    /**
     * パラメータが増えるとオブジェクトを作成する際にどんどん複雑になっていくパターン
     * 引数の並び順を理解するのも困難に・・・
     *
     * @param $size
     * @param bool $cheese
     * @param bool $pepperoni
     * @param bool $tomato
     * @param bool $lettuce
     */
    public function __construct($size, $cheese = true, $pepperoni = true, $tomato = false, $lettuce = true)
    {
        $this->size = $size;
        $this->cheese = $cheese;
        $this->pepperoni = $pepperoni;
        $this->tomato = $tomato;
        $this->lettuce = $lettuce;
    }
}