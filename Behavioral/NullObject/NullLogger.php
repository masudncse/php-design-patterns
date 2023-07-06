<?php


namespace DesignPatterns\Behavioral\NullObject;

class NullLogger implements Logger
{
    public function log(string $str)
    {
        // do nothing
    }
}
