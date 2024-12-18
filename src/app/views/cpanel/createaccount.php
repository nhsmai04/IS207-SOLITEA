<div class="register">
    <form autocomplete="off" action="<?php echo htmlspecialchars(BASE_URL); ?>/adminregister/registerAdmin" method="POST">
        <a href="<?= BASE_URL ?>/login/dashboard" class="navbar-brand">
            <h1 class="text-primary display-6 text-center">Admin Pages</h1>
        </a>
        <h1 class="title text-primary display-6 text-center">Tạo tài khoản admin</h1>

        <?php if (isset($msg)): ?>
            <div class="text-center m-3" style="color: red">
                <?php echo $msg['msg']; ?>
            </div>
        <?php endif; ?>

        <div class="register-info-container">
            <div class="w-100">
                <div>
                    <label for="username">Tên đăng nhập</label>
                    <input id="username" type="text" name="username" autocomplete="current-username" required>
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
        </div>
        <div class="button m-auto mt-4 mb-3">
            <button type="submit" name="register" value="Register">Tạo tài khoản</button>
        </div>
    </form>
</div>
