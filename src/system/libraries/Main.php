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
        $this->url = isset($_GET['url']) ? filter_var(trim($_GET['url'], '/'), FILTER_SANITIZE_URL) : null;
        $this->urlParts = $this->url ? explode('/', $this->url) : [];
    }

    public function loadController()
    {
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
        // Kiểm tra xem URL có đủ 3 phần hay không
        if (isset($this->urlParts[2]) && isset($this->urlParts[3])) {
            $this->methodName = $this->urlParts[1];
            if (method_exists($this->controller, $this->methodName)) {
                $this->controller->{$this->methodName}($this->urlParts[2], $this->urlParts[3]);
            } else {
                $this->error("Method not found: " . $this->methodName);
            }
        } elseif (isset($this->urlParts[1])) {
            $this->methodName = $this->urlParts[1];
            if (method_exists($this->controller, $this->methodName)) {
                $this->controller->{$this->methodName}();
            } else {
                $this->error("Method not found: " . $this->methodName);
            }
        } else {
            if (method_exists($this->controller, $this->methodName)) {
                $this->controller->{$this->methodName}();
            } else {
                $this->error("Method not found: " . $this->methodName);
            }
        }
    }


    public function error($message)
    {
        echo "<h1>Error: $message</h1>";
        include 'app/views/404.php';
        exit;
    }
}
