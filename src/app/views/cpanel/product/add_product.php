<script>
function handleSelect(element) {
    var type = element.value;
    console.log(type);
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '<?php echo BASE_URL; ?>/category/getCategoriesByType?type=' + type, true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            var category = document.getElementById('category');
            if (xhr.status == 200) {
                // Kiểm tra phản hồi nếu là HTML hợp lệ
                if (xhr.responseText.trim().startsWith('<option')) {
                    category.innerHTML = xhr.responseText;
                } else {
                    // Xử lý nếu dữ liệu trả về không phải là HTML hợp lệ
                    console.error("Phản hồi không hợp lệ:", xhr.responseText);
                    category.innerHTML = '<option value="">Lỗi tải danh mục</option>';
                }
            } else {
                // Lỗi HTTP
                console.error("Lỗi tải dữ liệu. Mã trạng thái: ", xhr.status);
                category.innerHTML = '<option value="">Lỗi tải danh mục</option>';
            }
        }
    };
    xhr.send();
}
</script>
<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $value) {
        echo $value;
    }
}
?>
<h3>Thêm danh mục sản phẩm</h3>
<form action="<?php echo BASE_URL ?>\product\insert_category" method="POST">
    <div class="mb-3">
        <label class="form-label">Tên sản phẩm</label>
        <input type="text" name="name" class="form-control">
    </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Danh mục sản phẩm</label>
        <select name="type" class="form-control" onchange=handleSelect(this)>
            <option value="Qủa" selected>Quả</option>
            <option value="Rau">Rau</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Loại sản phẩm</label>
        <select name="category" class="form-control" id="category">

        </select>
        <div class="mb-3">
            <label class="form-label">Miêu tả sản phẩm </label>
            <textarea name="description" rows="5" style="resize: none;" class="form-control"></textarea>
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