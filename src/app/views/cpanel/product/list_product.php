<h3>Liệt kê danh mục sản phẩm</h3>
<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $value) {
        echo $value;
    }
}
?>
<table class="table table-stripped">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên trái cây</th>
            <th scope="col">Loại trái cây</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Gía tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        foreach ($product as $key => $value):
            $i++
        ?>
            <tr>
                <td><?php echo  $i  ?></td>
                <td><?php echo $value['Name'] ?></td>
                <td><?php echo $value['Category'] ?></td>
                <td><?php echo $value['Description'] ?></td>
                <td><?php echo $value['Price'] ?></td>
                <td><a href="<?php echo BASE_URL ?>/product/delete_category/<?php echo $value['Id'] ?>">Xoá |</a> <a href="<?php echo BASE_URL ?>/product/update_category/<?php echo $value['Id'] ?>">|Cập nhật </a></td>
            </tr>
        <?php endforeach ?>

    </tbody>
</table>