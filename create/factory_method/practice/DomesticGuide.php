<?php

// 国内案内に転身したガイドさん
class DomesticGuide extends TravelGuide
{
    protected function makeGuide(): Guide
    {
        return new Domestic();
    }
}