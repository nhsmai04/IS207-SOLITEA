<?php
class contactmodel extends DModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertItem($table, $data)
    {
        return $this->db->insertItem($table, $data);
    }

    public function getAllfeedback($table)
    {
        $sql = "SELECT * FROM $table ORDER BY id DESC";
        return $this->db->getItem($sql);
    }

    public function deleteContact($table, $where)
    {
        return $this->db->deleteItem($table, $where);
    }
}