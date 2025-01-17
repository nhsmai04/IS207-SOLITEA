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
    <?php include 'common/navbar.php' ?>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary">TIỆM RAU CỦ QUẢ</h4>
                    <h1 class="mb-5 display-3 text-primary">2PM& Fruitables</h1>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="https://images.pexels.com/photos/1099680/pexels-photo-1099680.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    class="img-fluid w-200 h-200 bg-secondary rounded" alt="First slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Trái cây</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="https://images.pexels.com/photos/915058/pexels-photo-915058.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    class="img-fluid w-200 h-200 bg-secondary rounded" alt="Second slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Rau củ</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Featurs Section Start -->
    <div class="container-fluid featurs py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4" 
                        style="transition: transform 0.3s ease; height: 100%;"
                        onmouseover="this.style.transform='scale(1.1)'" 
                        onmouseout="this.style.transform='scale(1)'">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-car-side fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Miễn phí giao hàng</h5>
                            <p class="mb-0">Giao tận nhà với đơn 500K</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4" 
                        style="transition: transform 0.3s ease; height: 100%;"
                        onmouseover="this.style.transform='scale(1.1)'" 
                        onmouseout="this.style.transform='scale(1)'">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-user-shield fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Bảo mật thanh toán</h5>
                            <p class="mb-0">100% bảo mật tuyệt đối</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4" 
                        style="transition: transform 0.3s ease; height: 100%;"
                        onmouseover="this.style.transform='scale(1.1)'" 
                        onmouseout="this.style.transform='scale(1)'">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-exchange-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Hoàn trả trong 30 ngày</h5>
                            <p class="mb-0">Bảo hiểm 30 ngày</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4" 
                        style="transition: transform 0.3s ease; height: 100%;"
                        onmouseover="this.style.transform='scale(1.1)'" 
                        onmouseout="this.style.transform='scale(1)'">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fa fa-phone-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Hỗ trợ 24/7</h5>
                            <p class="mb-0">Luôn luôn bên bạn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs Section End -->



    <!-- Fruits Shop Start-->
    <div id="buy" class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <h1>Sản phẩm organic</h1>
                    </div>
                    <div class="col-lg-8 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill"
                                    href="#tab-1">
                                    <span class="text-dark" style="width: 150px; padding: 5px;">Tất cả sản phẩm</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 150px; padding: 5px;">Rau</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 150px; padding: 5px;">Quả</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <?php foreach ($fruits as $fruit): ?>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="d-flex flex-column h-100 rounded position-relative fruite-item">
                                            <div class="fruite-img" style="height: 200px;">
                                                <img src="<?= htmlspecialchars($fruit['Image']) ?>" class="w-100 h-100"
                                                    alt="<?= htmlspecialchars($fruit['Name']) ?>">
                                            </div>
                                            <div class=" text-white bg-secondary px-3 py-1 rounded
                                                    position-absolute" style="top: 10px; left: 10px;">
                                                <?= htmlspecialchars($fruit['Type']) ?>
                                            </div>
                                            <div
                                                class="d-flex flex-column justify-content-between flex-grow-1 p-4 border border-secondary border-top-0 rounded-bottom">
                                                <a href="<?php echo BASE_URL ?>/shopDetail/index/<?= htmlspecialchars($fruit['Id']) ?>"
                                                    class="text-decoration-none text-dark fw-bold fs-5">
                                                    <?= htmlspecialchars($fruit['Name']) ?>
                                                </a>
                                                <p><?= htmlspecialchars($fruit['Description']) ?></p>
                                                <p class="text-dark fs-5 fw-bold mb-0">
                                                    <?= htmlspecialchars($fruit['Price']) ?> VNĐ / kg</p>

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

                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <?php foreach ($fruits as $fruit): ?>
                                    <?php if ($fruit['Type'] == 'Rau'): ?>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="d-flex flex-column h-100 rounded position-relative fruite-item">
                                            <div class="fruite-img" style="height: 200px;">
                                                <img src="<?= htmlspecialchars($fruit['Image']) ?>" class="w-100 h-100"
                                                    alt="<?= htmlspecialchars($fruit['Name']) ?>">
                                            </div>
                                            <div class=" text-white bg-secondary px-3 py-1 rounded
                                                            position-absolute" style="top: 10px; left: 10px;">
                                                <?= htmlspecialchars($fruit['Type']) ?>
                                            </div>
                                            <div
                                                class="d-flex flex-column justify-content-between flex-grow-1 p-4 border border-secondary border-top-0 rounded-bottom">
                                                <a href="<?php echo BASE_URL ?>/shopDetail/index/<?= htmlspecialchars($fruit['Id']) ?>"
                                                    class="text-decoration-none text-dark fw-bold fs-5">
                                                    <?= htmlspecialchars($fruit['Name']) ?>
                                                </a>
                                                <p><?= htmlspecialchars($fruit['Description']) ?></p>
                                                <p class="text-dark fs-5 fw-bold mb-0">
                                                    <?= htmlspecialchars($fruit['Price']) ?> VNĐ / kg</p>

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

                                    </div>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <?php foreach ($fruits as $fruit): ?>
                                    <?php if ($fruit['Type'] == 'Quả'): ?>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="d-flex flex-column h-100 rounded position-relative fruite-item">
                                            <div class="fruite-img" style="height: 200px;">
                                                <img src="<?= htmlspecialchars($fruit['Image']) ?>" class="w-100 h-100"
                                                    alt="<?= htmlspecialchars($fruit['Name']) ?>">
                                            </div>
                                            <div class=" text-white bg-secondary px-3 py-1 rounded
                                                            position-absolute" style="top: 10px; left: 10px;">
                                                <?= htmlspecialchars($fruit['Type']) ?>
                                            </div>
                                            <div
                                                class="d-flex flex-column justify-content-between flex-grow-1 p-4 border border-secondary border-top-0 rounded-bottom">
                                                <a href="<?php echo BASE_URL ?>/shopDetail/index/<?= htmlspecialchars($fruit['Id']) ?>"
                                                    class="text-decoration-none text-dark fw-bold fs-5">
                                                    <?= htmlspecialchars($fruit['Name']) ?>
                                                </a>
                                                <p><?= htmlspecialchars($fruit['Description']) ?></p>
                                                <p class="text-dark fs-5 fw-bold mb-0">
                                                    <?= htmlspecialchars($fruit['Price']) ?> VNĐ / kg</p>

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

                                    </div>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->


    <!-- Featurs Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <a href="#">
                        <div class="service-item bg-secondary rounded border border-secondary">
                            <img src="img/featur-1.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="px-4 rounded-bottom">
                                <div class="service-content bg-primary text-center p-4 rounded">
                                    <h5 class="text-white">Sầu Riêng Ri6</h5>
                                    <h3 class="mb-0">Sale 20%</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#">
                        <div class="service-item bg-dark rounded border border-dark">
                            <img src="img/featur-2.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="px-4 rounded-bottom">
                                <div class="service-content bg-light text-center p-4 rounded">
                                    <h5 class="text-primary">Mua nhiều</h5>
                                    <h3 class="mb-0">Free ship</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="#">
                        <div class="service-item bg-primary rounded border border-primary">
                            <img src="img/featur-3.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="px-4 rounded-bottom">
                                <div class="service-content bg-secondary text-center p-4 rounded">
                                    <h5 class="text-white">Exotic Rau, quả</h5>
                                    <h3 class="mb-0">Giảm 50%</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs End -->


    <!-- Banner Section Start-->
    <div class="container-fluid banner bg-secondary my-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="display-3 text-white">Mua trái cây tươi</h1>
                        <p class="fw-normal display-3 text-dark mb-4">ở shop chúng tôi</p>
                        <p class="mb-4 text-dark">Luôn luôn có những sản phẩm, tươi ngon tuyệt đối được trồng trong một
                            không gian khép kín, hái tận vườn.</p>
                        <a href="#buy" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">Mua
                            ngay</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="img/baner-1.png" class="img-fluid w-100 rounded" alt="">
                        <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute"
                            style="width: 140px; height: 140px; top: 0; left: 0;">
                            <h1 style="font-size: 100px;">1</h1>
                            <div class="d-flex flex-column">
                                <span class="h2 mb-0">2K</span>
                                <span class="h4 text-muted mb-0">kg</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->
    <!-- Fact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="bg-light p-5 rounded">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>Khách hàng hài lòng</h4>
                            <h1>5.000+</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>Chất lượng</h4>
                            <h1>99%</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>Giấy chứng nhận</h4>
                            <h1>33</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-secondary"></i>
                            <h4>Mặt hàng</h4>
                            <h1>789</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact end -->


    <!-- Tastimonial Start -->
    <div class="testimonial-header text-center">
        <h4 class="text-primary">Lời chứng thực của chúng tôi</h4>
        <h1 class="display-5 mb-5 text-dark">Khách hàng đã đánh giá!</h1>
    </div>
    <div class="testimonial-item img-border-radius bg-light rounded p-4 w-75 mx-auto">
        <div class="position-relative">
            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
            <div class="mb-4 pb-4 border-bottom border-secondary">
                <p class="mb-0">Một kiệt tác giao thoa giữa thiết kế và chức năng, trang web rau củ không chỉ hấp dẫn về mặt thẩm mỹ với giao diện tươi mới, mà còn cung cấp thông tin chi tiết và dễ hiểu, khiến mỗi lượt truy cập đều trở thành một trải nghiệm đầy cảm hứng cho người yêu thực phẩm lành mạnh.
                </p>
            </div>
            <div class="d-flex align-items-center flex-nowrap">
                <div class="bg-secondary rounded">
                    <img src="https://scontent.fsgn1-1.fna.fbcdn.net/v/t1.6435-1/118650115_107963001037294_5397116511421204011_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=104&ccb=1-7&_nc_sid=0ecb9b&_nc_eui2=AeEqXLX1_7ciW4zyaYAgKthAsA3ME9M4uxawDcwT0zi7FqRqPVd8jt6ef_GH0iNP25bPgB6-uyeQnReWyS9z8qrf&_nc_ohc=F7wARN21JJ8Q7kNvgFEvXK3&_nc_zt=24&_nc_ht=scontent.fsgn1-1.fna&_nc_gid=AwnW9hEzdijHaD8cgebdvpO&oh=00_AYCiI2OG6W8mI-glyu0Uxlz5lQzEvW64fVkl9aSl8Wqp-A&oe=6788944E" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                </div>
                <div class="ms-4 d-block">
                    <h4 class="text-dark">トムさん</h4>
                    <p class="m-0 pb-3">Nhà phê bình web cao cấp</p>
                    <div class="d-flex pe-5">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tastimonial End -->

    <?php include 'common/footer.php'; ?>



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/easing/easing.min.js"></script>
    <script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/waypoints/waypoints.min.js"></script>
    <script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/lightbox/js/lightbox.min.js"></script>
    <script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="http://localhost:8080/IS207-SOLITEA/src/app/public/js/main.js"></script>
</body>

</html>