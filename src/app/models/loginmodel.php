<?php
class loginmodel extends DModel
{
    protected $db;
    public function __construct()
    {
        parent::__construct();
    }

    public function login($table, $sql, $username, $password)
    {
        // $stmt = $this->db->prepare($sql);
        // $stmt->bindValue(':username', $username);
        // $stmt->bindValue(':password', $password);
        // $stmt->execute();   
        // return $stmt->rowCount();
<<<<<<< HEAD
        return $this->db->affectedRow($table, $sql, $username, $password);
    }
    public function getLoginAdmin($table_admin, $sql, $username, $password)
=======

        return $this->db->affectedRow($sql, $username, $password);
    }

    public function getLoginAdmin($table_admin, $username, $password)
>>>>>>> 53c4491f16c2d14491cd1613f0cd7ca3930416d8
    {
        return $this->db->selectUser($sql, $username, $password);
    }
<<<<<<< HEAD

    public function getLoginUser($table_user, $sql, $email_user, $password)
    {
=======
    public function getLoginUser($table_user, $email_user, $password)
    {
        $sql = "SELECT * FROM $table_user WHERE username =? AND password = ?";
>>>>>>> 53c4491f16c2d14491cd1613f0cd7ca3930416d8
        return $this->db->selectUser($sql, $email_user, $password);
    }
}
