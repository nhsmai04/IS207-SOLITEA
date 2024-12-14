<?php
# Chuyển trang viết ở class này

class login extends DController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Kiểm tra nếu người dùng đã đăng nhập, nếu có thì chuyển hướng tới dashboard
        $this->login();
    }

    public function login()
    {
        $msg = isset($_GET['msg']) ? unserialize(urldecode($_GET['msg'])) : null;
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/login', ['msg' => $msg]);
        $this->load->view('cpanel/footer');
    }

    public function dashboard()
    {
        // Kiểm tra nếu người dùng chưa đăng nhập, chuyển hướng về trang login

        Session::checkSession();
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/dashboard');
        $this->load->view('cpanel/footer');
    }

    public function authentication_login()
    {
        // Kiểm tra nếu người dùng đã đăng nhập rồi thì chuyển hướng tới dashboard
        if (Session::get('login')) {
            header('Location:' . BASE_URL . '/login/dashboard');
            exit();
        }

        // Kiểm tra nếu form đăng nhập được gửi đi
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            // Kiểm tra nếu tên đăng nhập và mật khẩu không được nhập đầy đủ
            if (empty($username) || empty($password)) {
                $message['msg'] = 'Vui lòng nhập tên đăng nhập và mật khẩu.';
                header('Location:' . BASE_URL . '/login?msg=' . urlencode(serialize($message)));
                exit();
            }

            // Kết nối với model để kiểm tra tên đăng nhập và mật khẩu

            $table_admin = 'admin';
            $table_user = 'user';
            $loginmodel = $this->load->model('loginmodel');

            // Kiểm tra tài khoản và mật khẩu qua model
            $count_admin = $loginmodel->login($table_admin, $username, $password);
            $count_user = $loginmodel->login($table_user, $username, $password);

            if ($count_admin === 0 && $count_user === 0) {
                $message['msg'] = 'Tài khoản hoặc mật khẩu không đúng';
                header('Location:' . BASE_URL . '/login?msg=' . urlencode(serialize($message)));
                exit();
            } else {
                if ($count_admin > 0) {
                    $result_admin = $loginmodel->getLoginAdmin($table_admin, $username, $password);
                    if (!empty($result_admin) && isset($result_admin[0])) {
                        // Đăng nhập thành công, khởi tạo session cho admin
                        Session::init();
                        Session::set('login', true);
                        Session::set('admin', true);
                        Session::set('username', $result_admin[0]['username']);
                        Session::set('userid', $result_admin[0]['id_admin']);
                        // Sau khi đăng nhập thành công, chuyển hướng về trang dashboard
                        header('Location:' . BASE_URL . '/login/dashboard');
                        exit();
                    }
                }

                if ($count_user > 0) {
                    $result_user = $loginmodel->getLoginUser($table_user, $username, $password);
                    if (!empty($result_user) && isset($result_user[0])) {
                        // Đăng nhập thành công, khởi tạo session cho user
                        Session::init();
                        Session::set('login', true);
                        Session::set('admin', false);
                        Session::set('username', $result_user[0]['username']);
                        Session::set('userid', $result_user[0]['id_user']);
                        // Sau khi đăng nhập thành công, chuyển hướng về trang chủ
                        header('Location:' . BASE_URL . '/');
                        exit();
                    }
                }

                // Nếu không tìm thấy tài khoản hợp lệ
                $message['msg'] = 'Lỗi không xác định. Vui lòng thử lại.';
                header('Location:' . BASE_URL . '/login?msg=' . urlencode(serialize($message)));
                exit();
            }
        }
    }

    public function logout()
    {
        // Xóa session khi người dùng đăng xuất
        Session::init();
        Session::destroy();
        header('Location:' . BASE_URL . '/login');
    }
}
