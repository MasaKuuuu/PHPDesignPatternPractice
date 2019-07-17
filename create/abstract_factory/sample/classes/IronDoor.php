<?php
namespace classes;

use interfaces\Door;

class IronDoor implements Door
{
    public function getDescription()
    {
        echo '私は鉄のドアです';
    }
}