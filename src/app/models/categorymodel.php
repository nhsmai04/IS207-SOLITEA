<?php
class categorymodel extends DModel
{
    public function __construct()
    {
        parent::__construct();
    }


    public function selectallItem($table)
    {
        $sql = "SELECT * FROM $table";
        return $this->db->getItem($sql);
    }
    public function selectbyCon($table, $Con)
    {
        $sql = "SELECT * FROM $table ";
        return $this->db->getItem($sql);
    }
    public function insertItem($table, $data)
    {
        echo "model da duoc chay";
        return $this->db->insertItem($table, $data);
    }

    public function updateItem($table, $data, $where)
    {
        echo "model da duoc chay";
        return $this->db->updateItem($table, $data, $where);
    }
}
