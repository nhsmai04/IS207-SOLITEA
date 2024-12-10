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
        $sql = "SELECT * FROM $table_admin WHERE username = ? AND password = ?";
        // $stmt = $this->db->prepare($sql);
        // $stmt->bindValue(':username', $username);
        // $stmt->bindValue(':password', $password);
        // $stmt->execute();   
        // return $stmt->rowCount();
        echo $this->db->affectedRow($sql, $username, $password);
        return $this->db->affectedRow($sql, $username, $password);
    }
    public function getLogin($table_admin, $username, $password)
    {
        $sql = "SELECT * FROM $table_admin WHERE username =? AND password = ?";
        return $this->db->selectUser($sql, $username, $password);
    }
}
