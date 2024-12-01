<?php
#kết nối đến CSDL
class DModel
{
    protected $db;
    public function __construct()
    {
        $connect = 'mysql:host=localhost;dbname=pdo_is207;charset=utf8mb4';
        $user = 'root';
        $password = '';

        $this->db = new Database($connect, $user, $password);
    }
}
