<?php
class cart extends DController
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        Session::init();
        $this->load->view('cpanel/header');
        $this->load->view('cart');
        $this->load->view('cpanel/footer');
    }

    public function addtocart()
    {
        Session::init();
        if (isset($_SESSION['shoppingcart'])) {
            $availabel = 0;
            foreach ($_SESSION['shoppingcart'] as $key => $value) {
                if ($_SESSION['shoppingcart'][$key]['Id'] == $_POST['product_id']) {
                    $availabel++;
                    $_SESSION['shoppingcart'][$key]['Quantity'] += $_POST['product_quantity'];
                }
            }
            if ($availabel == 0) {
                $item = array(
                    'Id' => $_POST['product_id'],
                    'Name' => $_POST['product_name'],
                    'Price' => $_POST['product_price'],
                    'Quantity' => $_POST['product_quantity'],
                    'Image' => $_POST['product_image']
                );
                array_push($_SESSION['shoppingcart'], $item);
            }
        } else {
            $item = array(
                'Id' => $_POST['product_id'],
                'Name' => $_POST['product_name'],
                'Price' => $_POST['product_price'],
                'Quantity' => $_POST['product_quantity'],
                'Image' => $_POST['product_image']

            );
            $_SESSION['shoppingcart'][0] = $item;
        }
        echo json_encode(['success' => true, 'message' => 'Sản phẩm đã được thêm vào giỏ hàng']);
        exit;
    }
    public function deletecart()
    {
        Session::init();
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
            $delete_id = $_POST['delete_id'];

            // Kiểm tra xem giỏ hàng có tồn tại
            if (isset($_SESSION['shoppingcart'])) {
                foreach ($_SESSION['shoppingcart'] as $key => $value) {
                    if ($value['Id'] == $delete_id) {
                        unset($_SESSION['shoppingcart'][$key]);
                        break;
                    }
                }
                // Reset lại các key của mảng sau khi xóa
                $_SESSION['shoppingcart'] = array_values($_SESSION['shoppingcart']);
                echo json_encode(['success' => true, 'message' => 'Item deleted successfully']);
                exit;
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid request']);
            exit;
        }
    }
    public function updatecart()
    {
        Session::init();
        foreach ($_SESSION['shoppingcart'] as $key => $value) {
            if ($_SESSION['shoppingcart'][$key]['Id'] == $_POST['id']) {
                $_SESSION['shoppingcart'][$key]['Quantity'] = $_POST['quantity'];
            }
        }
        echo json_encode(['success' => true, 'message' => 'Cart updated successfully']);
    }
}
