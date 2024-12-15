<?php
# Chuyển trang viết ở class này

class shopDetail extends DController
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index()
    {
        $homemodel = $this->load->model('categorymodel');
        $table = "product";
        $data['fruits'] = $homemodel->selectallItem($table);
        $this->load->view('shop-detail', $data);
    }
}
?>