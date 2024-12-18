<?php
class Session
{
    public static function init()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($key, $val)
    {
        $_SESSION[$key] = $val;
    }

    public static function get($key)
    {
        // Trả về giá trị mặc định thay vì false nếu không tìm thấy khóa
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public static function checkSession()
    {
        self::init();
        // Sử dụng phương thức get thay vì truy cập $_SESSION trực tiếp
        if (self::get('login') !== true) {
            header('Location:' . BASE_URL . '/login');
            exit();
        }
        if (self::get('admin') === false) {
            header('Location:' . BASE_URL . '/index');
            exit();
        }
    }

    public static function destroy()
    {
        // Gọi session_unset() để xóa tất cả các session trước khi hủy
        //session_unset();
        session_destroy();
    }

    public static function unset($key)
    {
        // Xóa một khóa session duy nhất
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    // Thêm phương thức để xóa cookie
    public static function deleteCookie($name)
    {
        if (isset($_COOKIE[$name])) {
            // Đặt cookie đã hết hạn để xóa nó
            setcookie($name, '', time() - 3600, '/'); // Thời gian hết hạn là 1 giờ trước
            unset($_COOKIE[$name]); // Xóa cookie khỏi $_COOKIE
        }
    }

    // Xóa tất cả cookies
    public static function deleteAllCookies()
    {
        // Duyệt qua tất cả các cookies và xóa chúng
        foreach ($_COOKIE as $cookieName => $cookieValue) {
            self::deleteCookie($cookieName);
        }
    }
    public function dashboard()
    {
        session_start();
        session_destroy();
        session_unset('login');
    }

    public static function checkLogin()
    {
        self::init();  // Khởi tạo session nếu chưa được khởi tạo
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (self::get('login') !== true) {
            // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
            header('Location: ' . BASE_URL . '/login');
            exit();
        }
    }
}
