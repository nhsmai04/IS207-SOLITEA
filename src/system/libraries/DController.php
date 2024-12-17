<?php

class DController
{
    protected $load;

    public function __construct()
    {
        $this->load = new Load();
    }

    // Kiểm tra controller và action nếu không tìm thấy thì chuyển hướng đến pagenotfound
    public function loadController($controller, $action = 'index')
    {
        // Đường dẫn tới controller
        $controller_path = 'controllers/' . $controller . '.php';

        if (file_exists($controller_path)) {
            // Nếu controller tồn tại, load file controller
            include_once $controller_path;
            $controller_class = new $controller();

            // Kiểm tra nếu action tồn tại trong controller, nếu có thì gọi
            if (method_exists($controller_class, $action)) {
                $controller_class->$action();
            } else {
                // Nếu action không tồn tại, chuyển hướng đến pagenotfound
                $this->loadPageNotFound();
            }
        } else {
            // Nếu controller không tồn tại, chuyển hướng đến pagenotfound
            $this->loadPageNotFound();
        }
    }

    // Hàm load trang pagenotfound
    public function loadPageNotFound()
    {
        // Tải controller pagenotfound.php
        $this->load->controller('pagenotfound');
    }
}
