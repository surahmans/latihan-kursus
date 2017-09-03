<?php namespace Rahman\Store\Classes;

use Rahman\Store\Classes\Person;

class Student extends Person
{
    public function name()
    {
        return $this->completeName();
    }
}
