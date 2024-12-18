<?php

class Main
{
    public $url;
    public $controllerName = "index";
    public $methodName = "index";
    public $controllerPath = "app/controllers/";
    public $controller;
    public $urlParts = [];

    function __construct()
    {
        $this->getURL();
        $this->loadController();
        $this->callMethod();
    }

    public function getURL()
    {
        // Lấy URL từ tham số GET
        $this->url = isset($_GET['url']) ? filter_var(trim($_GET['url'], '/'), FILTER_SANITIZE_URL) : null;
        $this->urlParts = $this->url ? explode('/', $this->url) : [];
    }

    public function loadController()
    {
        // Kiểm tra nếu không có controller trong URL, dùng controller mặc định
        if (!isset($this->urlParts[0])) {
            include $this->controllerPath . $this->controllerName . '.php';
            if (class_exists($this->controllerName)) {
                $this->controller = new $this->controllerName();
            } else {
                $this->error("Controller class not found: " . $this->controllerName);
            }
        } else {
            $this->controllerName = $this->urlParts[0];
            $fileName = $this->controllerPath . $this->controllerName . '.php';
            if (file_exists($fileName)) {
                include $fileName;
                if (class_exists($this->controllerName)) {
                    $this->controller = new $this->controllerName();
                } else {
                    $this->error("Controller class not found: " . $this->controllerName);
                }
            } else {
                $this->error("Controller file not found: " . $fileName);
            }
        }
    }

    public function callMethod()
{
    // Kiểm tra nếu URL có ít nhất 3 phần (controller/method/param1)
    if (isset($this->urlParts[2])) {
        $this->methodName = $this->urlParts[1];
        
        // Kiểm tra nếu phương thức tồn tại trong controller
        if (method_exists($this->controller, $this->methodName)) {
            if (isset($this->urlParts[3])) {
                // Truyền 2 tham số nếu có
                $this->controller->{$this->methodName}($this->urlParts[2], $this->urlParts[3]);
            } else {
                // Truyền 1 tham số
                $this->controller->{$this->methodName}($this->urlParts[2]);
            }
        } else {
            $this->error("Method not found: " . $this->methodName);
        }
    } elseif (isset($this->urlParts[1])) {
        $this->methodName = $this->urlParts[1];
        
        // Kiểm tra nếu phương thức tồn tại trong controller
        if (method_exists($this->controller, $this->methodName)) {
            $this->controller->{$this->methodName}();
        } else {
            $this->error("Method not found: " . $this->methodName);
        }
    } else {
        // Gọi phương thức mặc định
        if (method_exists($this->controller, $this->methodName)) {
            $this->controller->{$this->methodName}();
        } else {
            $this->error("Method not found: " . $this->methodName);
        }
    }
}

    public function callMethodWithThreeParams()
    {
        // Xác định phương thức từ URL
        $this->methodName = $this->urlParts[1];
        // Kiểm tra nếu phương thức tồn tại trong controller
        if (method_exists($this->controller, $this->methodName)) {
            // Gọi phương thức với 3 tham số từ URL
            $this->controller->{$this->methodName}($this->urlParts[2], $this->urlParts[3], $this->urlParts[4]);
        } else {
            $this->error("Method not found: " . $this->methodName);
        }
    }

    public function error($message)
    {
        echo "<h1>Error: $message</h1>";
        include 'app/views/404.php';
        exit;
    }
}
