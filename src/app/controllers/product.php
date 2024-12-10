<?php

class product extends DController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->add_Product();
    }
    public function add_Product()
    {

        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/add_product');
        $this->load->view('cpanel/footer');
    }
}
