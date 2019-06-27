<?php
interface Guide
{
    // 挨拶をする
    public function WelcomeCustomers();

    // 行き先を聞く
    public function AskDestination();

    // おすすめの場所を教える
    public function RecomendePlace();
}
