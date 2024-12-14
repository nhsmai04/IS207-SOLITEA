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
        header('Location:' . BASE_URL . '/cart');
    }
}
