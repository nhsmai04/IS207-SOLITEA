<?php

class testimonial extends DController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('testimonial'); 
    }
}