<?php
#Viet cac ham truy van o class nay
class Database extends PDO
{
    public function __construct($connect, $user, $password)
    {
        parent::__construct($connect, $user, $password);
    }
    public function select($table)
    {
        $sql = "SELECT * FROM $table";
        $statement = $this->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    // public function select ($sql,$data = array(),$fetchStyle = PDO::FETCH_ASSOC)
    {
        $statement = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $statement->excute();
            return $statement->fetchAll($fetchStyle);
        }
    }
}
