<?php
class Load
{

    public function __construct() {}

    public function view($filename)
    {
        include_once './app/views/' . $filename . '.php';
    }
    public function model($filename)
    {
        include_once './app/models/' . $filename . '.php';
        return new $filename();
    }
}
