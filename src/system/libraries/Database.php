<?php
#Viet cac ham truy van o class nay
class Database extends PDO
{
    public function __construct($connect, $user, $password)
    {
        parent::__construct($connect, $user, $password);
    }


    public function getItem($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC)
    {
        try {


            $statement = $this->prepare($sql);
            foreach ($data as $key => $value) {
                $statement->bindParam($key, $value);
            }
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    }
    public function insertItem($table, $data)
    {
        try {
            $key = implode(',', array_keys($data));
            $value = ":" . implode(', :', array_keys($data));
            $sql = "INSERT INTO $table ($key) VALUES ($value)";
            $statement = $this->prepare($sql);

            foreach ($data as $key => $val) {
                $statement->bindValue(":$key", $val);
            }

            return $statement->execute();
        } catch (PDOException $e) {
            // Log the error or handle it as needed
            error_log("Insert Error: " . $e->getMessage());
            return false;
        }
    }

    public function affectedRow($sql, $username, $password)
    {
        $statement = $this->prepare($sql);
        $statement->execute(array($username, $password));
        echo $statement->rowCount();
    }
}
