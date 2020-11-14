<?php

namespace App\Classes;

class Developer implements writeCode, testCode, communicate
{
    public function writeCode($input)
    {
        echo($input);
    }

    public function testCode($input)
    {
        echo($input);
    }

    public function communicate($input)
    {
        echo($input);
    }
}
