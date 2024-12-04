<?php
# Chuyển trang viết ở class này

class login extends DController
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index()
    {
        $this->login();
    }
    public function login()
    {
        $this->load->view('cpanel/login');
    }
    public function authentication_login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $table_admin = 'admin';
        $loginmodel = $this->load->model('loginmodel');

        $count = $loginmodel->login($table_admin, $username, $password);
    }
}
