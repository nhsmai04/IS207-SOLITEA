<?php
# Chuyển trang viết ở class này

class shopDetail extends DController
{

    public function __construct()
    {
        parent::__construct();  // Gọi constructor của lớp cha (DController)
    }

    public function index($id)
    {
        // Tải model categorymodel
        $shopDetailModel = $this->load->model('categorymodel');
        
        // Lấy dữ liệu chi tiết sản phẩm theo ID từ bảng 'product'
        $table = "product";
        $data['fruit'] = $shopDetailModel->selectbyId($table, $id);
        
        // Lấy sản phẩm liên quan
        $data['relatedProducts'] = $shopDetailModel->selectRelatedProducts($table, $id);

        // Tải view và truyền dữ liệu sang view
        $this->load->view('shop-detail', $data);
    }
}
?>
