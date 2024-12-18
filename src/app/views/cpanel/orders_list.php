<h3 style="text-align:center; margin-top:20px">Danh sách đơn hàng</h3>
<table class="table table-striped" style="margin: 20px 0">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">ID Đơn hàng</th>
            <th scope="col">ID Khách hàng</th>
            <th scope="col">Username Khách hàng</th>
            <th scope="col">Ngày đặt</th>
            <th scope="col">Tổng tiền</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($orders as $key => $value):
            $i++;
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo htmlspecialchars($value['id']); ?></td>
                <td><?php echo htmlspecialchars($value['id_user']); ?></td>
                <td><?php echo htmlspecialchars($value['username']); ?></td>
                <td>
                    <?php
                        $date = new DateTime($value['order_date']);
                        echo $date->format('d/m/Y H:i:s');
                    ?>
                </td>
                <td>
                    <?php 
                    if (isset($value['total_price']) && $value['total_price'] !== null) {
                        echo number_format($value['total_price'], 0, ',', '.') . ' VNĐ';
                    } else {
                        echo 'Chưa có giá trị';
                    }
                    ?>
                </td>
                <td><?php echo htmlspecialchars($value['status']); ?></td>
                <td>
                    <a href="<?php echo BASE_URL . '/adminorders/updateStatus/' . $value['id'] . '/complete'; ?>" class="btn btn-success">Hoàn thành</a>
                    <a href="<?php echo BASE_URL . '/adminorders/updateStatus/' . $value['id'] . '/canceled'; ?>" class="btn btn-danger">Hủy</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
