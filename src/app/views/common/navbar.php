<?php
session_start();
$product_count = isset($_SESSION['shoppingcart']) ? count($_SESSION['shoppingcart']) : 0;
?>

<div class="container-fluid fixed-top">
    <div class="container topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2">
                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="https://maps.app.goo.gl/QKzuJvX7wonKp63E9"
                        class="text-white">Khu phố 6, Linh Trung</a></small>
                <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="mailto:22525525@uit.gm.edu.vn"
                        class="text-white">22525525@uit.gm.edu.vn</a></small>
            </div>
            <div class="top-link pe-2">
                <a href="privacy" class="text-white"><small class="text-white mx-2">Chính sách bảo mật</small>/</a>
                <a href="#" class="text-white"><small class="text-white mx-2">Điều khoản sử dụng</small>/</a>
                <a href="#" class="text-white"><small class="text-white ms-2">Khuyến mãi</small></a>
            </div>
        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl" style="box-shadow: none;">
            <a href="<?= BASE_URL ?>/index" class="navbar-brand">
                <h1 class="text-primary display-6">2PM& Fruitables</h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="<?= BASE_URL ?>/index" class="nav-item nav-link active">Trang chủ</a>
                    <a href="<?= BASE_URL ?>/introduce" class="nav-item nav-link">Giới thiệu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Các trang</a>
                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                            <a href="<?= BASE_URL ?>/cart" class="dropdown-item">Giỏ hàng</a>
                            <a href="<?= BASE_URL ?>/checkout" class="dropdown-item">Checkout</a>
                            <a href="<?= BASE_URL ?>/testimonial" class="dropdown-item">Đánh giá</a>
                        </div>
                    </div>
                    <a href="<?= BASE_URL ?>/contact" class="nav-item nav-link">Liên hệ</a>
                </div>
                <div class="d-flex m-3 me-0">
                    <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                        data-bs-toggle="modal" data-bs-target="#searchModal"><i
                            class="fas fa-search text-primary"></i></button>
                    <a href="<?= BASE_URL ?>/cart" class="position-relative me-4 my-auto">
                        <i class="fa fa-shopping-bag fa-2x"></i>
                        <span id="cart-count"
                            class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                            style="top: -5px; left: 15px; height: 20px; min-width: 20px;"><?php echo $product_count; ?></span>
                    </a>
                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] === true): ?>
                        <!-- Icon User khi đã đăng nhập -->
                        <a href="#" class="my-auto" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <i class="fas fa-user fa-2x"></i>
                        </a>
                    <?php else: ?>
                        <!-- Icon Login khi chưa đăng nhập -->
                        <a href="<?= BASE_URL ?>/login" class="my-auto">
                            <i class="fas fa-sign-in-alt fa-2x"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Modal Logout Start -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Đăng xuất</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn đăng xuất không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <a href="<?= BASE_URL ?>/login/logout" class="btn btn-primary">Đăng xuất</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Logout End -->

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tìm kiếm sản phẩm bạn cần</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASE_URL ?>/search" method="get" class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" name="q" class="form-control p-3" placeholder="Nhập tên sản phẩm..."
                        aria-describedby="search-icon-1">
                    <button type="submit" id="search-icon-1" class="input-group-text p-3"><i
                            class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Search End -->
