<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand fw-bold text-primary" href="<?php echo BASE_URL ?>/login/dashboard">
            <i class="bi bi-speedometer2"></i> Admin Panel
        </a>
        <!-- Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo BASE_URL ?>/login/dashboard">
                        <i class="bi bi-house-door"></i> Home
                    </a>
                </li>

                <!-- Danh mục sản phẩm -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Danh mục sản phẩm
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/product/add_category">Thêm</a></li>
                        <li><a class="dropdown-item" href="<?php echo BASE_URL ?>/product/list_category">Danh sách</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Khác</a></li>
                    </ul>
                </li>

                <!-- Bài viết -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?php echo BASE_URL ?>/feedback" role="button">
                        Phản hồi
                    </a>
                </li>

                <!-- Sản phẩm -->


                <!-- Đơn hàng -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?php echo BASE_URL ?>/adminorders" role="button">
                        Đơn hàng
                    </a>
                </li>
            </ul>

            <!-- Right Aligned Links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>/adminregister"><i class="bi bi-box-arrow-in-right"></i> Tạo tài khoản admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="<?php echo BASE_URL ?>/login/logout">
                        <i class="bi bi-box-arrow-right"></i> Đăng xuất
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>