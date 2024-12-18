<?php
class adminorders extends DController {
    public function __construct() {
        parent::__construct();
        // Tải model đơn hàng
        $this->ordersmodel = $this->load->model('ordersmodel');
    }

    public function index() {
        $this->getAllOrders();
    }

    public function getAllOrders() {
        $table = "orders";
        $data['orders'] = $this->ordersmodel->getAllOrders($table);
        // Tải các view hiển thị danh sách đơn hàng
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/orders_list', $data); // View chứa danh sách orders
        $this->load->view('cpanel/footer');
    }

    public function updateStatus($order_id, $new_status) {
        // Kiểm tra trạng thái hợp lệ
        if ($new_status === 'complete') {
            $status = 'Hoàn thành';
        } elseif ($new_status === 'canceled') {
            $status = 'Đã hủy';
        } else {
            echo "Trạng thái không hợp lệ!";
            exit;
        }

        // Gọi phương thức trong model để cập nhật trạng thái
        $this->ordersmodel->updateOrderStatus($order_id, $status);

        // Chuyển hướng về danh sách đơn hàng với thông báo thành công
        header('Location: ' . BASE_URL . '/adminorders/index?msg=' . urlencode('Cập nhật trạng thái thành công.'));
    }
}


