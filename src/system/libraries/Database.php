<?php
#Viet cac ham truy van o class nay
class Database extends PDO
{
    public function __construct($connect, $user, $password)
    {
        parent::__construct($connect, $user, $password);
    }
    public function select()
    {
        $sql = "SELECT * FROM pdo_is207";
        $statement = $this->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
}
