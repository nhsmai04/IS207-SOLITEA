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

        return $this->db->affectedRow($sql, $username, $password);
    }

    public function getLoginAdmin($table_admin, $username, $password)
    {
        return $this->db->selectUser($sql, $username, $password);
    }
    public function getLoginUser($table_user, $email_user, $password)
    {
        $sql = "SELECT * FROM $table_user WHERE username =? AND password = ?";
        return $this->db->selectUser($sql, $email_user, $password);
    }
}
