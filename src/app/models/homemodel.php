<?php
class homemodel extends DModel
{
    protected $db;
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
}
