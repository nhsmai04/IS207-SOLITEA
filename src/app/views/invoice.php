<!DOCTYPE html>
<html lang="en">
<?php include 'common/head.php'; ?>

<body>
    <?php include 'common/navbar.php'; ?>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Chi tiết hóa đơn</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="<?= BASE_URL ?>/orders">Danh sách hóa đơn</a></li>
            <li class="breadcrumb-item active text-white">Chi tiết hóa đơn</li>
        </ol>
    </div>
    <!-- Single Page Header End -->
    <!-- Spinner End -->
    <div class="container" style="margin-top: 30px;">
        <h2>Chi tiết hóa đơn</h2>
        <?php if (!empty($order) && !empty($order_details)): ?>
        <p>Mã đơn hàng: <?= htmlspecialchars($order['id']) ?></p>
        <p>Ngày tạo: <?= htmlspecialchars($order['order_date']) ?></p>
        <p>Tổng giá trị: <span style="font-weight: 700; color: black; font-size: 20px;">
                <?php echo number_format($order['total_price'], 0, ',', '.') . 'đ'  ?>
            </span></p>
        <h3>Chi tiết sản phẩm</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order_details as $detail): ?>
                <tr>
                    <td><?= htmlspecialchars($detail['product_name']) ?></td>
                    <td><?= htmlspecialchars($detail['quantity']) ?></td>
                    <td><?php echo number_format($detail['unit_price'], 0, ',', '.') . 'đ'  ?></td>
                    <td><?php echo number_format($detail['total_price'], 0, ',', '.') . 'đ'  ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>Không tìm thấy thông tin hóa đơn.</p>
        <?php endif; ?>
    </div>
    <?php include 'common/footer.php'; ?>
</body>

</html>