<?php

class Domestic implements Guide
{
    // 挨拶をする
    public function WelcomeCustomers(){
        echo "いらっしゃいませ！素敵な国内旅行をご案内させていただきます！\n";
    }

    // 行き先を聞く
    public function AskDestination(){
        echo "どちらまで行かれるご予定でしょうか？\n";
    }

    // おすすめの場所を教える
    public function RecommendPlace(){
        echo "今シーズン、おすすめは「沖縄」です！\n";
    }
}
