<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $value) {
        echo $value;
    }
}
?>
<h3 style="text-align:center; margin-top:20px">Chỉnh sửa sản phẩm</h3>
<?php if (is_array($productbyid) && !empty($productbyid)): ?>
    <form action="<?php echo BASE_URL ?>\product\edit_category\<?php echo $productbyid['Id'] ?>" method="POST" style="margin: 20px 40px;">
        <div class="mb-3">
            <label class="form-label">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" value="<?php echo htmlspecialchars($productbyid['Name']) ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Loại sản phẩm</label>
            <input type="text" name="category" class="form-control" value="<?php echo htmlspecialchars($productbyid['Category']) ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Miêu tả sản phẩm</label>
            <input type="text" name="description" class="form-control" value="<?php echo htmlspecialchars($productbyid['Description']) ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Giá sản phẩm</label>
            <input type="int" name="price" class="form-control" value="<?php echo htmlspecialchars($productbyid['Price']) ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Hình sản phẩm</label>
            <input type="text" name="image" class="form-control" value="<?php echo htmlspecialchars($productbyid['Image']) ?>">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
<?php else: ?>
    <p>Không tìm thấy sản phẩm.</p>
<?php endif; ?>