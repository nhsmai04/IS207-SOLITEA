<!DOCTYPE html>
<html lang="en">
    <?php include 'common/head.php'; ?>

    <body>

         <!-- Spinner Start -->
         <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <?php include 'common/navbar.php'; ?>


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
            <h1 class="text-center text-white display-6">Phản hồi từ người dùng</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Phản hồi từ người dùng</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Tastimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="testimonial-header text-center">
                    <h4 class="text-primary">Đánh giá của khách hàng</h4>
                    <h1 class="display-5 mb-5 text-dark">Hãy nghe khách hàng của chúng tôi nói!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Tôi đặc biệt yêu thích các combo rau củ theo mùa của trang web này. Chất lượng rau sạch, an toàn và giao hàng tận nơi đúng hẹn. Đây chắc chắn là lựa chọn hàng đầu cho gia đình tôi khi mua thực phẩm!
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="https://scontent.fsgn2-11.fna.fbcdn.net/v/t39.30808-6/463436921_3921738364776615_7783033439288454104_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeED6xXW85xVQq-6EgF2jXakrRSSd97pZuitFJJ33ulm6PQJjyr9GZJsEfrSAT3WinucrG_Dyg1IslTbnkMsByU8&_nc_ohc=FZe1JLY6IusQ7kNvgHtRc5D&_nc_zt=23&_nc_ht=scontent.fsgn2-11.fna&_nc_gid=AlQs92MdM2J0AX6ARzyHlPj&oh=00_AYByODqEKPAbfroZZI5DRbpmnvqErDtJIiUlvtUQtHboBw&oe=67661F59" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Phúc Thần Đấu La</h4>
                                    <p class="m-0 pb-3">Khách hàng</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Tôi rất bất ngờ vì dịch vụ chuyên nghiệp và giá cả hợp lý. Trang web dễ sử dụng, có nhiều loại rau củ đa dạng và nguồn gốc rõ ràng. Tôi sẽ tiếp tục ủng hộ và giới thiệu cho bạn bè!
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="https://scontent.fsgn2-10.fna.fbcdn.net/v/t39.30808-6/431701505_2441670242887725_3640497792473001986_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeFnIy2J52hQ6FHSi5NlA90JWyV7Rql3rS9bJXtGqXetL-JK67xTvxCxbi4ozYlD5fkAR-vehy_JmftClhx8C1Ji&_nc_ohc=aG1wm9iSUewQ7kNvgHR31M_&_nc_zt=23&_nc_ht=scontent.fsgn2-10.fna&_nc_gid=AEHGm_u5oAHdq-ypZilnrFk&oh=00_AYCn-HTu2acri6ICFbmKXh9T0Z_b1XDhCr5KnbzffMcWgQ&oe=67661AC6" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Nguyên Đẹp Trai</h4>
                                    <p class="m-0 pb-3">Người dùng chuyên nghiệp</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">Tôi rất hài lòng với chất lượng rau củ ở đây. Sản phẩm luôn tươi ngon, được đóng gói cẩn thận và giao hàng nhanh chóng. Nhờ trang web này, tôi không cần ra chợ mà vẫn có rau sạch cho cả gia đình mỗi ngày!
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="https://scontent.fsgn2-7.fna.fbcdn.net/v/t39.30808-6/431394578_3745391395744647_2313674848929706111_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=bd9a62&_nc_eui2=AeF40MsA3ZkM_mOH93HxF4ogyDXOWD6Xqb3INc5YPpepvbQA084KviXHnrFuWpwZmNA8P1Gzl4YBX61KgML_CGkN&_nc_ohc=9LZVDnf1smMQ7kNvgGAyzdd&_nc_zt=23&_nc_ht=scontent.fsgn2-7.fna&_nc_gid=A_eGmAmyEVIT2xaY4gIIe9C&oh=00_AYAG4_2kBGyrZrH1KjiI9qNOtcW7oQ44_vKSaYO_4_z1Hg&oe=67663BDB" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Đỗ Nguyễn Vợ Nguyên</h4>
                                    <p class="m-0 pb-3">Nhà nội trợ cao cấp</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->


        <?php include 'common/footer.php'; ?>



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>