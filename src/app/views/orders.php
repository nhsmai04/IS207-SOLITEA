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
    <!-- Spinner End -->
    <div class="container" style="margin-top: 100px;">
        <h2>Danh sách hóa đơn của bạn</h2>
        <?php if (!empty($orders)): ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày tạo</th>
                    <th>Tổng giá trị</th>
                    <th>Trạng thái</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= htmlspecialchars($order['id']) ?></td>
                    <td><?= htmlspecialchars($order['order_date']) ?></td>
                    <td><?php echo number_format($order['total_price'], 0, ',', '.') . 'đ'  ?></td>
                    <td><?= htmlspecialchars($order['status']) ?></td>
                    <td><a href="<?= BASE_URL ?>/orders/invoice/<?= $order['id'] ?>" class="btn btn-primary text-white">Xem chi
                            tiết</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>Bạn chưa có hóa đơn nào.</p>
        <?php endif; ?>
    </div>
    <?php include 'common/footer.php'; ?>
</body>

</html>