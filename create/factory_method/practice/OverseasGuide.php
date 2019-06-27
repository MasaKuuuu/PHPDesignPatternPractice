<?php

// 海外案内に転身したガイドさん
class OverseasGuide extends TravelGuide
{
    protected function makeGuide(): Guide
    {
        return new Overseas();
    }
}