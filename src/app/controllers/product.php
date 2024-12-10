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
    public function insert_product()
    {
        $name = $_POST['name'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $data = array(
            'Name' => $name,
            'Category' => $category,
            'Description' => $description,
            'Price' => $price,
            'Image' => $image
        );
        $categorymodel = $this->load->model('categorymodel');
        $table = "product";
        $result = $categorymodel->insertItem($table, $data);
        if ($result != 0) {
            $message['msg'] = 'Thêm sản phẩm thành công.';
            header('Location:' . BASE_URL . '/product?msg=' . urlencode(serialize($message)));
            exit();
        } else {
            $message['msg'] = 'Thêm sản phẩm thất bại.';
            header('Location:' . BASE_URL . '/product?msg=' . urlencode(serialize($message)));
            exit();
        }
    }
}
