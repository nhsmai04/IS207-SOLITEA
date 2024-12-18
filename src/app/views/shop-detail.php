<!DOCTYPE html>
<html lang="en">

<?php include 'common/head.php'; ?>

<body>

    <!-- Xu ly ajax cho add to cart -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
    <!-- Ket thuc xu ly ajax cho add to cart -->

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
        <h1 class="text-center text-white display-6">Chi tiết sản phẩm</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index">Trang chủ</a></li>
            <li class="breadcrumb-item active text-white">Chi tiết sản phẩm</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Single Product Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container py-5">
            <div class="row g-4 mb-5">
                <div class="col-lg-8 col-xl-9 w-100">
                    <div class="row g-4">
                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <img src="<?= htmlspecialchars($fruit['Image'])?>" class="img-fluid rounded w-75" alt="Image">
                        </div>
                        <div class="col-lg-6">
                            <h4 class="fw-bold mb-3"><?= htmlspecialchars($fruit['Name']) ?> </h4>
                            <p class="mb-3">Thể loại: <?= htmlspecialchars($fruit['Type'])?></p>
                            <h5 class="fw-bold mb-3"><?= htmlspecialchars($fruit['Price'])?> VNĐ / Kg</h5>
                            <div class="d-flex mb-4">
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="mb-4"><?= htmlspecialchars($fruit['Description'])?></p>
                            <div class="input-group quantity mb-5" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn d-flex align-items-center border border-secondary rounded-pill px-3 text-primary btn-add-cart"
                                data-id="<?= htmlspecialchars($fruit['Id']) ?>"
                                data-name="<?= htmlspecialchars($fruit['Name']) ?>"
                                data-img="<?= htmlspecialchars($fruit['Image']) ?>"
                                data-price="<?= htmlspecialchars($fruit['Price']) ?>"
                                data-description="<?= htmlspecialchars($fruit['Description']) ?>">
                                <i class="fa fa-shopping-bag me-2 text-primary"></i>
                                <span class="flex-grow-1 text-primary">Thêm vào giỏ hàng</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="nav nav-tabs mb-3">
                            <p class="nav-link active border-white border-bottom-0 text-primary" >Description</p>
                        </div>
                        <div class="mb-5">
                            <p class="fw-bold mb-3">&emsp;&emsp;&emsp;<?= htmlspecialchars($fruit['Detail'])?></p>
                        </div>
                    </div>

                <h1 class="fw-bold mb-4">Related products</h1>
                <div id="relatedProductsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php 
                        $activeClass = 'active'; // Đảm bảo chỉ có một slide đầu tiên có class 'active'
                        $productsPerSlide = 4; // Mỗi slide hiển thị 4 sản phẩm
                        $products = $data['relatedProducts']; // Giả sử đây là mảng chứa các sản phẩm liên quan
                        $totalProducts = count($products);
                        
                        // Tạo các nhóm sản phẩm 4 sản phẩm mỗi nhóm
                        for ($i = 0; $i < $totalProducts; $i += $productsPerSlide) {
                            $currentProducts = array_slice($products, $i, $productsPerSlide); // Cắt mảng sản phẩm thành các nhóm 4 sản phẩm
                        ?>
                            <div class="carousel-item <?= $activeClass; ?>">
                                <div class="row gx-1 gy-1"> <!-- Giảm khoảng cách giữa các cột với 'gx-4' và 'gy-4' -->
                                    <?php foreach ($currentProducts as $fruit): ?>
                                        <div class="col-md-6 col-lg-3 col-xl-3"> <!-- Đảm bảo mỗi sản phẩm chiếm 3 cột trên desktop -->
                                            <?php include 'common/fruit.php'; ?> <!-- Gọi lại file chứa giao diện thẻ sản phẩm -->
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php
                            $activeClass = ''; // Chỉ cần lần đầu tiên có class 'active'
                        }
                        ?>
                    </div>

                    <a class="carousel-control-prev" href="#relatedProductsCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#relatedProductsCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>


            </div>
        </div>
    </div>
    <!-- Single Product End -->

    <!-- Footer Start -->
    <?php include 'common/footer.php'; ?>
    <!-- Footer End -->
</body>

</html>
