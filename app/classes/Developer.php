<?php

namespace App\Classes;

class Developer implements writeCode, testCode, communicate
{
    public function writeCode($code)
    {
        echo($code);
    }

    public function testCode($code)
    {
        echo($code);
    }

    public function communicate($code)
    {
        echo($code);
    }
}