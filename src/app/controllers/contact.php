<?php

class contact extends DController
{
    public function __construct()
    {
        parent::__construct();
    }

    // Hiển thị trang liên hệ
    public function index()
    {
        $this->load->view('cpanel/header');
        $this->load->view('contact'); 
        $this->load->view('cpanel/footer');
    }

    // Xử lý khi gửi form liên hệ
    public function sendcontact()
    {
        // Khởi tạo mảng để lưu dữ liệu
        $name = isset($_POST['name']) ? trim($_POST['name']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $feedback = isset($_POST['feedback']) ? trim($_POST['feedback']) : '';
        
        // Tạo mảng dữ liệu với đầy đủ các trường
        $data = array(
            'name' => $name,
            'email' => $email,
            'feedback' => $feedback,
            'created_at' => date('Y-m-d H:i:s') // Lấy thời gian hiện tại
        );
        
        $contactmodel = $this->load->model('contactmodel');
        $table = "feedback";
        $result = $contactmodel->insertItem($table, $data);
        if ($result != 0) {
            $message['msg'] = 'Gửi thành công';
            header('Location:' . BASE_URL . '/contact?msg=' . urlencode(serialize($message)));
            exit();
        } else {
            $message['msg'] = 'Gửi thất bại.';
            header('Location:' . BASE_URL . '/contact?msg=' . urlencode(serialize($message)));
            exit();
        }
    }


}