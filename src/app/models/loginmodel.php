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
        return $this->db->affectedRow($table, $sql, $username, $password);
    }
    public function getLoginAdmin($table_admin, $sql, $username, $password)
    {
        return $this->db->selectUser($sql, $username, $password);
    }

    public function getLoginUser($table_user, $sql, $email_user, $password)
    {
        return $this->db->selectUser($sql, $email_user, $password);
    }
}
