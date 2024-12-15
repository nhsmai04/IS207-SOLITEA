$(document).ready(function() {
    const prevBtn = $('.related_slide_btn span:first-child');
    const nextBtn = $('.related_slide_btn span:last-child');
    const productWrapper = $('.product-wrapper'); // Dùng jQuery thay cho document.querySelector

    let offset = 0;
    const productWidth = $('.product').outerWidth(true); // Dùng jQuery để tính chiều rộng, bao gồm margin

    prevBtn.on('click', function() {
        if (offset > 0) {
            offset -= productWidth;
            productWrapper.css('transform', `translateX(-${offset}px)`); // Dùng jQuery thay cho style.transform
        }
        else{
            offset = 0
            productWrapper.css('transform', `translateX(-${offset}px)`);
        }
        console.log(offset);
    });

    nextBtn.on('click', function() {
        const maxOffset = productWrapper.outerWidth() - 1300 ; // Lấy chiều rộng của wrapper
        if (offset < maxOffset) {
            offset += 325;
            productWrapper.css('transform', `translateX(-${offset}px)`); // Dùng jQuery thay cho style.transform
        }
        console.log(offset);
    });
});
