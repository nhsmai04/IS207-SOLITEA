<?php
class loginmodel extends DModel
{
    protected $db;
    public function __construct()
    {
        parent::__construct();
    }

    public function login($table_admin, $username, $password)
    {
        $sql = "SELECT * FROM $table_admin WHERE username= ? AND password= ?";
        return $this->db->affectedRow($sql, $username, $password);
    }
}
