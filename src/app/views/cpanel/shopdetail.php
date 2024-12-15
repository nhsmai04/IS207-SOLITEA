<?php
// Thông tin kết nối cơ sở dữ liệu
$id = isset($_GET['id']) ? intval($_GET['id']) : 1;
$host = 'localhost';
$dbname = 'pdo_is207';
$username = 'root';
$password = '';

try {
    // Kết nối cơ sở dữ liệu MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Truy vấn lấy hình ảnh với id = 1
    
    $stmtImage = $pdo->prepare("SELECT * FROM product WHERE id = :id");
    $stmtImage->execute(['id' => $id]);
    $product = $stmtImage->fetch(PDO::FETCH_ASSOC);
    
    if (!$product) {
        die("Không tìm thấy sản phẩm với id = 1");
    }

    // Truy vấn lấy tất cả các thể loại duy nhất
    $stmtCategory = $pdo->prepare("SELECT category FROM product");
    $stmtCategory->execute();
    
    // Lấy kết quả
    $categories = $stmtCategory->fetchAll(PDO::FETCH_ASSOC);

    // Tạo một mảng chỉ chứa giá trị category
    $categoryValues = array_column($categories, 'category');

    // Đếm số lần xuất hiện của từng thể loại
    $categoryCount = array_count_values($categoryValues);

    $categoryList = array_keys($categoryCount);
    
    // Lấy tất cả sản phẩm
    $stmtAllProduct = $pdo->prepare("SELECT * FROM product");
    $stmtAllProduct->execute();
    $allProduct = $stmtAllProduct->fetchAll(PDO::FETCH_ASSOC);

     // Lấy category của sản phẩm có id = :id
     $category = $product['Category'];

     // Truy vấn lấy tất cả các sản phẩm có cùng category
     $stmtCategoryProducts = $pdo->prepare("SELECT * FROM product WHERE category = :category");
     $stmtCategoryProducts->execute(['category' => $category]);
 
     // Lấy kết quả các sản phẩm có cùng category
     $categoryProducts = $stmtCategoryProducts->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Kết nối cơ sở dữ liệu thất bại: " . $e->getMessage());
}

?>
<div class="home-header">
    <!-- Navbar start -->
    <!-- <div class="container-fluid fixed-top">
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
                    <h1 class="text-primary display-6">SOLI TEA</h1>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="shopdetail" class="nav-item nav-link">Shop Detail</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                <a href="cart.html" class="dropdown-item">Cart</a>
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
    </div> -->
    <!-- Navbar End -->
</div>
<div class="shopdetail">
    <div class="breadcumb">
        <div class="title">
            <h1>Shop Detail</h1>
            <div><a href="index"> Home </a> / <a href="#"> Pages </a> / <span> Shopdetail </span></div>
        </div>
    </div>
    <div class="container">
        <div class="product-info">
            <div class="content">
                <div class="img-des">
                    <img src="<?php echo $product['Image']; ?>" alt="Product Image">
                    <div class="des">
                        <h3><?php echo $product['Name']?></h3>
                        <p>Loại: <?php echo $product['Category']?></p>
                        <p><?php echo $product['Price']?> VND</p>
                        <p><?php echo $product['Description']?></p>
                        <div class="quantity_selector">
                        <span>+</span>
                        <span class="quantity">1</span>
                        <span>-</span>
                    </div>
                    <div class="add_to_cart">
                        <p><img src="http://localhost:8080/IS207-SOLITEA/src/Assets/shopdetail/cart.png" alt="">Add to cart</p>
                    </div>
                    </div>
                    
                </div>
                <div class="des-rev">
                    <div class="header"><hr><div><p class="activated">Mô tả</p><p>Đánh giá</p></div></div>
                    <div class="des">
                        <p><?php echo $product['Description']?></p>
                        <table>
                            <tr>
                                <td>Khối lượng</td>
                                <td>1 kg</td>
                            </tr>
                            <tr>
                                <td>Nguồn gốc xuất xứ</td>
                                <td>Việt Nam</td>
                            </tr>
                            <tr>
                                <td>Chất lượng</td>
                                <td>100% Hữu cơ</td>
                            </tr>
                            <tr>
                                <td>Trình trạng</td>
                                <td>Tươi tốt</td>
                            </tr>
                            <tr>
                                <td>Khối lượng tối thiểu</td>
                                <td>250 Kg</td>
                            </tr>
                        </table>
                        </div>
                    </div>
                    <div class="reply-form">
                    <h3>Bình luận</h3>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Họ Tên *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="review">Nội Dung *</label>
                            <textarea id="review" name="review" required></textarea>
                        </div>
                        <div><div class="form-group">
                            <label for="rating">Đánh giá:</label>
                            <div class="rating">
                                <input type="radio" id="star5" name="rating" value="5">
                                <label for="star5">&#9733;</label>
                                <input type="radio" id="star4" name="rating" value="4">
                                <label for="star4">&#9733;</label>
                                <input type="radio" id="star3" name="rating" value="3">
                                <label for="star3">&#9733;</label>
                                <input type="radio" id="star2" name="rating" value="2">
                                <label for="star2">&#9733;</label>
                                <input type="radio" id="star1" name="rating" value="1">
                                <label for="star1">&#9733;</label>
                            </div>
                        </div>
                        <button type="submit" class="submit-btn">Gửi</button></div>
                    </form>
                </div>
                </div>
            </div>
            <div class="sidebar">
                <div class="categories">
                    <h3>Các loại rau quả khác</h3>
                    <?php
                    // Kiểm tra nếu mảng $categories có ít nhất 5 phần tử
                    if (count($categoryList) >= 5) {
                        // Chọn 5 thể loại ngẫu nhiên từ mảng $categoryList
                        $randomCategories = array_rand($categoryList, 5);
                        
                        // Nếu array_rand chỉ trả về 1 giá trị, chuyển nó thành mảng
                        if (!is_array($randomCategories)) {
                            $randomCategories = [$randomCategories];
                        }
                        
                        // In ra các thể loại ngẫu nhiên kèm theo số lần xuất hiện
                        foreach ($randomCategories as $key) {
                            $category = $categoryList[$key];
                            $count = $categoryCount[$category];
                            echo "<div class=\"category\"><span>$category</span> <span>($count)</span></div>";
                        }
                    } else {
                        // Nếu số lượng thể loại ít hơn 5, in tất cả kèm theo số lần xuất hiện
                        foreach ($categoryList as $category) {
                            $count = $categoryCount[$category];
                            echo "<div class=\"category\"><span>$category</span> <span>($count)</span></div>";
                        }
                    }
                    ?>
                    </div>
                <div class="featured">
                    <h3>Sản phẩm nổi bật</h3>
                    <?php
                    $randomKeys = array_rand($allProduct, 5); // Chọn 5 chỉ mục ngẫu nhiên
                    $featuredProducts = [];
                    foreach ($randomKeys as $key) {
                        $featuredProducts[] = $allProduct[$key];
                    }
                    
                    foreach ($featuredProducts as $item) {
                        echo "<div class='product' onclick=\"window.location.href='shopdetail?id=" . $item['Id'] . "'\">";
                        echo "<img src='" . $item['Image'] . "' alt='Product Image'>";
                        echo "<div> <h5>" . htmlspecialchars($item['Name']) . "</h5>";
                        echo "<span>Price: " . htmlspecialchars($item['Price']) . "</span> </div>";
                        echo "</div>";
                    }
                    ?>
                    <p class="view_more">Xem Thêm</p>
                </div>
                <div class="banner">
                    <img src="https://themewagon.github.io/fruitables/img/banner-fruits.jpg" alt="">
                    <div><p>Xanh</p><p>Tươi</p><p>Tốt</p></div>
                </div>
            </div>
        </div>
        <div class="related">
            <div class="title">
                <h1>Sản phẩm liên quan</h1>
                <div class="related_slide_btn">
                    <span><</span>
                    <span>></span>
                </div>
            </div>
            <div class="related_products">
                <div class="product-wrapper">
                <?php
                    foreach($categoryProducts as $itemm){
                        echo "<div class='product' onclick=\"window.location.href='shopdetail?id=" . $itemm['Id'] . "'\">";
                        echo "<img src='" . $itemm['Image'] . "' alt='Product Image'>";
                        echo "<div> <h3>" . htmlspecialchars($itemm['Name']) . "</h3>";
                        echo "<p>" . htmlspecialchars($itemm['Description']) . "</p>";
                        echo "<h3>" . htmlspecialchars($itemm['Price']) . "</h3>";
                        echo "<div class='add_to_cart'>
                                    <p><img src='http://localhost:8080/IS207-SOLITEA/src/Assets/shopdetail/cart.png' alt=''>Add to cart</p>
                              </div>";
                        echo "</div>";  // Đóng div bên trong
                        echo "</div>";  // Đóng div product    
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="home-footer">    <!-- Footer Start -->
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
            <!-- Footer End --></div>