<!DOCTYPE html>
<html lang="vi">
<?php include 'common/head.php'; ?>
<body class="bg-light">
    <script>
        function translateContent() {
            const content = document.getElementById("content");
            const button = document.getElementById("translateBtn");

            if (content.dataset.lang === "vi") {
                content.innerHTML = `
                    <h1 class="text-primary text-center mb-4">Privacy Policy</h1>
                    <p>We are committed to protecting your personal information and complying with data protection laws. This Privacy Policy explains how we collect, use, and safeguard your data.</p>
                    <h2 class="mt-3">1. Information We Collect</h2>
                    <p>We may collect the following types of information:</p>
                    <ul>
                        <li><strong>Personal information:</strong> Full name, email address, phone number</li>
                    </ul>
                    <h2 class="mt-3">2. How We Use Your Information</h2>
                    <p>We use your personal information for the following purposes:</p>
                    <ul>
                        <li><strong>Provide Services:</strong> To provide our products and services to you.</li>
                        <li><strong>Customer Support:</strong> To respond to your inquiries and provide customer support.</li>
                    </ul>
                    <h2 class="mt-3">3. How We Protect Your Information</h2>
                    <p>We implement appropriate technical and organizational measures to protect your personal information from unauthorized access, use, or disclosure.</p>
                    <h2 class="mt-3">4. Your Rights</h2>
                    <p>You have the right to access, correct, and delete your personal information. You can also object to or restrict the processing of your personal information.</p>
                    <h2 class="mt-3">5. Contact Us</h2>
                    <p>If you have any questions about this Privacy Policy or the way we handle your personal data, please contact us.</p>`;
                content.dataset.lang = "en";
                button.innerText = "Dịch Tiếng Việt";
            } else {
                content.innerHTML = `
                    <h1 class="text-primary text-center mb-4">Chính Sách Bảo Mật</h1>
                    <p>Chúng tôi cam kết bảo vệ thông tin cá nhân của bạn và tuân thủ các quy định pháp luật về bảo mật dữ liệu. Chính sách bảo mật này giải thích cách chúng tôi thu thập, sử dụng và bảo vệ thông tin của bạn.</p>
                    <h2 class="mt-3">1. Thông Tin Thu Thập</h2>
                    <p>Chúng tôi có thể thu thập các loại thông tin sau:</p>
                    <ul>
                        <li><strong>Thông tin cá nhân:</strong> Họ tên, địa chỉ email, số điện thoại</li>
                    </ul>
                    <h2 class="mt-3">2. Cách Chúng Tôi Sử Dụng Thông Tin Của Bạn</h2>
                    <p>Chúng tôi sử dụng thông tin cá nhân của bạn cho các mục đích sau:</p>
                    <ul>
                        <li><strong>Cung Cấp Dịch Vụ:</strong> Để cung cấp các sản phẩm và dịch vụ cho bạn.</li>
                        <li><strong>Hỗ Trợ Khách Hàng:</strong> Để phản hồi các câu hỏi và cung cấp hỗ trợ khách hàng.</li>
                    </ul>
                    <h2 class="mt-3">3. Cách Chúng Tôi Bảo Vệ Thông Tin Của Bạn</h2>
                    <p>Chúng tôi áp dụng các biện pháp kỹ thuật và tổ chức phù hợp để bảo vệ thông tin cá nhân của bạn khỏi truy cập trái phép, sử dụng hoặc tiết lộ.</p>
                    <h2 class="mt-3">4. Quyền Của Bạn</h2>
                    <p>Bạn có quyền truy cập, sửa chữa và xóa thông tin cá nhân của mình. Bạn cũng có thể phản đối hoặc hạn chế việc xử lý thông tin cá nhân của mình.</p>
                    <h2 class="mt-3">5. Liên Hệ Với Chúng Tôi</h2>
                    <p>Vui lòng liên hệ với chúng tôi nếu bạn có bất kỳ câu hỏi nào về Chính Sách Bảo Mật này hoặc cách chúng tôi xử lý dữ liệu cá nhân của bạn.</p>`;
                content.dataset.lang = "vi";
                button.innerText = "Translate to English";
            }
        }
    </script>
    <!-- Spinner -->
    <div id="spinner" 
         class="d-flex justify-content-center align-items-center position-fixed w-100 vh-100 bg-white top-0 start-0">
        <div class="spinner-border text-primary" role="status"></div>
    </div>

    <!-- Navbar start -->
    <?php include 'common/navbar.php' ?>
    <!-- Navbar End -->

    <!-- Content -->
    <div class="container py-5 mt-5">
        <div id="content" data-lang="vi" class="bg-white p-4 rounded shadow-sm">
            <h1 class="text-primary text-center mb-4">Chính Sách Bảo Mật</h1>
            <p>Chúng tôi cam kết bảo vệ thông tin cá nhân của bạn và tuân thủ các quy định pháp luật về bảo mật dữ liệu. Chính sách bảo mật này giải thích cách chúng tôi thu thập, sử dụng và bảo vệ thông tin của bạn.</p>
            <h2 class="mt-3">1. Thông Tin Thu Thập</h2>
            <p>Chúng tôi có thể thu thập các loại thông tin sau:</p>
            <ul>
                <li><strong>Thông tin cá nhân:</strong> Họ tên, địa chỉ email, số điện thoại</li>
            </ul>
            <h2 class="mt-3">2. Cách Chúng Tôi Sử Dụng Thông Tin Của Bạn</h2>
            <p>Chúng tôi sử dụng thông tin cá nhân của bạn cho các mục đích sau:</p>
            <ul>
                <li><strong>Cung Cấp Dịch Vụ:</strong> Để cung cấp các sản phẩm và dịch vụ cho bạn.</li>
                <li><strong>Hỗ Trợ Khách Hàng:</strong> Để phản hồi các câu hỏi và cung cấp hỗ trợ khách hàng.</li>
            </ul>
            <h2 class="mt-3">3. Cách Chúng Tôi Bảo Vệ Thông Tin Của Bạn</h2>
            <p>Chúng tôi áp dụng các biện pháp kỹ thuật và tổ chức phù hợp để bảo vệ thông tin cá nhân của bạn khỏi truy cập trái phép, sử dụng hoặc tiết lộ.</p>
            <h2 class="mt-3">4. Quyền Của Bạn</h2>
            <p>Bạn có quyền truy cập, sửa chữa và xóa thông tin cá nhân của mình. Bạn cũng có thể phản đối hoặc hạn chế việc xử lý thông tin cá nhân của mình.</p>
            <h2 class="mt-3">5. Liên Hệ Với Chúng Tôi</h2>
            <p>Vui lòng liên hệ với chúng tôi nếu bạn có bất kỳ câu hỏi nào về Chính Sách Bảo Mật này hoặc cách chúng tôi xử lý dữ liệu cá nhân của bạn.</p>
        </div>
        <div class="text-center mt-4">
            <button id="translateBtn" class="btn btn-primary" onclick="translateContent()">Translate to English</button>
        </div>
    </div>

    <?php include 'common/footer.php'; ?>



    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/easing/easing.min.js"></script>
    <script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/waypoints/waypoints.min.js"></script>
    <script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/lightbox/js/lightbox.min.js"></script>
    <script src="http://localhost:8080/IS207-SOLITEA/src/app/public/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="http://localhost:8080/IS207-SOLITEA/src/app/public/js/main.js"></script>
</body>

</html>
