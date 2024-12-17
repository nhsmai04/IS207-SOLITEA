<?php
# Chuyển trang viết ở class này

class search extends DController
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index()
    {
        $keyword = isset($_GET['q']) ? $_GET['q'] : ''; 
        $searchmodel = $this->load->model('categorymodel');
        $table = "product";
        $data['fruits'] = $searchmodel->selectallItemByQuery($table, $keyword);
        $data['keyword'] = $keyword;
        $this->load->view('search', $data);
    }
}
?>