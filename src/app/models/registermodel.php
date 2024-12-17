<?php
class registermodel extends DModel
{
    public function __construct()
    {
        parent::__construct();
    }

    // Kiểm tra xem tài khoản hoặc email đã tồn tại chưa
    public function checkUserExists($username, $email)
    {
        $sql = "SELECT * FROM user WHERE username = ? OR email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(1, $username);
        $stmt->bindValue(2, $email);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    // Thêm người dùng mới vào cơ sở dữ liệu
    public function insertUser($data)
    {
        $sql = "INSERT INTO user (username, phone, first_name, last_name, email, password, address, birthdate, gender) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(1, $data['username']);
        $stmt->bindValue(2, $data['phone']);
        $stmt->bindValue(3, $data['first_name']);
        $stmt->bindValue(4, $data['last_name']);
        $stmt->bindValue(5, $data['email']);
        $stmt->bindValue(6, $data['password']);
        $stmt->bindValue(7, $data['address']);
        $stmt->bindValue(8, $data['birthdate']);
        $stmt->bindValue(9, $data['gender']);
        return $stmt->execute();
    }

}
?>
