<?php

class privacy extends DController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('privacy'); 
    }
}