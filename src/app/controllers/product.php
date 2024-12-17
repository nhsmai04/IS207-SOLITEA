<?php

class product extends DController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->add_category();
        $this->list_Category();
    }
    public function add_category()
    {

        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/add_product');
        $this->load->view('cpanel/footer');
    }
    public function insert_category()
    {
        $name = $_POST['name'];
        $type = $_POST['type'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $data = array(
            'Name' => $name,
            'Category' => $category,
            'Type' => $type,
            'Description' => $description,
            'Price' => $price,
            'Image' => $image
        );
        $categorymodel = $this->load->model('categorymodel');
        $table = "product";
        $result = $categorymodel->insertItem($table, $data);
        if ($result != 0) {
            $message['msg'] = 'Thêm sản phẩm thành công.';
            header('Location:' . BASE_URL . '/product/list_category?msg=' . urlencode(serialize($message)));
            exit();
        } else {
            $message['msg'] = 'Thêm sản phẩm thất bại.';
            header('Location:' . BASE_URL . '/product?msg=' . urlencode(serialize($message)));
            exit();
        }
    }
    public function list_category()
    {
        $categorymodel = $this->load->model('categorymodel');
        $table = "product";
        $data['product'] = $categorymodel->selectallItem($table);
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/list_product', $data);
        $this->load->view('cpanel/footer');
    }
    public function delete_category($id)
    {
        $categorymodel = $this->load->model('categorymodel');
        $table = "product";
        $cond = ['Id' => $id];
        $result = $categorymodel->deleteItem($table, $cond);
        if ($result != 0) {
            $message['msg'] = 'Xoá sản phẩm thành công.';
            header('Location:' . BASE_URL . '/product/list_category?msg=' . urlencode(serialize($message)));
            exit();
        } else {
            $message['msg'] = 'Xoá sản phẩm thất bại.';
            header('Location:' . BASE_URL . '/product/list_category?msg=' . urlencode(serialize($message)));
            exit();
        }
    }
    public function update_category($id)
    {
        $categorymodel = $this->load->model('categorymodel');
        $table = "product";
        //$cond = "Id = $id";

        $data['productbyid'] = $categorymodel->selectbyId($table, $id);


        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/update_product', $data);
        $this->load->view('cpanel/footer');
    }
    public function edit_category($id)
    {
        $categorymodel = $this->load->model('categorymodel');
        $table = "product";
        $cond = "Id = $id";
        $name = $_POST['name'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $data = [
            'Name' => $name,
            'Category' => $category,
            'Description' => $description,
            'Price' => $price,
            'Image' => $image
        ];
        $cond = ['Id' => $id];
        $result =  $categorymodel->updateItem($table, $data, $cond);
        if ($result != 0) {
            $message['msg'] = 'Update sản phẩm thành công.';
            header('Location:' . BASE_URL . '/product/list_category?msg=' . urlencode(serialize($message)));
            exit();
        } else {
            $message['msg'] = 'Update sản phẩm thất bại.';
            header('Location:' . BASE_URL . '/product/list_category?msg=' . urlencode(serialize($message)));
            exit();
        }
    }
}