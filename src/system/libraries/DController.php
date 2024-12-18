<?php

class DController
{
    protected $load;

    public function __construct()
    {
        $this->load = new Load();
    }

    public function loadController($controller, $action = 'index')
    {
        $controller_path = 'controllers/' . $controller . '.php';

        if (file_exists($controller_path)) {
            include_once $controller_path;
            $controller_class = new $controller();
            if (method_exists($controller_class, $action)) {
                $controller_class->$action();
            } else {
                $this->loadPageNotFound();
            }
        } else {
            $this->loadPageNotFound();
        }
    }

    public function loadPageNotFound()
    {
        $this->load->controller('pagenotfound');
    }
}
