<?php
class feedbackmodel extends DModel {
    public function __construct() {
        parent::__construct();
    }

    public function selectallItem($table)
    {
        $sql = "SELECT * FROM $table ORDER BY id DESC";
        return $this->db->getItem($sql);
    }
}
