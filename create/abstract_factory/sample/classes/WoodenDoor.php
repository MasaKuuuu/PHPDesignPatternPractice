<?php
namespace classes;

use interfaces\Door;

class WoodenDoor implements Door
{
    public function getDescription()
    {
        echo '私は木のドアです';
    }
}
