<?php
class homemodel extends DModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUser()
    {
        return $this->db->select();
    }
}
