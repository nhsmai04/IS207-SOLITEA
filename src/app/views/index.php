<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="http://localhost:8080/IS207-SOLITEA/src/app/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="http://localhost:8080/IS207-SOLITEA/src/app/public/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    <?php include 'common/navbar.php'?>
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tìm kiếm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


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
                    <div class="featurs-item text-center rounded bg-light p-4">
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
                    <div class="featurs-item text-center rounded bg-light p-4">
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
                    <div class="featurs-item text-center rounded bg-light p-4">
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
                    <div class="featurs-item text-center rounded bg-light p-4">
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
                                    <form action="<?php echo BASE_URL ?>/cart/addtocart" method="POST"
                                        class="col-md-6 col-lg-4 col-xl-3">
                                        <input type="hidden" name="product_id"
                                            value="<?= htmlspecialchars($fruit['Id']) ?>">
                                        <input type="hidden" name="product_name"
                                            value="<?= htmlspecialchars($fruit['Name']) ?>">
                                        <input type="hidden" name="product_image"
                                            value="<?= htmlspecialchars($fruit['Image']) ?>">
                                        <input type="hidden" name="product_price"
                                            value="<?= htmlspecialchars($fruit['Price']) ?>">
                                        <input type="hidden" name="product_quantity" value="1">
                                        <div class="d-flex flex-column h-100 rounded position-relative fruite-item">
                                            <div class="fruite-img" style="height: 200px;">
                                                <img src="<?= htmlspecialchars($fruit['Image']) ?>" class="w-100 h-100"
                                                    alt="<?= htmlspecialchars($fruit['Name']) ?>">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                style="top: 10px; left: 10px;"><?= htmlspecialchars($fruit['Type']) ?>
                                            </div>
                                            <div
                                                class="d-flex flex-column justify-content-between flex-grow-1 p-4 border border-secondary border-top-0 rounded-bottom">
                                                <a href="<?php echo BASE_URL ?>/shopDetail?id=<?= htmlspecialchars($fruit['Id']) ?>"
                                                    class="text-decoration-none text-dark fw-bold fs-5">
                                                    <?= htmlspecialchars($fruit['Name']) ?>
                                                </a>
                                                <p><?= htmlspecialchars($fruit['Description']) ?></p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">
                                                        <?= htmlspecialchars($fruit['Price']) ?>Đ / kg</p>
                                                    <button type="submit"
                                                        class="btn d-flex align-items-center border border-secondary rounded-pill px-3 text-primary">
                                                        <i class="fa fa-shopping-bag me-2 text-primary"></i>
                                                        <span class="flex-grow-1 text-primary">Thêm vào giỏ hàng</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade  p-0 ">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <?php  foreach ($fruits as $fruit): ?>
                                    <?php if ($fruit['Type'] == 'Rau'): ?>
                                    <form action="<?php echo BASE_URL ?>/cart/addtocart" method="POST"
                                        class="col-md-6 col-lg-4 col-xl-3">
                                        <input type="hidden" name="product_id"
                                            value="<?= htmlspecialchars($fruit['Id']) ?>">
                                        <input type="hidden" name="product_name"
                                            value="<?= htmlspecialchars($fruit['Name']) ?>">
                                        <input type="hidden" name="product_image"
                                            value="<?= htmlspecialchars($fruit['Image']) ?>">
                                        <input type="hidden" name="product_price"
                                            value="<?= htmlspecialchars($fruit['Price']) ?>">
                                        <input type="hidden" name="product_quantity" value="1">
                                        <div class="d-flex flex-column h-100 rounded position-relative fruite-item">
                                            <div class="fruite-img" style="height: 200px;">
                                                <img src="<?= htmlspecialchars($fruit['Image']) ?>" class="w-100 h-100"
                                                    alt="<?= htmlspecialchars($fruit['Name']) ?>">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                style="top: 10px; left: 10px;"><?= htmlspecialchars($fruit['Type']) ?>
                                            </div>
                                            <div
                                                class="d-flex flex-column justify-content-between flex-grow-1 p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4><?= htmlspecialchars($fruit['Name']) ?></h4>
                                                <p><?= htmlspecialchars($fruit['Description']) ?></p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">
                                                        <?= htmlspecialchars($fruit['Price']) ?>Đ / kg</p>
                                                    <button type="submit"
                                                        class="btn d-flex align-items-center border border-secondary rounded-pill px-3 text-primary">
                                                        <i class="fa fa-shopping-bag me-2 text-primary"></i>
                                                        <span class="flex-grow-1 text-primary">Thêm vào giỏ hàng</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade  p-0  ">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <?php  foreach ($fruits as $fruit): ?>
                                    <?php if ($fruit['Type'] == 'Quả'): ?>
                                    <form action="<?php echo BASE_URL ?>/cart/addtocart" method="POST"
                                        class="col-md-6 col-lg-4 col-xl-3">
                                        <input type="hidden" name="product_id"
                                            value="<?= htmlspecialchars($fruit['Id']) ?>">
                                        <input type="hidden" name="product_name"
                                            value="<?= htmlspecialchars($fruit['Name']) ?>">
                                        <input type="hidden" name="product_image"
                                            value="<?= htmlspecialchars($fruit['Image']) ?>">
                                        <input type="hidden" name="product_price"
                                            value="<?= htmlspecialchars($fruit['Price']) ?>">
                                        <input type="hidden" name="product_quantity" value="1">
                                        <div class="d-flex flex-column h-100 rounded position-relative fruite-item">
                                            <div class="fruite-img" style="height: 200px;">
                                                <img src="<?= htmlspecialchars($fruit['Image']) ?>" class="w-100 h-100"
                                                    alt="<?= htmlspecialchars($fruit['Name']) ?>">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                style="top: 10px; left: 10px;"><?= htmlspecialchars($fruit['Type']) ?>
                                            </div>
                                            <div
                                                class="d-flex flex-column justify-content-between flex-grow-1 p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4><?= htmlspecialchars($fruit['Name']) ?></h4>
                                                <p><?= htmlspecialchars($fruit['Description']) ?></p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">
                                                        <?= htmlspecialchars($fruit['Price']) ?>Đ / kg</p>
                                                    <button type="submit"
                                                        class="btn d-flex align-items-center border border-secondary rounded-pill px-3 text-primary">
                                                        <i class="fa fa-shopping-bag me-2 text-primary"></i>
                                                        <span class="flex-grow-1 text-primary">Thêm vào giỏ hàng</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
                                <span class="h2 mb-0">12K</span>
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
    <!-- Fact Start -->


    <!-- Tastimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="testimonial-header text-center">
                <h4 class="text-primary">Lời chứng thực của chúng tôi</h4>
                <h1 class="display-5 mb-5 text-dark">Khách hàng đã đánh giá!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the
                                industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="https://media.istockphoto.com/id/1311084168/vi/anh/ng%C6%B0%E1%BB%9Di-ph%E1%BB%A5-n%E1%BB%AF-ch%C3%A2u-%C3%A1-vui-m%E1%BB%ABng-nh%C3%ACn-v%C3%A0o-m%C3%A1y-%E1%BA%A3nh-v%E1%BB%9Bi-ti%E1%BA%BFng-c%C6%B0%E1%BB%9Di-ch%C3%A2n-th%C3%A0nh.jpg?s=612x612&w=0&k=20&c=v_N6GzRqNC4lDWsTkSCeZTz2wHDPipSOUydH0Bpuy_M="
                                    class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Minh Châu</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the
                                industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="https://cdnphoto.dantri.com.vn/C83F_N0VrqgawQ458TVSOi0kCLg=/zoom/1200_630/2024/10/12/mr-crop-1728706426776.jpeg"
                                    class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Nam Dương</h4>
                                <p class="m-0 pb-3">Profession</p>
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
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the
                                industry's standard dummy text ever since the 1500s,
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="https://nhakhoaanna.com/wp-content/uploads/2019/08/NSBinhTinh_AF-1.jpg"
                                    class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Hạnh Nguyên</h4>
                                <p class="m-0 pb-3">Profession</p>
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