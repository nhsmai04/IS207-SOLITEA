<!DOCTYPE html>
<html lang="en">
<?php include 'common/head.php';?>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar start -->
    <?php include 'common/navbar.php'; ?>
    <!-- Navbar End -->

    <!-- Single Page Header start -->
    <div class="py-5">
        </div>
    <!-- Single Page Header End -->

    <div class="container mt-5">
    <?php if ($user): ?>
    <h1 id="greeting-user" class="mb-4">Xin chào, <strong><?php echo htmlspecialchars($user['first_name'] . ' ' . $user['last_name']); ?></strong></h1>

    <!-- Form thông tin người dùng -->
        <form action="<?php echo BASE_URL; ?>/profile/update" method="POST" id="profileForm" class="">
            <div class="card p-4 shadow-sm mb-5 d-flex flex-column w-100 align-items-center">
                <div class="form-row w-100">
                    <div class="col-md-6 mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" readonly>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="phone">Số điện thoại:</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" readonly>
                    </div>
                </div>

                <div class="form-row w-100">
                <div class="col-md-6 mb-3">
                    <label for="gender">Giới tính:</label>
                    <select class="form-control" id="gender" name="gender">
                        <option value="male" <?php echo $user['gender'] == 'male' ? 'selected' : ''; ?>>Nam</option>
                        <option value="female" <?php echo $user['gender'] == 'female' ? 'selected' : ''; ?>>Nữ</option>
                        <option value="other" <?php echo $user['gender'] == 'other' ? 'selected' : ''; ?>>Khác</option>
                    </select>
                </div>


                    <div class="col-md-6 mb-3">
                        <label for="birthdate">Ngày sinh:</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?php echo htmlspecialchars($user['birthdate']); ?>" readonly>
                    </div>
                </div>

                <div class="form-group mb-3 w-100">
                    <label for="address">Địa chỉ:</label>
                    <textarea class="form-control" id="address" name="address" rows="3" readonly><?php echo nl2br(htmlspecialchars($user['address'])); ?></textarea>
                </div>


                <div class="form-row w-100">
                    <div class="col-md-6 mb-3">
                        <p>Ngày tạo:</p>
                        <p type="text-primary" class="form-control"><?php echo htmlspecialchars($user['created_at']); ?></p>
                    </div>

                    <div class="col-md-6 mb-3">
                        <p>Ngày cập nhật:</p>
                        <p type="text-primary" class="form-control"><?php echo htmlspecialchars($user['updated_at']); ?></p>
                    </div>
                </div>

                <!-- Nút "Chỉnh sửa thông tin" hoặc "Sửa hoàn tất" -->
                <div class="m-4">
                    <button type="button" class="btn btn-warning text-white" id="editButton" onclick="enableEdit()">Chỉnh sửa thông tin</button>
                    <button type="submit" class="btn btn-primary ms-3 text-white" id="saveButton" style="display: none;">Sửa hoàn tất</button>
                </div>
            </div>
        </form>

        <?php else: ?>
            <p>Không có thông tin hồ sơ.</p>
        <?php endif; ?>
    </div>

    <?php include 'common/footer.php'; ?>

    <script>
        // Hàm chào người dùng theo thời gian trong ngày
        function greetingBasedOnTime() {
            var today = new Date();
            var hour = today.getHours();
            var greeting = '';

            if (hour >= 5 && hour < 12) {
                greeting = 'Chào buổi sáng';
            } else if (hour >= 12 && hour < 18) {
                greeting = 'Chào buổi chiều';
            } else {
                greeting = 'Chào buổi tối';
            }

            // Hiển thị lời chào trong phần tử có id "greeting"
            document.getElementById('greeting-user').innerHTML = greeting + ', <strong><?php echo htmlspecialchars($user['first_name'] . ' ' . $user['last_name']); ?></strong>';
        }

        // Gọi hàm chào người dùng khi trang được tải
        greetingBasedOnTime();
        
        function enableEdit() {
            // Lấy tất cả các input, textarea và select trong form và bật chế độ chỉnh sửa
            var inputs = document.querySelectorAll('#profileForm input, #profileForm textarea, #profileForm select');
            inputs.forEach(function(input) {
                input.removeAttribute('readonly'); // Bỏ thuộc tính readonly
                input.removeAttribute('disabled'); // Bỏ thuộc tính disabled cho select
                input.style.backgroundColor = 'white';
            });

            // Ẩn nút "Chỉnh sửa thông tin" và hiển thị nút "Sửa hoàn tất"
            document.getElementById('editButton').style.display = 'none';
            document.getElementById('saveButton').style.display = 'inline-block';
        }


    </script>
</body>
</html>
