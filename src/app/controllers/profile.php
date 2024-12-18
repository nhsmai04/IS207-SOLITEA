<?php

class Profile extends DController
{
    public function __construct()
    {
        parent::__construct();
        Session::checkLogin();  // Kiểm tra đăng nhập
    }

    // Hiển thị thông tin người dùng
    public function index()
    {
        // Lấy username từ session
        $username = Session::get('username');

        // Kiểm tra nếu có username trong session
        if ($username) {
            // Kết nối cơ sở dữ liệu và lấy dữ liệu người dùng
            $userModel = $this->load->model('UserModel');
            $userData = $userModel->getUserByUsername($username);

            // Kiểm tra nếu tìm thấy người dùng
            if ($userData) {
                // Truyền dữ liệu người dùng vào view
                $this->load->view('profile', ['user' => $userData]);
            } else {
                // Nếu không tìm thấy người dùng
                echo "Không tìm thấy thông tin người dùng.";
            }
        } else {
            // Nếu không có session username, chuyển hướng về trang đăng nhập
            header('Location: ' . BASE_URL . '/login');
            exit();
        }
    }

    // Cập nhật thông tin người dùng
    public function update()
    {
        // Lấy username từ session
        $username = Session::get('username');
    
        // Kiểm tra nếu có username trong session
        if ($username) {
            // Kiểm tra nếu form được gửi
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Lấy dữ liệu từ form
                $data = [
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'gender' => $_POST['gender'],
                    'address' => $_POST['address'],
                    'birthdate' => $_POST['birthdate'],
                ];
    
                // Kết nối cơ sở dữ liệu và cập nhật dữ liệu người dùng
                $userModel = $this->load->model('UserModel');
                $result = $userModel->updateUserByUsername($username, $data);
    
                // Kiểm tra kết quả cập nhật
                if ($result) {
                    // Nếu thành công, chuyển hướng lại về trang profile
                    header('Location: ' . BASE_URL . '/profile');
                    exit();
                } else {
                    // Nếu thất bại, hiển thị thông báo lỗi
                    echo "Cập nhật thông tin thất bại.";
                }
            }
        } else {
            // Nếu không có session username, chuyển hướng về trang đăng nhập
            header('Location: ' . BASE_URL . '/login');
            exit();
        }
    }
    
}
