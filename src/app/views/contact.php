<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="http://localhost:8080/IS207-SOLITEA/src/app/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="http://localhost:8080/IS207-SOLITEA/src/app/public/css/style.css" rel="stylesheet">

    <style>
        /* Giãn cách các dòng */
        .contact-info p {
            margin-bottom: 25px; /* Giãn cách giữa các dòng */
        }

        /* Tạo hiệu ứng cho các liên kết */
        .contact-info a {
            font-size: 18px; /* Kích thước chữ */
            font-weight: 600; /* Đậm chữ */
            color: #81c408 ; /* Màu chữ chính */
            text-decoration: none; /* Loại bỏ gạch dưới mặc định */
            transition: all 0.4s ease; /* Hiệu ứng chuyển tiếp */
            position: relative; /* Để sử dụng cho hiệu ứng */
        }

        /* Hiệu ứng hover: phóng to, thay đổi màu sắc, và bóng đổ */
        .contact-info a:hover {
            color: #81c408 ; /* Màu chữ khi hover */
            transform: scale(1.2); /* Phóng to 1.2 lần */
            text-shadow: 0 0 8pxrgba(130, 196, 8, 0.48); /* Tạo bóng đổ mờ */
        }

        /* Thêm hiệu ứng cho các biểu tượng */
        .contact-info i {
            margin-right: 10px; /* Khoảng cách giữa biểu tượng và chữ */
            color: #81c408 ; /* Màu biểu tượng */
            font-size: 20px; /* Kích thước biểu tượng */
            transition: color 0.4s ease; /* Hiệu ứng chuyển màu cho biểu tượng */
        }

        /* Thay đổi màu biểu tượng khi hover */
        .contact-info a:hover i {
            color: #81c408 ; /* Màu biểu tượng khi hover */
        }

        /* Thêm hiệu ứng khi hover vào từng đoạn */
        .contact-info p:hover {
            padding-left: 10px; /* Đẩy sang trái khi hover */
            background-color: rgba(0, 123, 255, 0.1); /* Màu nền nhẹ khi hover */
        }
    </style>

</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar start -->
    <?php include 'common/navbar.php'; ?>
    <!-- Navbar End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Liên hệ</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active text-white">Liên hệ</li>
        </ol>
    </div>
    <!-- Single Page Header End -->

    <!-- contact.php -->
    <div class="container mt-5">
        <h2>Liên Hệ Với Chúng Tôi</h2>

        <!-- Form Liên Hệ -->
        <form action="contact/sendcontact" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Tên Của Bạn</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Tên của bạn" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email của bạn" required>
            </div>

            <div class="mb-3">
                <label for="feedback" class="form-label">Thông Điệp</label>
                <textarea class="form-control" id="feedback" name="feedback" rows="4" placeholder="Mô tả vấn đề của bạn" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary text-white">Gửi Thông Tin</button>
        </form>

        <h2 class="mt-5">Hoặc liên hệ trực tiếp</h2>

        <div class="contact-info">
            <!-- Liên kết email -->
            <p><i class="fas fa-envelope"></i> <a href="mailto:22525525@gm.uit.edu.vn">22525525@gm.uit.edu.vn</a></p>

            <!-- Liên kết địa chỉ -->
            <p><i class="fas fa-map-marker-alt"></i> <a href="https://maps.app.goo.gl/QKzuJvX7wonKp63E9" target="_blank">Khu phố 6, Linh Trung, Thành phố Thủ Đức, Thành phố Hồ Chí Minh</a></p>

            <!-- Liên kết số điện thoại -->
            <p><i class="fas fa-phone"></i> <a href="tel:">Hotline 2PM Fruitables</a></p>
        </div>
    </div>

    <?php include 'common/footer.php'; ?>
</body>
</html>