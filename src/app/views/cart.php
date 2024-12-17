<?php include 'common/head.php'?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('click', '.delete-item-btn', function() {
    const deleteId = $(this).data('id');

    // Gửi yêu cầu AJAX
    $.ajax({
        url: '<?= BASE_URL ?>/cart/deletecart',
        type: 'POST',
        data: {
            delete_id: deleteId
        },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                // Xóa item khỏi giao diện
                $(`.delete-item-btn[data-id="${deleteId}"]`).closest('tr')
                    .remove(); // hoặc xóa item từ DOM
                updateCartTotal()
                $('#cart-count').text(response.total_items);
            } else {
                alert(response.message);
            }
        },
        error: function() {
            alert('Có lỗi xảy ra khi xử lý yêu cầu.');
        }
    });
});


// Hàm tăng giảm số lượng sản phẩm

// Xử lý sự kiện tăng số lượng
$(document).on('click', '.add-quantity-btn', function() {
    var button = $(this);
    var input = button.closest('.input-group').find('input');
    console.log(input.val());
    var currentQuantity = parseInt(input.val()) || 1; // Đảm bảo là số
    console.log(currentQuantity);
    var newQuantity = currentQuantity + 1;

    // Gửi yêu cầu AJAX để cập nhật số lượng
    $.ajax({
        url: '<?= BASE_URL ?>/cart/updatecart',
        type: 'POST',
        data: {
            id: button.data('id'),
            quantity: newQuantity
        },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                input.val(newQuantity); // Cập nhật giá trị input

                var price = button.closest('tr').find('td:nth-child(3)').text().replace(/[^0-9]/g,
                    ''); // Lấy giá trị cột giá từng sản phẩm (bỏ 'đ' và dấu ',')
                var subtotal = newQuantity * parseFloat(price); // Tính tổng giá trị từng sản phẩm
                button.closest('tr').find('td:nth-child(5)').html('<p class="mb-0 mt-4">' + new Intl
                    .NumberFormat('vi-VN').format(subtotal) + 'đ');
                updateCartTotal(); // Cập nhật tổng giỏ hàng
            } else {
                alert(response.message);
            }
        },
        error: function() {
            alert('Có lỗi xảy ra khi xử lý yêu cầu.');
        }
    });
});

// Xử lý sự kiện giảm số lượng
$(document).on('click', '.sub-quantity-btn', function() {
    var button = $(this);
    var input = button.closest('.input-group').find('input');
    var currentQuantity = parseInt(input.val()) || 1; // Đảm bảo là số
    var newQuantity = (currentQuantity > 1) ? currentQuantity - 1 : 1; // Không giảm dưới 1

    // Gửi yêu cầu AJAX để cập nhật số lượng
    $.ajax({
        url: '<?= BASE_URL ?>/cart/updatecart',
        type: 'POST',
        data: {
            id: button.data('id'),
            quantity: newQuantity,
        },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                input.val(newQuantity); // Cập nhật giá trị input

                // Cập nhật tổng giá trị từng sản phẩm
                var price = button.closest('tr').find('td:nth-child(3)').text().replace(/[^0-9]/g,
                    ''); // Lấy giá trị cột giá từng sản phẩm (bỏ 'đ' và dấu ',')
                var subtotal = newQuantity * parseFloat(price); // Tính tổng giá trị từng sản phẩm

                button.closest('tr').find('td:nth-child(5)').html('<p class="mb-0 mt-4">' + new Intl
                    .NumberFormat('vi-VN').format(subtotal) + 'đ'
                ); // Cập nhật giá trị cột tổng giá trị từng sản phẩm
                updateCartTotal(); // Cập nhật tổng giỏ hàng
            } else {
                alert(response.message);
            }
        },
        error: function() {
            alert('Có lỗi xảy ra khi xử lý yêu cầu.');
        }
    });
});



// Hàm tính lại tổng giá trị giỏ hàng
function updateCartTotal() {
    let total = 0;
    $('tr').each(function() {
        const subtotalText = $(this).find('td:nth-child(5)').text().replace(/[^0-9]/g,
            ''); // Lấy giá trị cột tổng giá trị từng sản phẩm (bỏ 'đ' và dấu ',')
        const subtotal = parseFloat(subtotalText) || 0; // Chuyển đổi sang số
        total += subtotal;
    });
    $('.cart-total').text(new Intl.NumberFormat('vi-VN').format(total) + 'đ');
}
</script>



<!-- Spinner Start -->
<div id="spinner"
    class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Navbar start -->
<?php include 'common/navbar.php'; ?>
<!-- Navbar End -->

<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Giỏ hàng</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="index">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Giỏ hàng</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Cart Page Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Tổng cộng</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $total = 0;
                    if (isset($_SESSION['shoppingcart'])) {
                        foreach ($_SESSION['shoppingcart'] as $key => $value) {
                            $sub_total = $value['Price'] * $value['Quantity'];
                            $total += $sub_total;
                    ?>

                    <tr>
                        <th scope="row">
                            <div class="d-flex align-items-center">
                                <img src="<?= htmlspecialchars($value['Image']) ?>"
                                    class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                            </div>
                        </th>
                        <td>
                            <p class="mb-0 mt-4"><?= htmlspecialchars($value['Name']) ?></p>
                        </td>
                        <td>
                            <p class="mb-0 mt-4" id="product_price"><?= htmlspecialchars($value['Price']) ?></p>
                        </td>
                        <td>
                            <div class="input-group quantity mt-4" style="width: 150px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-minus rounded-circle bg-light border sub-quantity-btn"
                                        data-id="<?= htmlspecialchars($value['Id']) ?>">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" min="1"
                                    class="w-50 form-control form-control-sm text-center border-0"
                                    name="qty[<?php echo $value['Id'] ?>]"
                                    value="<?= htmlspecialchars($value['Quantity']) ?>"
                                    id="qty-<?= htmlspecialchars($value['Id']) ?>" readonly>
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-plus rounded-circle bg-light border add-quantity-btn"
                                        data-id="<?= htmlspecialchars($value['Id']) ?>">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                        </td>
                        <td>
                            <p class="mb-0 mt-4"><?php echo number_format($sub_total, 0, ',', '.') . 'đ'  ?></p>
                        </td>
                        <td>
                            <input type="hidden" name="delete_id" value="<?= htmlspecialchars($value['Id']) ?>">
                            <button type="submit" class="btn btn-md rounded-circle bg-light border mt-4 delete-item-btn"
                                data-id="<?= htmlspecialchars($value['Id']) ?>">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                        </td>


                    </tr>
                    <?php
                        }
                    }
                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">
                            <div class="d-flex justify-content-start">
                                <a href="<?php echo BASE_URL ?>/index#buy"
                                    class="btn border-secondary rounded-pill px-4 py-3 text-primary">Tiếp tục mua
                                    sắm</a>
                            </div>
                </tfoot>
            </table>
        </div>
        <div class="mt-5">
            <input type="text" class="border-0 border-bottom rounded me-5 py-3 mb-4" placeholder="Nhập mã giảm">
            <button class="btn border-secondary rounded-pill px-4 py-3 text-primary" type="button">Áp dụng mã giảm
                giá</button>
        </div>
        <div class="row g-4 justify-content-end">
            <div class="col-8"></div>
            <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                <div class="bg-light rounded">
                    <div class="p-4">
                        <h1 class="display-6 mb-4">Hóa đơn</h1>
                        <div class="d-flex justify-content-between mb-4">
                            <h5 class="mb-0 me-4">Tổng</h5>
                            <p class="mb-0 cart-total"><?php echo number_format($total, 0, ',', '.') . 'đ'  ?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0 me-4">Tiền ship</h5>
                            <div class="">
                                <p class="mb-0">0đ</p>
                            </div>
                        </div>
                    </div>
                    <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                        <h5 class="mb-0 ps-4 me-4">Tổng hóa đơn</h5>
                        <p class="mb-0 pe-4 cart-total"><?php echo number_format($total, 0, ',', '.') . 'đ'  ?></p>
                    </div>
                    <form action="<?php echo BASE_URL ?>/orders/order" method="POST">
                        <button
                            class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4"
                            type="submit">Thanh toán</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Page End -->


<!-- Footer Start -->
<?php include 'common/footer.php'; ?>
<!-- Footer End -->

<!-- Copyright End -->