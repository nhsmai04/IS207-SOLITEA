<?php
// File: views/register.php
?>

<div class="register">
    <form autocomplete="off" action="<?php echo htmlspecialchars(BASE_URL); ?>/register/registerUser" method="POST">
        <a href="<?= BASE_URL ?>/index" class="navbar-brand">
            <h1 class="text-primary display-6 text-center">2PM& Fruitables</h1>
        </a>
        <h1 class="title text-primary display-6 text-center">Đăng ký</h1>
        
        <?php if (isset($error_message)): ?>
            <div class="alert alert-danger"><?php echo $error_message; ?></div>
        <?php endif; ?>

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
                <?php if (isset($msg)): ?>
            <div class="text-center m-3" style="color: red">
                <?php echo $msg['msg']; ?>
            </div>
        <?php endif; ?>
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
        <!-- Hiển thị thông báo lỗi nếu có -->
        <div class="button m-auto mt-4 mb-3">
            <button type="submit" name="register" value="Register">Đăng ký</button>
        </div>
        
        <div class="login-button">
            <span>Đã có tài khoản?</span><a href="<?php echo BASE_URL; ?>/login">Đăng nhập</a>
        </div>
    </form>
</div>
