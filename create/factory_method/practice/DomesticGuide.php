<?php
//include_once ('HiringManager.php');
//include_once ('Developer.php');

class DomesticGuide extends TravelGuide
{
    protected function makeGuide(): Guide
    {
        return new Domestic();
    }
}