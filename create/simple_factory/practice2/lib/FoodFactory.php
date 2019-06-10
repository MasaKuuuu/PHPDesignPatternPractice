<?php
use food\Beef;
use food\Chicken;
use food\Fish;
use food\Pork;
//include_once('Beef.php');
//include_once('Chicken.php');
//include_once('Fish.php');
//include_once('Pork.php');

class FoodFactory
{
    public static function cookFood($material): cooking
    {
        switch ($material){
            case 'chicken' :
                return new Chicken($material);
                break;
            case 'beef' :
                return new Beef($material);
                break;
            case 'pork' :
                return new Pork($material);
                break;
            case 'fish' :
                return new fish($material);
                break;
            default :
                echo '豚、鳥、牛、魚から選んでね';
                break;
        }
    }
}