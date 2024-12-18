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

    public function checkAdminExists($username)
    {
        $sqlUsername = "SELECT * FROM admin WHERE username = ?";
        $stmt = $this->db->prepare($sqlUsername);
        $stmt->bindValue(1, $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return 'username'; // Trả về 'username' nếu tài khoản đã tồn tại
        }
        return false; // Không có gì trùng
    }


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

    public function insertAdmin($data)
    {
        // Kiểm tra xem tài khoản đã tồn tại chưa
        $checkExists = $this->checkAdminExists($data['username']);
        if ($checkExists === 'username') {
            return false; // Tài khoản đã tồn tại
        }

        // Chèn tài khoản mới vào bảng admin
        $sql = "INSERT INTO admin (username, password) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(1, $data['username']);
        $stmt->bindValue(2, $data['password']);

        return $stmt->execute();
    }
}
?>
