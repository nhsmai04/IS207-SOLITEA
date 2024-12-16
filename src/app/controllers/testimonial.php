<?php

class testimonial extends DController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('cpanel/header');
        $this->load->view('testimonial'); 
        $this->load->view('cpanel/footer');
    }
}