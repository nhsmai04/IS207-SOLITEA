<?php
class homemodel extends DModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUser($table)
    {
        return $this->db->select($table);
    }
}
