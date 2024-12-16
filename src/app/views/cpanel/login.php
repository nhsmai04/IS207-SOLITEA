<!-- Spinner Start -->
<div id="spinner"
    class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->
<div class="login">
    <form autocomplete="off" action="<?php echo htmlspecialchars(BASE_URL); ?>/login/authentication_login" method="POST">
        <h1 class="title text-primary display-6 text-center">Đăng nhập</h1>
        <div>
            <p>Tên đăng nhập</p>
            <input id="username" type="text" name="username" autocomplete="current-username" required>
        </div>
        <div>
            <p>Mật khẩu</p>
            <input id="password" type="password" name="password" autocomplete="current-password" required>
        </div>
        <?php
        if (isset($msg['msg'])) {
            echo '<p class="error-message">' . htmlspecialchars($msg['msg']) . '</p>';
        }
        ?>
        <div class="button">
            <button type="submit" name="login" value="Login">Đăng nhập</button>
        </div>
        <div class="or">
            <div>
                <p>Hoặc</p>
            </div>
            <hr>
        </div>
        <div class="register"><span>Chưa có tài khoản</span><a href="">Đăng ký</a></div>
    </form>
</div>

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/easing/easing.min.js"></script>
<script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/waypoints/waypoints.min.js"></script>
<script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/lightbox/js/lightbox.min.js"></script>
<script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="http://localhost:8080/IS207-SOLITEA/src/app/public/js/main.js"></script>