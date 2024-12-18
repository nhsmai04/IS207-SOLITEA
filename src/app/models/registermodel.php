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
        // Kiểm tra nếu username đã tồn tại
        $sqlUsername = "SELECT * FROM user WHERE username = ?";
        $stmt = $this->db->prepare($sqlUsername);
        $stmt->bindValue(1, $username);
        $stmt->execute();

        // Kiểm tra nếu email đã tồn tại
        $sqlEmail = "SELECT * FROM user WHERE email = ?";
        $stmtEmail = $this->db->prepare($sqlEmail);
        $stmtEmail->bindValue(1, $email);
        $stmtEmail->execute();

        // Nếu tồn tại username hoặc email thì trả về true
        if ($stmt->rowCount() > 0) {
            return 'username'; // Trả về 'username' nếu đã có username
        } elseif ($stmtEmail->rowCount() > 0) {
            return 'email'; // Trả về 'email' nếu đã có email
        }

        return false; // Không có gì trùng
    }

    // Thêm người dùng mới vào cơ sở dữ liệu
    public function insertUser($data)
    {
        // Chuẩn bị câu lệnh SQL để chèn người dùng vào cơ sở dữ liệu
        $sql = "INSERT INTO user (username, phone, first_name, last_name, email, password, address, birthdate, gender) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);

        // Liên kết các giá trị vào câu lệnh SQL
        $stmt->bindValue(1, $data['username']);
        $stmt->bindValue(2, $data['phone']);
        $stmt->bindValue(3, $data['first_name']);
        $stmt->bindValue(4, $data['last_name']);
        $stmt->bindValue(5, $data['email']);
        $stmt->bindValue(6, $data['password']); // Mật khẩu đã mã hóa từ controller
        $stmt->bindValue(7, $data['address']);
        $stmt->bindValue(8, $data['birthdate']);
        $stmt->bindValue(9, $data['gender']);

        // Thực thi câu lệnh SQL và trả về kết quả (true nếu chèn thành công, false nếu thất bại)
        return $stmt->execute();
    }
}
?>
