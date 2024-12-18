<?php
class adminregister extends DController
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
        $this->load->view('cpanel/createaccount', ['msg' => $msg]);
        $this->load->view('cpanel/footer');
    }

    // Xử lý đăng ký người dùng
    public function registerAdmin()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $confirm_password = trim($_POST['confirm_password']);  // Đảm bảo lấy confirm_password

            // Kiểm tra các trường
            if (empty($username) || empty($password) || empty($confirm_password)) {
                $message['msg'] = 'Vui lòng điền đầy đủ thông tin.';
                header('Location:' . BASE_URL . '/adminregister?msg=' . urlencode(serialize($message)));
                exit();
            }

            // Kiểm tra mật khẩu
            if ($password !== $confirm_password) {
                $message['msg'] = 'Mật khẩu không khớp.';
                header('Location:' . BASE_URL . '/adminregister?msg=' . urlencode(serialize($message)));
                exit();
            }

            // Tải model để kiểm tra đăng ký
            $registerModel = $this->load->model('registermodel');

            // Kiểm tra xem người dùng đã tồn tại chưa
            $result = $registerModel->checkAdminExists($username);

            if ($result === 'username') {
                $message['msg'] = 'Tài khoản đã tồn tại.';
                header('Location:' . BASE_URL . '/adminregister?msg=' . urlencode(serialize($message)));
                exit();
            }

            // Thêm người dùng vào cơ sở dữ liệu mà không mã hóa mật khẩu
            $data = [
                'username' => $username,
                'password' => $password, // Không mã hóa mật khẩu
            ];

            $insertResult = $registerModel->insertAdmin($data);
            if ($insertResult) {
                $message['msg'] = 'Đăng ký thành công!';
                header('Location:' . BASE_URL . '/login/dashboard?msg=' . urlencode(serialize($message)));
                exit();
            } else {
                $message['msg'] = 'Có lỗi xảy ra. Vui lòng thử lại.';
                header('Location:' . BASE_URL . '/adminregister?msg=' . urlencode(serialize($message)));
                exit();
            }
        }
    }
}
?>
