<?php
include_once('Interviewer.php');

class Developer implements Interviewer
{
    public function askQuestions()
    {
        echo 'デザインパターンについて尋ねる';
    }
}
