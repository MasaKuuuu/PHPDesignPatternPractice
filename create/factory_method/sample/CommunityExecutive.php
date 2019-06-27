<?php
include_once ('Interviewer.php');

class CommunityExecutive implements Interviewer
{
    public function askQuestions()
    {
        echo 'コミュニティ育成について尋ねる';
    }
}