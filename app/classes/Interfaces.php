<?php

namespace App\Classes;

interface writeCode
{
    public function writeCode($input);
}

interface draw
{
    public function draw($input);
}

interface testCode
{
    public function testCode($input);
}

interface communicate
{
    public function communicate($input);
}

interface taskPlanning
{
    public function taskPlanning($input);
}

define("writeCode", "code writing");
define("communicate", "communication with manager");
define("taskPlanning", "task planning");
define("testCode", "code testing");
define("draw", "drawing");
