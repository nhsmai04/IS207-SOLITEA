
<?php
class categorymodel extends DModel
{
    public function __construct()
    {
        parent::__construct();
    }


    public function selectallItem($table)
    {
        $sql = "SELECT * FROM $table ORDER BY id DESC";
        return $this->db->getItem($sql);
    }
    public function selectbyId($table, $id)
    {
        return $this->db->getItemById($table, $id);
    }
    public function selectCategory($table, $Con)
    {
        return $this->db->getCategoryByCond($table, $Con);
    }
    public function insertItem($table, $data)
    {

        return $this->db->insertItem($table, $data);
    }

    public function updateItem($table, $data, $where)
    {
        return $this->db->updateItem($table, $data, $where);
    }
    public function deleteItem($table, $cond)
    {

        return $this->db->deleteItem($table, $cond);
    }
    public function selectallItemByQuery($table, $keyword){
        
        return $this->db->getallItemByQuery($table, $keyword);
    }
    public function selectRelatedProducts($table, $id)
    {
        return $this->db->getItemRelated($table, $id);
    }

}
