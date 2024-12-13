<?php
class category extends DController
{

    public function __construct()
    {
        parent::__construct();
    }
    public function getCategoriesByType()
    {
        if (!isset($_GET['type']) || empty($_GET['type'])) {
            echo '<option value="">Không có loại nào</option>';
            return;
        }

        $type = $_GET['type'];
        $categorymodel = $this->load->model('categorymodel');
        $table = "product";
        $cond = ['Type' => $type];
        $result = $categorymodel->selectCategory($table, $cond);

        if (!$result) {
            echo '<option value="">Không có danh mục nào</option>';
            return;
        }

        // Tạo HTML option từ dữ liệu trả về
        foreach ($result as $category) {
            echo '<option value="' . htmlspecialchars($category['Category']) . '">' . htmlspecialchars($category['Category']) . '</option>';
        }
    }
}
