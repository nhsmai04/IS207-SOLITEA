<?php
class ordersmodel extends DModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addToOrders($table, $data)
    {
        $this->db->insertItem($table, $data);
        return $this->db->getLastInsertId();
    }

    public function addToOrderDetails($table, $data)
    {
        return $this->db->insertItem($table, $data);
    }

    public function getOrderById($table, $order_id)
    {
        return $this->db->getItemById($table, $order_id);
    }

    public function getOrderDetailsByOrderId($table, $order_id)
    {
        $sql = "SELECT * FROM $table WHERE order_id = :order_id";
        return $this->db->getItem($sql, ['order_id' => $order_id]);
    }

    public function getOrdersByUserId($table, $user_id)
    {
        $sql = "SELECT * FROM $table WHERE id_user = :id_user";
        return $this->db->getItem($sql, ['id_user' => $user_id]);
    }
}
?>