<?php

class fo0fo extends DController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('cpanel/header');
        $this->load->view('404'); 
        $this->load->view('cpanel/footer');
    }
}