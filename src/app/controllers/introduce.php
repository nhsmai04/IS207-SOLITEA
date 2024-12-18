<?php

class introduce extends DController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('introduce'); 
    }
}