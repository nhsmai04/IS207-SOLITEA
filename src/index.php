<?php
// Autoload classes
spl_autoload_register(function ($class) {
    include_once 'system/libraries/' . $class . '.php';
});
include_once './system/libraries/Main.php';
include_once './app/config/config.php';

// Xử lý URL
$main = new Main();
