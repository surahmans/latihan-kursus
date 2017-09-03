<?php namespace Rahman\Store\Classes;

class Person 
{
    protected $firstName = 'Surahman';

    protected $lastName = 'Duang';

    protected function completeName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
