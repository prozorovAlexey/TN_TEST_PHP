<?php

namespace App\Classes;

class Tester implements testCode, communicate, taskPlanning
{
    public function taskPlanning($input)
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
