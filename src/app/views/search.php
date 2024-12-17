<!DOCTYPE html>
<html lang="en">
<?php include 'common/head.php'; ?>

<body>
    <?php include 'common/navbar.php'; ?>
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <div id="buy" class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <h2 class="text-primary" style="margin: 100px 0 30px 0;">Kết quả tìm kiếm:
                    "<?= htmlspecialchars($keyword)?>"</h2>
                <?php if (count($fruits) == 0) : ?>
                <h3 class="text-secondary">Không tìm thấy sản phẩm nào</h3>
                <?php endif; ?>
                <div class="tab-content">
                    <div class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <?php foreach ($fruits as $fruit) : ?>
                                    <?php include 'common/fruit.php'; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'common/footer.php'; ?>
    <script>
    $(document).on('click', '.btn-add-cart', function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var price = $(this).data('price');
        var description = $(this).data('description');
        var image = $(this).data('img');
        $.ajax({
            url: '<?= BASE_URL ?>/cart/addtocart',
            type: 'POST',
            data: {
                product_id: id,
                product_name: name,
                product_price: price,
                product_description: description,
                product_image: image,
                product_quantity: 1
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    alert(response.message);
                    $('#cart-count').text(response.total_items);
                } else {
                    alert('Thêm sản phẩm thất bại');
                }
            }
        });
    })
    </script>
</body>

</html>