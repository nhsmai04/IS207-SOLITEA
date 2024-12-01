<?php
# Chuyển trang viết ở class này
class index extends DController
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function homepage()
    {
        $this->load->model('homemodel');
        $this->load->view('home');
    }
}
