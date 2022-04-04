<?php

/**
 * Class FirsTest
 */
class FirsTest
{
    private $var;

    public function __construct()
    {
        $this->var = 'test';
    }

    public function getVar()
    {
        echo $this->var;
    }
}