<?php

namespace App\Classes;

class Designer implements draw, communicate
{
    public function draw($input)
    {
        echo($input);
    }

    public function communicate($input)
    {
        echo($input);
    }
}
