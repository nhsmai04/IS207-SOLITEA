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
    <div class="container py-5 mt-3" style="background-color: #f9f9f9; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <h2 class="text-center mb-4" style="font-size: 36px; font-weight: bold; color: #343a40;">Giới thiệu về chúng tôi</h2>
        <p class="text-justify" style="font-size: 18px; line-height: 1.8; color: #555;">
            &emsp;&emsp;&emsp;<b class="text-primary">Cửa hàng uy tín, lâu năm</b>, đã thành lập từ năm 2004, là một trong những thương hiệu dẫn đầu trong lĩnh vực sản phẩm hữu cơ. 
            Với hơn hai thập kỷ không ngừng nỗ lực và phát triển, chúng tôi đã đạt được nhiều chứng nhận và thành tích quan trọng từ các tổ chức uy tín trong và ngoài nước. 
            Điều này khẳng định vị thế của cửa hàng trong việc sản xuất và kinh doanh các sản phẩm hữu cơ đạt chuẩn quốc tế, mang lại sự an tâm và tin tưởng cho người tiêu dùng.
            <br><br>
            &emsp;&emsp;&emsp;Chúng tôi tự hào cung cấp các sản phẩm được chọn lọc kỹ càng, trải qua quy trình sản xuất an toàn, không hóa chất độc hại, 
            nhằm đảm bảo giá trị sức khỏe cao nhất cho khách hàng. 
            Không chỉ dừng lại ở việc cung cấp thực phẩm, cửa hàng còn hướng đến việc lan tỏa lối sống xanh, bền vững, góp phần bảo vệ môi trường và xây dựng một cộng đồng khỏe mạnh hơn.
            <br><br>
            &emsp;&emsp;&emsp;Sự tin tưởng và ủng hộ của khách hàng chính là động lực để chúng tôi tiếp tục phát triển, không ngừng nâng cao chất lượng dịch vụ và sản phẩm, 
            mang đến những trải nghiệm mua sắm thân thiện, tiện lợi và trọn vẹn nhất.
        </p>
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
        <h2 class="text-center mb-2" style="font-size: 36px; font-weight: bold;">Liên hệ với chúng tôi<a href="contact" class=""> <u>tại đây!!</u></a></h2>
    </div>


     <?php include 'common/footer.php'; ?>

</body>

</html>
