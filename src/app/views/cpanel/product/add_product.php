<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $value) {
        echo $value;
    }
}
?>
<h3>Thêm danh mục sản phẩm</h3>
<form action="<?php echo BASE_URL ?>\product\insert_product" method="POST">
    <div class="mb-3">
        <label class="form-label">Tên sản phẩm</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Loại sản phẩm</label>
        <input type="text" name="category" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Miêu tả sản phẩm </label>
        <input type="text" name="description" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Gía sản phẩm</label>
        <input type="int" name="price" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Hình sản phẩm</label>
        <input type="text" name="image" class="form-control">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>