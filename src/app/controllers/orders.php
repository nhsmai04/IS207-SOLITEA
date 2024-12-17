<?php
class orders extends DController
{
    public function __construct()
    {
        parent::__construct();
        // Tải model xử lý đơn hàng
    }
    
    public function index()
    { 
        session::init();
       
        if (isset($_SESSION['userid'])) {
            $user_id = $_SESSION['userid'];
            $ordersmodel = $this->load->model('ordersmodel');
            $data['orders'] = $ordersmodel->getOrdersByUserId('orders', $user_id);
            $this->load->view('orders', $data);
        } else {
            // Nếu người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
            header("Location: " . BASE_URL . "/login");
            exit;
        }
    }

    public function order()
    {
        session::init();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_SESSION['shoppingcart']) && !empty($_SESSION['shoppingcart'])) {
                $ordersmodel = $this->load->model('ordersmodel');
                $user_id = $_SESSION['userid'];
                $total_price = 0;

                // Tính tổng giá trị đơn hàng
                foreach ($_SESSION['shoppingcart'] as $item) {
                    $total_price += $item['Price'] * $item['Quantity'];
                }

                // Dữ liệu đơn hàng
                $order_data = array(
                    'id_user' => $user_id,
                    'order_date' => date('Y-m-d H:i:s'),
                    'total_price' => $total_price,
                    'status' => 'Pending'
                );

                // Lưu đơn hàng vào cơ sở dữ liệu
                $order_id = $ordersmodel->addToOrders('orders', $order_data);

                // Lưu chi tiết đơn hàng vào cơ sở dữ liệu
                foreach ($_SESSION['shoppingcart'] as $item) {
                    $order_detail = array(
                        'order_id' => $order_id,
                        'product_id' => $item['Id'],
                        'product_name' => $item['Name'],
                        'quantity' => $item['Quantity'],
                        'unit_price' => $item['Price'],
                        'total_price' => $item['Quantity'] * $item['Price']
                    );

                    $ordersmodel->addToOrderDetails('order_details', $order_detail);
                }

                // Xóa giỏ hàng sau khi thanh toán
                unset($_SESSION['shoppingcart']);

                // Chuyển hướng đến trang thông báo đơn hàng thành công
                header("Location: " . BASE_URL . "/orders/invoice/" . $order_id);
                exit;
            } else {
                // Nếu giỏ hàng trống, chuyển hướng đến trang giỏ hàng
                header("Location: " . BASE_URL . "/cart");
                exit;
            }
        }
    }

    public function invoice($order_id)
    {
        $ordersmodel = $this->load->model('ordersmodel');
        $data['order'] = $ordersmodel->getOrderById('orders', $order_id);
        $data['order_details'] = $ordersmodel->getOrderDetailsByOrderId('order_details', $order_id);
        $this->load->view('invoice', $data);
    }
}
?>