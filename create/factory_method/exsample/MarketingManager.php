<?php
//include_once ('HiringManager.php');
//include_once ('CommunityExecutive.php');

class MarketingManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}