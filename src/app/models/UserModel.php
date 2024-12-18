<?php
class UserModel extends DModel
{
    public function __construct()
    {
        parent::__construct();
    }

    // Phương thức lấy dữ liệu người dùng theo username
    public function getUserByUsername($username)
    {
        // Sử dụng PDO để thực hiện truy vấn
        $sql = "SELECT * FROM user WHERE username = :username LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        // Trả về dữ liệu người dùng dưới dạng mảng
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Phương thức cập nhật thông tin người dùng theo username
    public function updateUserByUsername($username, $data)
    {
        // Câu lệnh SQL để cập nhật thông tin người dùng
        $sql = "UPDATE user SET 
                email = :email, 
                phone = :phone, 
                gender = :gender, 
                address = :address, 
                birthdate = :birthdate
                WHERE username = :username";

        // Thực thi câu lệnh SQL
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':gender', $data['gender']);
        $stmt->bindParam(':address', $data['address']);
        $stmt->bindParam(':birthdate', $data['birthdate']);
        $stmt->bindParam(':username', $username);

        // Trả về kết quả true nếu cập nhật thành công, false nếu thất bại
        return $stmt->execute();
    }
}
?>
