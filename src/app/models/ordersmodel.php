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

    public function getAllOrders() {
        // Truy vấn JOIN để lấy dữ liệu từ bảng orders và bảng users
        $sql = "
            SELECT orders.*, user.username AS username
            FROM orders
            LEFT JOIN user ON orders.id_user = user.id_user
            ORDER BY id DESC
        ";

        // Sử dụng PDO để thực thi truy vấn
        $statement = $this->db->prepare($sql);
        $statement->execute();

        // Lấy tất cả kết quả và trả về dưới dạng mảng
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateOrderStatus($order_id, $status) {
        // Cập nhật trạng thái trong bảng orders
        $sql = "UPDATE orders SET status = :status WHERE id = :order_id ";
        
        // Sử dụng PDO để chuẩn bị câu lệnh SQL
        $statement = $this->db->prepare($sql);

        // Gán tham số vào câu lệnh SQL
        $statement->bindParam(':status', $status);
        $statement->bindParam(':order_id', $order_id);

        // Thực thi câu lệnh
        $statement->execute();
    }
}
