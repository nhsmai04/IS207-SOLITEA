<div class="register">
    <form autocomplete="off" action="<?php echo htmlspecialchars(BASE_URL); ?>/register/register_user" method="POST">
        <a href="<?= BASE_URL ?>/index" class="navbar-brand">
            <h1 class="text-primary display-6 text-center">2PM& Fruitables</h1>
        </a>
        <h1 class="title text-primary display-6 text-center">Đăng ký</h1>
        <div class="register-info-container">
            <div class="left">
                <div>
                    <label for="username">Tên đăng nhập</label>
                    <input id="username" type="text" name="username" autocomplete="current-username" required>
                </div>

                <div>
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" autocomplete="current-email" value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>" required>
                </div>

                <div>
                    <label for="password">Mật khẩu</label>
                    <input id="password" type="password" name="password" required>
                </div>

                <div>
                    <label for="confirm_password">Xác nhận mật khẩu</label>
                    <input id="confirm_password" type="password" name="confirm_password" required>
                </div>
            </div>
            <div class="right">
                <div>
                    <label for="first_name">Họ</label>
                    <input id="first_name" type="text" name="first_name" required>
                </div>

                <div>
                    <label for="last_name">Tên đệm và tên</label>
                    <input id="last_name" type="text" name="last_name" required>
                </div>

                <div>
                    <label for="phone">Số điện thoại</label>
                    <input id="phone" type="text" name="phone" required>
                </div>

                <div>
                    <label for="birthdate">Ngày sinh</label>
                    <input id="birthdate" type="date" name="birthdate" required>
                </div>

                <div>
                    <label for="gender">Giới tính</label>
                    <select name="gender" required>
                        <option value="male">Nam</option>
                        <option value="female">Nữ</option>
                        <option value="other">Khác</option>
                    </select>
                </div>

                <div>
                    <label for="address">Địa chỉ</label>
                    <textarea id="address" name="address" required></textarea>
                </div>
            </div>
        </div>
        <div class="button">
            <button type="submit" name="register" value="Register">Đăng ký</button>
        </div>

        <div class="login-button">
            <span>Đã có tài khoản?</span><a href="<?php echo BASE_URL; ?>/login">Đăng nhập</a>
        </div>
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
