<?php

namespace App\Classes;

class Tester implements testCode, communicate, taskPlanning
{
    public function taskPlanning($code)
    {
        echo $code;
    }

    public function testCode($code)
    {
        echo $code;
    }

    public function communicate($code)
    {
        echo $code;
    }
}
