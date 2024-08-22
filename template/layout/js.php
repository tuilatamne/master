<script type="text/javascript" src="assets/slick/slick/slick.js"></script>
<script type="text/javascript" src="assets/slick/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js"></script>

<script>
    $('.slide-duan').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>
<script>
    $('.slide-quangcao').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: true
    });
</script>
<script>
    $('.sanpham-list').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>

<script>
    $('.tieuchi-list').slick({
        autoplay: true,  // Tự động chạy
        autoplaySpeed: 2000, // Chạy mỗi 2 giây
        arrows: false,   // Ẩn nút điều hướng
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 768, // Màn hình nhỏ hơn 768px (sm)
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 992, // Màn hình nhỏ hơn 992px (md)
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 1200, // Màn hình lớn hơn 1200px (lg)
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });
</script>
<script>
    $(document).ready(function () {
        var $slickSlider = $('.slide1');

        $slickSlider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false, // Bỏ các nút điều hướng bên dưới
            arrows: false,
        });

        // Kích hoạt hiệu ứng khi slide thay đổi
        $slickSlider.on('afterChange', function (event, slick, currentSlide) {
            var $currentSlide = $(slick.$slides.get(currentSlide));
            var $img = $currentSlide.find('img');
            var effectClass = $img.attr('class').split(' ').filter(function (cls) {
                return cls.startsWith('animate__');
            })[0];

            // Xóa và thêm lại lớp để kích hoạt lại hiệu ứng
            $img.removeClass(effectClass).addClass(effectClass);
        });
    });
</script>