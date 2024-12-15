<?php
# Chuyển trang viết ở class này

class shopDetail extends DController
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index($id)
    {
        $shopDetailModel = $this->load->model('categorymodel');
        $table = "product";
        $data['fruit'] = $shopDetailModel->selectbyId($table, $id);
        $this->load->view('shop-detail', $data);
    }
}
?>