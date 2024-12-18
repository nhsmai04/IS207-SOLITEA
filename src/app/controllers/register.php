<?php
class register extends DController
{
    public function __construct()
    {
        parent::__construct();
    }

    // Hiển thị trang đăng ký và thông báo lỗi nếu có
    public function index()
    {
        $msg = isset($_GET['msg']) ? unserialize(urldecode($_GET['msg'])) : null;
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/register', ['msg' => $msg]);
        $this->load->view('cpanel/footer');
    }

    // Xử lý đăng ký người dùng
    public function registerUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $phone = trim($_POST['phone']);
            $first_name = trim($_POST['first_name']);
            $last_name = trim($_POST['last_name']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $confirm_password = trim($_POST['confirm_password']);
            $address = trim($_POST['address']);
            $birthdate = trim($_POST['birthdate']);  // Ngày sinh
            $gender = trim($_POST['gender']);        // Giới tính
    
            if (empty($username) || empty($phone) || empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password) || empty($address) || empty($birthdate) || empty($gender)) {
                $message['msg'] = 'Vui lòng điền đầy đủ thông tin.';
                header('Location:' . BASE_URL . '/register?msg=' . urlencode(serialize($message)));
                exit();
            }
    
            if ($password !== $confirm_password) {
                $message['msg'] = 'Mật khẩu không khớp.';
                header('Location:' . BASE_URL . '/register?msg=' . urlencode(serialize($message)));
                exit();
            }
    
            $registerModel = $this->load->model('registermodel');
    
            // Kiểm tra xem người dùng đã tồn tại chưa
            $result = $registerModel->checkUserExists($username, $email);
    
            // Kiểm tra kết quả trả về
            if ($result === 'username') {
                $message['msg'] = 'Tài khoản đã tồn tại.';
                header('Location:' . BASE_URL . '/register?msg=' . urlencode(serialize($message)));
                exit();
            } elseif ($result === 'email') {
                $message['msg'] = 'Email đã tồn tại.';
                header('Location:' . BASE_URL . '/register?msg=' . urlencode(serialize($message)));
                exit();
            }
    
            // Thêm dữ liệu người dùng vào cơ sở dữ liệu
            $data = [
                'username' => $username,
                'phone' => $phone,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT), // Mã hóa mật khẩu
                'address' => $address,
                'birthdate' => $birthdate,
                'gender' => $gender
            ];
    
            $insertResult = $registerModel->insertUser($data);
            if ($insertResult) {
                $message['msg'] = 'Đăng ký thành công!';
                header('Location:' . BASE_URL . '/login?msg=' . urlencode(serialize($message)));
                exit();
            } else {
                $message['msg'] = 'Có lỗi xảy ra. Vui lòng thử lại.';
                header('Location:' . BASE_URL . '/register?msg=' . urlencode(serialize($message)));
                exit();
            }
        }
    }

}
?>
