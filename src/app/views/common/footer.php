<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
            <div class="row g-4">
                <div class="col-lg-3">
                    <a href="index">
                        <h1 class="text-primary mb-0">2PM& Fruitables</h1>
                        <p class="text-secondary mb-0">Sản phẩm organic</p>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative mx-auto">
                        <!-- Input để nhập email -->
                        <input id="email-input" class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="email" 
                            placeholder="Nhập Email">
                        <!-- Nút đăng ký -->
                        <button id="register-button" type="button" 
                                class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" 
                                style="top: 0; right: 0;">
                            Đăng ký ngay
                        </button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex justify-content-end pt-3">
                        <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href="https://www.instagram.com/nvnguyn/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href="https://www.facebook.com/nhsmai04" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href="" target="_blank"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-secondary btn-md-square rounded-circle" href="" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Tại sao chọn chúng tôi!</h4>
                    <p class="mb-4">Cửa hàng uy tín, lâu năm đã thành lập từ năm 2004. Và được nhiều chứng nhận,
                        thành tích trong việc sản xuất và kinh doanh những sản phẩm hữu cơ đạt chuẩn quốc tế...</p>
                    <a href="introduce" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Đọc thêm</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Thông tin</h4>
                    <a class="btn-link" href="introduce">Giới thiệu</a>
                    <a class="btn-link" href="contact">Liên hệ</a>
                    <a class="btn-link" href="privacy">Chính sách bảo mật</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Liên kết nhanh</h4>
                    <a class="btn-link" href="testimonial">Đánh giá</a>
                    <a class="btn-link" href="cart">Giỏ hàng</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Liên hệ</h4>
                    <p class="mb-0">Địa chỉ: <a href="https://maps.app.goo.gl/QKzuJvX7wonKp63E9" target="_blank" class="btn-link">Khu phố 6, Linh Trung</a></p>
                    <p class="mb-0">Email: <i class="btn-link"></i> <a href="https://maps.app.goo.gl/QKzuJvX7wonKp63E9" target="_blank" class="btn-link">22525525@gm.uit.edu.vn</a></p>
                    <p>Hotline: <a href="tel:" class="btn-link">Hotline 2PM Fruitables</a></p>
                    <img src="https://webmedia.com.vn/images/2021/09/logo-da-thong-bao-bo-cong-thuong-mau-xanh.png"
                        class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>2PM&
                        Fruitables</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 my-auto text-center text-md-end text-white">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                Thiết kế bởi <a class="border-bottom" href="https://htmlcodex.com">Nhóm 15</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->
<!-- Back to Top -->
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
        class="fa fa-arrow-up"></i></a>

<!-- Start Đăng ký ngay -->
<script>
    // Lắng nghe sự kiện click vào nút "Đăng ký ngay"
    document.getElementById('register-button').addEventListener('click', function () {
        // Lấy giá trị từ ô input email
        const email = document.getElementById('email-input').value;

        // Kiểm tra nếu email không trống
        if (email.trim() !== '') {
            // Chuyển hướng sang trang đăng ký với email được điền sẵn
            window.location.href = `register?email=${encodeURIComponent(email)}`;
        } else {
            // Thông báo nếu chưa nhập email
            alert('Vui lòng nhập email trước khi đăng ký!');
        }
    });
</script>
<!-- End Đăng ký ngay -->
<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/easing/easing.min.js"></script>
<script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/waypoints/waypoints.min.js"></script>
<script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/lightbox/js/lightbox.min.js"></script>
<script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="http://localhost:8080/IS207-SOLITEA/src/app/public/js/main.js"></script>

