<?php

class Overseas implements Guide
{
    // 挨拶をする
    public function WelcomeCustomers(){
        echo "いらっしゃいませ～！素敵な海外旅行をご案内させていただきます！\n";
    }

    // 行き先を聞く
    public function AskDestination(){
        echo "どちらの国まで行かれるご予定でしょうか？\n";
    }

    // おすすめの場所を教える
    public function RecommendPlace(){
        echo "今シーズン、おすすめは「フランス」です！\n";
    }
}