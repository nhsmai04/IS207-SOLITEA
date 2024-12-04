<?php

class product extends DController
{

    public function __construct()
    {
        parent::__construct();
    }
    public function allItem()
    {
        $index = $this->load->model('homemodel');

        // Lấy dữ liệu
        $data = $index->getItem();

        // Tải view và truyền dữ liệu
        $this->load->view('fruits', ['drinks' => $data]);
    }
}
