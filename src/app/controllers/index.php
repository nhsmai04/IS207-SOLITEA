<?php
# Chuyển trang viết ở class này

class index extends DController
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index()
    {
        $homemodel = $this->load->model('categorymodel');
        $table = "drinks";
        $data['fruits'] = $homemodel->selectallItem($table);
        $this->load->view('index', $data);
    }
}
