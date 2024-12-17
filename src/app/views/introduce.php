<!DOCTYPE html>
<html lang="en">
    <?php include 'common/head.php'; ?>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <?php include 'common/navbar.php'; ?>
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Giới thiệu</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active text-white">Giới thiệu</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- Hero Section -->
    <div class="container-fluid bg-primary text-white text-center py-5" style="background-image: url('your-image-path.jpg'); background-size: cover;">
        <h1 class="display-4">Chào mừng đến với 2PM& Fruitables</h1>
        <p class="lead">Sản phẩm rau củ hữu cơ tươi ngon, chất lượng, giao hàng tận nơi</p>
    </div>

    <!-- About Us Section -->
    <div class="container py-5">
        <h2 class="text-center mb-4" style="font-size: 36px; font-weight: bold;">Giới thiệu về chúng tôi</h2>
        <p class="text-center">2PM& Fruitables là cửa hàng chuyên cung cấp các sản phẩm rau củ hữu cơ, luôn đảm bảo chất lượng và sự tươi ngon. Chúng tôi cam kết mang đến cho khách hàng sản phẩm an toàn và tốt cho sức khỏe. Tại 2PM& Fruitables, chúng tôi cung cấp dịch vụ giao hàng tận nơi để bạn có thể dễ dàng mua sắm.</p>
    </div>

    <!-- Features Section -->
    <div class="container py-5">
        <h2 class="text-center mb-4" style="font-size: 36px; font-weight: bold;">Dịch vụ của chúng tôi</h2>
        <div class="row">
            <div class="col-md-4 text-center mb-4">
                <div class="icon mb-3">
                    <i class="fas fa-truck fa-4x" style="color: #81c408;"></i>
                </div>
                <h4>Giao hàng nhanh chóng</h4>
                <p>Chúng tôi cam kết giao hàng tận nơi nhanh chóng, sản phẩm luôn tươi ngon khi đến tay khách hàng.</p>
            </div>
            <div class="col-md-4 text-center mb-4">
                <div class="icon mb-3">
                    <i class="fas fa-leaf fa-4x" style="color: #81c408;"></i>
                </div>
                <h4>Sản phẩm hữu cơ</h4>
                <p>Tất cả các sản phẩm của chúng tôi đều là sản phẩm hữu cơ, được trồng và chăm sóc tự nhiên.</p>
            </div>
            <div class="col-md-4 text-center mb-4">
                <div class="icon mb-3">
                    <i class="fas fa-dollar-sign fa-4x" style="color: #81c408;"></i>
                </div>
                <h4>Giá cả hợp lý</h4>
                <p>Chúng tôi cung cấp các sản phẩm chất lượng với mức giá phải chăng, phù hợp với mọi gia đình.</p>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container">
        <h2 class="text-center mb-2" style="font-size: 36px; font-weight: bold;">Liên hệ với chúng tôi<a href="contact" class=""> tại đây!!</a></h2>
    </div>


     <?php include 'common/footer.php'; ?>

</body>

</html>
