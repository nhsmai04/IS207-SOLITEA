<h3 style="text-align:center; margin-top:20px">Liệt kê phản hồi</h3>
<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $value) {
        echo "<p style='color: red; text-align: center;'>$value</p>";
    }
}
?>
<table class="table table-striped" style="margin: 20px 0">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên người dùng</th>
            <th scope="col">Email</th>
            <th scope="col">Phản hồi</th>
            <th scope="col">Tạo vào lúc</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($feedback as $key => $value):
            $i++;
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo htmlspecialchars($value['name']); ?></td>
                <td><?php echo htmlspecialchars($value['email']); ?></td>
                <td><?php echo htmlspecialchars($value['feedback']); ?></td>
                <td>
                    <?php 
                        // Định dạng ngày giờ từ `created_at`
                        $date = new DateTime($value['created_at']);
                        echo $date->format('d/m/Y H:i:s');
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
