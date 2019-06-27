<?php
//include_once ('HiringManager.php');
//include_once ('CommunityExecutive.php');

class OverseasGuide extends TravelGuide
{
    protected function makeGuide(): Guide
    {
        return new Overseas();
    }
}