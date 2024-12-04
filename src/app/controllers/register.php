<?php
# Chuyển trang viết ở class này

class register extends DController
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index()
    {
        $this->register();
        $this->registerUser();
    }
    public function register()
    {
        $this->load->view('cpanel/register');
    }
    // public function authentication_login()
    // {
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
    //     $table = 'user';

    //     $table_admin = 'admin';
    //     $loginmodel = $this->load->model('loginmodel');

    //     $count = $loginmodel->login($table_admin, $username, $password);
    // }

    public function registerUser()
    {
        // $username = $_POST['username'];
        // $password = $_POST['password'];
        $table = 'user';
        $registermodel = $this->load->model('categorymodel');
        $data = array(
            'id_user' => '3',
            'name' => 'Nguyen van A',
            'phone' => '0318312090',
            'password' => 'aloalo',
            'email' => 'alo@gmail.com',
            'address' => 'Ha Noi',
        );
        $registermodel->insertItem($table, $data);
    }
}
