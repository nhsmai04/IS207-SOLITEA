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
                $statement->bindValue(":$key", $value);
            }
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    }
    public function getItemByCond($table, $where, $fetchStyle = PDO::FETCH_ASSOC)
    {
        try {
            $condition = '';
            foreach ($where as $key => $val) {
                if ($condition != '') {
                    $condition .= ' AND ';
                }
                $condition .= " $key = :$key";
            }
            $sql = "SELECT DISTINCT Category FROM $table  WHERE $condition";
            error_log("SQL Query: $sql"); // Kiem tra loi
            $statement = $this->prepare($sql);
            foreach ($where as $key => $val) {
                $statement->bindValue(":$key", $val);
            }
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        } catch (PDOException $e) {
            error_log("Update Error: " . $e->getMessage());
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
        return $statement->rowCount();
    }
    public function updateItem($table, $data, $where)
    {
        try {
            $key = '';
            $condition = '';
            foreach ($data as $k => $v) {
                $key .= $k . ' = :' . $k . ', ';
            }
            $key = substr($key, 0, -2);
            foreach ($where as $k => $v) {
                if ($condition != '') {
                    $condition .= ' AND ';
                }
                $condition .= $k . ' = :' . $k;
            }
            $sql = "UPDATE $table SET $key WHERE $condition";
            $statement = $this->prepare($sql);
            foreach ($data as $k => $v) {
                $statement->bindValue(":$k", $v);
            }
            foreach ($where as $k => $v) {
                $statement->bindValue(":$k", $v);
            }
            return $statement->execute();
        } catch (PDOException $e) {
            // Log the error or handle it as needed
            error_log("Update Error: " . $e->getMessage());
            return false;
        }
    }
    public function deleteItem($table, $where)
    {
        try {
            $condition = '';
            foreach ($where as $key => $val) {
                if ($condition != '') {
                    $condition .= ' AND ';
                }
                $condition .= $key . '=:' . $key;
            }
            $sql = "DELETE FROM $table  WHERE $condition";
            error_log("SQL Query: $sql"); // Kiem tra loi
            $statement = $this->prepare($sql);
            foreach ($where as $key => $val) {
                $statement->bindValue(":$key", $val);
            }
            return $statement->execute();
        } catch (PDOException $e) {
            error_log("Update Error: " . $e->getMessage());
            return false;
        }
    }
    public function selectUser($sql, $username, $password)
    {
        $statement = $this->prepare($sql);
        $statement->execute(array($username, $password));
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
