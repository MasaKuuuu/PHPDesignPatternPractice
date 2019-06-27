<?php
//include_once ('HiringManager.php');
//include_once ('Developer.php');

class DevelopmentManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}