<div class="login">
    <form autocomplete="off" action="<?php echo htmlspecialchars(BASE_URL); ?>/login/authentication_login" method="POST">
        <?php
        if (isset($msg['msg'])) {
            // Hiển thị thông báo lỗi an toàn
            echo '<p class="error-message">' . htmlspecialchars($msg['msg']) . '</p>';
        }
        ?>
        <h1 class="title">Đăng nhập</h1>
        <div>
            <p>Tên đăng nhập</p>
            <input id="username" type="text" name="username" autocomplete="current-username" required>
        </div>
        <div>
            <p>Mật khẩu</p>
            <input id="password" type="password" name="password" autocomplete="current-password" required>
        </div>
        <div class="button">
            <button type="submit" name="login" value="Login">Đăng nhập</button>
        </div>
        <div class="or">
            <div>
                <p>Hoặc</p>
            </div>
            <hr>
        </div>
        <div class="register"><span>Chưa có tài khoản</span><a href=""><span style="color: blue">Đăng ký</span></a></div>
    </form>
</div>
