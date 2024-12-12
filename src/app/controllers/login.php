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
        Session::init();
        if(Session::get('login') == true){
            header("Location:". BASE_URL ."/login/dashboard");
        }
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
            $sql_admin = "SELECT * FROM $table_admin WHERE username = ? AND password = ?";
            $sql_user = "SELECT * FROM $table_user WHERE email = ? AND password = ?";
            $loginmodel = $this->load->model('loginmodel');

            // Kiểm tra tài khoản và mật khẩu qua model
            $count_admin = $loginmodel->login($table_admin, $sql_admin, $username, $password);
            $count_user = $loginmodel->login($table_user, $sql_user, $username, $password);

            if ($count_admin === 0 && $count_user === 0) {
                $message['msg'] = 'Tài khoản hoặc mật khẩu không đúng';
                header('Location:' . BASE_URL . '/login?msg=' . urlencode(serialize($message)));
                exit();
            } else {
                $result_admin = $loginmodel->getLoginAdmin($table_admin, $sql_admin, $username, $password);
                $result_user = $loginmodel->getLoginUser($table_user, $sql_user, $username, $password);
                if (!empty($result_admin) && isset($result_admin[0])) {
                    // Đăng nhập thành công, khởi tạo session
                    Session::init();
                    Session::set('login', true);
                    Session::set('username', $result_admin[0]['username']);
                    Session::set('userid', $result_admin[0]['id_admin']);
                    // Sau khi đăng nhập thành công, chuyển hướng về trang dashboard
                    header('Location:' . BASE_URL . '/login/dashboard');
                    exit();
                } else if (!empty($result_user) && isset($result_user[0])){
                    Session::init();
                    Session::set('login', true);
                    Session::set('username', $result_admin[0]['username']);
                    Session::set('userid', $result_admin[0]['id_admin']);
                    header('Location:' . BASE_URL . '');
                    exit();
                }
                else {
                    $message['msg'] = 'Lỗi không xác định. Vui lòng thử lại.';
                    header('Location:' . BASE_URL . '/login?msg=' . urlencode(serialize($message)));
                    exit();
                }
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
