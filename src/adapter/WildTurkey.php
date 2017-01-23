<?php

namespace HFDP\adapter;


class WildTurkey implements Turkey
{

    public function gobble()
    {
        return "Gobble";
    }

    public function fly()
    {
        return "I also fly!";
    }
}