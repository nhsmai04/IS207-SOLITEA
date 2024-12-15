<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.delete-item-btn', function() {
        const deleteId = $(this).data('id');

        // Gửi yêu cầu AJAX
        $.ajax({
            url: '<?= BASE_URL ?>/cart/deletecart',
            type: 'POST',
            data: {
                delete_id: deleteId
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Xóa item khỏi giao diện
                    $(`.delete-item-btn[data-id="${deleteId}"]`).closest('tr').remove(); // hoặc xóa item từ DOM
                    updateCartTotal()
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('Có lỗi xảy ra khi xử lý yêu cầu.');
            }
        });
    });


    // Hàm tăng giảm số lượng sản phẩm

    // Xử lý sự kiện tăng số lượng
    $(document).on('click', '.add-quantity-btn', function() {
        var button = $(this);
        var input = button.closest('.input-group').find('input');
        console.log(input.val());
        var currentQuantity = parseInt(input.val()) || 0; // Đảm bảo là số
        console.log(currentQuantity);
        var newQuantity = currentQuantity;

        // Gửi yêu cầu AJAX để cập nhật số lượng
        $.ajax({
            url: '<?= BASE_URL ?>/cart/updatecart',
            type: 'POST',
            data: {
                id: button.data('id'),
                quantity: newQuantity
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    input.val(newQuantity); // Cập nhật giá trị input

                    var price = button.closest('tr').find('td:nth-child(3)').text().replace(/[^0-9]/g, ''); // Lấy giá trị cột giá từng sản phẩm (bỏ 'đ' và dấu ',')
                    var subtotal = newQuantity * parseFloat(price); // Tính tổng giá trị từng sản phẩm
                    button.closest('tr').find('td:nth-child(5)').html('<p class="mb-0 mt-4">' + new Intl.NumberFormat('vi-VN').format(subtotal) + 'đ');
                    updateCartTotal(); // Cập nhật tổng giỏ hàng
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('Có lỗi xảy ra khi xử lý yêu cầu.');
            }
        });
    });

    // Xử lý sự kiện giảm số lượng
    $(document).on('click', '.sub-quantity-btn', function() {
        var button = $(this);
        var input = button.closest('.input-group').find('input');
        var currentQuantity = parseInt(input.val()) || 0; // Đảm bảo là số
        var newQuantity = (currentQuantity > 1) ? currentQuantity : 1; // Không giảm dưới 1

        // Gửi yêu cầu AJAX để cập nhật số lượng
        $.ajax({
            url: '<?= BASE_URL ?>/cart/updatecart',
            type: 'POST',
            data: {
                id: button.data('id'),
                quantity: newQuantity
            },
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    input.val(newQuantity); // Cập nhật giá trị input

                    // Cập nhật tổng giá trị từng sản phẩm
                    var price = button.closest('tr').find('td:nth-child(3)').text().replace(/[^0-9]/g, ''); // Lấy giá trị cột giá từng sản phẩm (bỏ 'đ' và dấu ',')
                    var subtotal = newQuantity * parseFloat(price); // Tính tổng giá trị từng sản phẩm

                    button.closest('tr').find('td:nth-child(5)').html('<p class="mb-0 mt-4">' + new Intl.NumberFormat('vi-VN').format(subtotal) + 'đ'); // Cập nhật giá trị cột tổng giá trị từng sản phẩm
                    updateCartTotal(); // Cập nhật tổng giỏ hàng
                } else {
                    alert(response.message);
                }
            },
            error: function() {
                alert('Có lỗi xảy ra khi xử lý yêu cầu.');
            }
        });
    });



    // Hàm tính lại tổng giá trị giỏ hàng
    function updateCartTotal() {
        let total = 0;
        $('tr').each(function() {
            const subtotalText = $(this).find('td:nth-child(5)').text().replace(/[^0-9]/g, ''); // Lấy giá trị cột tổng giá trị từng sản phẩm (bỏ 'đ' và dấu ',')
            const subtotal = parseFloat(subtotalText) || 0; // Chuyển đổi sang số
            total += subtotal;
        });
        $('.cart-total').text(new Intl.NumberFormat('vi-VN').format(total) + 'đ');
    }
</script>



<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Navbar start -->
<div class="container-fluid fixed-top">
    <div class="container topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2">
                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">123 Street, New York</a></small>
                <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">Email@Example.com</a></small>
            </div>
            <div class="top-link pe-2">
                <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
            </div>
        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="index.html" class="navbar-brand">
                <h1 class="text-primary display-6">Fruitables</h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.html" class="nav-item nav-link">Home</a>

                    <a href="shop-detail.html" class="nav-item nav-link">Shop Detail</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                            <a href="cart.html" class="dropdown-item active">Cart</a>
                            <a href="chackout.html" class="dropdown-item">Chackout</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-flex m-3 me-0">
                    <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                    <a href="#" class="position-relative me-4 my-auto">
                        <i class="fa fa-shopping-bag fa-2x"></i>
                        <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                    </a>
                    <a href="#" class="my-auto">
                        <i class="fas fa-user fa-2x"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
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
    <h1 class="text-center text-white display-6">Cart</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Cart</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Cart Page Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Products</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['shoppingcart'])) {
                        $total = 0;
                        foreach ($_SESSION['shoppingcart'] as $key => $value) {
                            $sub_total = $value['Price'] * $value['Quantity'];
                            $total += $sub_total;
                    ?>

                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="<?= htmlspecialchars($value['Image']) ?>" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4"><?= htmlspecialchars($value['Name']) ?></p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4" id="product_price"><?= htmlspecialchars($value['Price']) ?></p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4" style="width: 150px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-minus rounded-circle bg-light border sub-quantity-btn" data-id="<?= htmlspecialchars($value['Id']) ?>">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" min="1" class="w-50 form-control form-control-sm text-center border-0" name="qty[<?php echo $value['Id'] ?>]" value="<?= htmlspecialchars($value['Quantity']) ?>" id="qty-<?= htmlspecialchars($value['Id']) ?>" readonly>
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-plus rounded-circle bg-light border add-quantity-btn" data-id="<?= htmlspecialchars($value['Id']) ?>">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                                </td>
                                <td>
                                    <p class="mb-0 mt-4"><?php echo number_format($sub_total, 0, ',', '.') . 'đ'  ?></p>
                                </td>
                                <td>
                                    <input type="hidden" name="delete_id" value="<?= htmlspecialchars($value['Id']) ?>">
                                    <button type="submit" class="btn btn-md rounded-circle bg-light border mt-4 delete-item-btn" data-id="<?= htmlspecialchars($value['Id']) ?>">
                                        <i class="fa fa-times text-danger"></i>
                                    </button>
                                </td>


                            </tr>
                    <?php
                        }
                    }
                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">
                            <div class="d-flex justify-content-start">
                                <a href="<?php echo BASE_URL ?>/index" class="btn border-secondary rounded-pill px-4 py-3 text-primary">Continue Shopping</a>
                            </div>
                </tfoot>
            </table>
        </div>
        <div class="mt-5">
            <input type="text" class="border-0 border-bottom rounded me-5 py-3 mb-4" placeholder="Coupon Code">
            <button class="btn border-secondary rounded-pill px-4 py-3 text-primary" type="button">Apply Coupon</button>
        </div>
        <div class="row g-4 justify-content-end">
            <div class="col-8"></div>
            <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                <div class="bg-light rounded">
                    <div class="p-4">
                        <h1 class="display-6 mb-4">Cart <span class="fw-normal">Total</span></h1>
                        <div class="d-flex justify-content-between mb-4">
                            <h5 class="mb-0 me-4">Subtotal:</h5>
                            <p class="mb-0 cart-total"><?php echo number_format($total, 0, ',', '.') . 'đ'  ?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-0 me-4">Shipping</h5>
                            <div class="">
                                <p class="mb-0">Flat rate: $3.00</p>
                            </div>
                        </div>
                        <p class="mb-0 text-end">Shipping to Ukraine.</p>
                    </div>
                    <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                        <h5 class="mb-0 ps-4 me-4">Total</h5>
                        <p class="mb-0 pe-4 cart-total"><?php echo number_format($total, 0, ',', '.') . 'đ'  ?></p>
                    </div>
                    <button class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4" type="button">Proceed Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Page End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
            <div class="row g-4">
                <div class="col-lg-3">
                    <a href="#">
                        <h1 class="text-primary mb-0">Fruitables</h1>
                        <p class="text-secondary mb-0">Fresh products</p>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative mx-auto">
                        <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                        <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Subscribe Now</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex justify-content-end pt-3">
                        <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Why People Like us!</h4>
                    <p class="mb-4">typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                    <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Shop Info</h4>
                    <a class="btn-link" href="">About Us</a>
                    <a class="btn-link" href="">Contact Us</a>
                    <a class="btn-link" href="">Privacy Policy</a>
                    <a class="btn-link" href="">Terms & Condition</a>
                    <a class="btn-link" href="">Return Policy</a>
                    <a class="btn-link" href="">FAQs & Help</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex flex-column text-start footer-item">
                    <h4 class="text-light mb-3">Account</h4>
                    <a class="btn-link" href="">My Account</a>
                    <a class="btn-link" href="">Shop details</a>
                    <a class="btn-link" href="">Shopping Cart</a>
                    <a class="btn-link" href="">Wishlist</a>
                    <a class="btn-link" href="">Order History</a>
                    <a class="btn-link" href="">International Orders</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-light mb-3">Contact</h4>
                    <p>Address: 1429 Netus Rd, NY 48247</p>
                    <p>Email: Example@gmail.com</p>
                    <p>Phone: +0123 4567 8910</p>
                    <p>Payment Accepted</p>
                    <img src="img/payment.png" class="img-fluid" alt="">
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
                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 my-auto text-center text-md-end text-white">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->



<!-- Back to Top -->
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->