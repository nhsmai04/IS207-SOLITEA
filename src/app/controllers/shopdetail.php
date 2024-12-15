<?php
    class shopdetail extends Dcontroller{
            
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function index()
    {

        $this->load->view('cpanel/header');
        $this->load->view('cpanel/shopdetail');
        $this->load->view('cpanel/footer');
        
    }
    }
?>