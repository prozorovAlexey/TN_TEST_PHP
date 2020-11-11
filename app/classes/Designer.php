<?php

namespace App\Classes;

class Designer implements draw, communicate
{
    public function draw($code)
    {
        echo $code;
    }

    public function communicate($code)
    {
        echo $code;
    }
}
