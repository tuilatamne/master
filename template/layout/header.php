<?php
$logo = $db->oneRaw("SELECT * FROM images WHERE type = 'logo'")['image'];
$phone_number = $f->formatPhoneNumber($setting_info[2]['setting_value']);
$cap1 = $db->getRaw('SELECT * FROM product_types');
?>


<header id="header">
    <div class="header-layout wrap-content flex-column flex-md-row">
        <div class="header-left logo-image">
            <a href="./">
                <img style="width: 277px; height: 76px;" src="assets/images/upload/<?= $logo ?>" alt="logo">
            </a>
        </div>
        <div class="header-right">
            <div class="header-right-top">
                <form action="./" method="get" class="form-search">
                    <div class="search-container">
                        <input name="timkiem" type="text" placeholder="Tìm kiếm sản phẩm bạn cần">
                        <button type="submit">
                            <img src="assets/images/page/icon-search.svg" class="me-sm-1">
                            <span class="d-none d-sm-inline" style="padding-top: 2px;">Search</span>
                        </button>
                    </div>
                </form>
                <a href="./gio-hang" class="text-decoration-none">
                    <div class="cart-icon border rounded-circle">
                        <i style="color: var(--primary-color);" class="fa-solid fa-cart-shopping"></i>
                        <span class="number-of-cart">4</span>
                    </div>
                </a>
                <div class="header-tel-box d-none d-md-flex">
                    <div class="icon-call">
                        <img src="assets/images/page/Vector.svg" onerror="this.src='assets/images/noimage/noimage.png'">
                    </div>
                    <div class="d-flex flex-column justify-content-evenly ms-2">
                        <span class="header-hotline-title">Hotline 24/7</span>
                        <span class="header-hotline-content" id="phone-number">(+84) <?= $phone_number ?></span>
                    </div>
                </div>
            </div>
            <div class="header-right-bottom d-none d-md-block">
                <nav class="menu-box">
                    <ul class="menu-list">
                        <li class="menu-item"><a href="./"><img src="assets/images/page/home-icon.svg"></a></li>
                        <li class="menu-item"><a class="menu-link <?= $url == 'gioi-thieu' ? 'active' : '' ?>"
                                href="gioi-thieu">GIỚI THIỆU</a></li>
                        <li id="sanpham-header" class="menu-item position-relative"><a
                                class="menu-link mucsanpham <?= $url == 'san-pham' ? 'active' : '' ?>"
                                href="san-pham">SẢN PHẨM</a>
                            <div id="cap1" class="cap1 shadow-lg d-none">
                                <ul>
                                    <?php foreach ($cap1 as $product_type): ?>
                                        <li class="dropdown-item"><a
                                                href="<?= $product_type['slug'] ?>"><?= $product_type['title'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item"><a class="menu-link <?= $url == 'du-an' ? 'active' : '' ?>"
                                href="du-an">DỰ ÁN</a></li>
                        <li class="menu-item"><a class="menu-link <?= $url == 'catalogue' ? 'active' : '' ?>"
                                href="catalogue">CATALOGUE</a></li>
                        <li class="menu-item"><a class="menu-link <?= $url == 'tin-tuc' ? 'active' : '' ?>"
                                href="tin-tuc">TIN TỨC</a></li>
                        <li class="menu-item"><a class="menu-link <?= $url == 'tuyen-dung' ? 'active' : '' ?>"
                                href="tuyen-dung">TUYỂN DỤNG</a></li>
                        <li class="menu-item"><a class="menu-link <?= $url == 'lien-he' ? 'active' : '' ?>"
                                href="lien-he">LIÊN HỆ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- menu mobile -->
<div id="header-mobile" class="d-md-none">
    <button class="btn ms-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
        aria-controls="offcanvasExample">
        <i class="fa-solid fa-bars text-white fs-2 pt-1"></i>
    </button>

    <div class="offcanvas offcanvas-start custom-theme-mobile" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white fw-bold" id="offcanvasExampleLabel">Danh mục</h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="menu-mobile">
                <li>
                    <a <?= $url == '' ? 'class="yellow"' : '' ?> href="./">TRANG CHỦ</a>
                </li>
                <li>
                    <a <?= $url == 'gioi-thieu' ? 'class="yellow"' : '' ?> href="gioi-thieu">GIỚI THIỆU</a>
                </li>
                <li>
                    <a <?= $url == 'san-pham' ? 'class="yellow"' : '' ?> href="san-pham">SẢN PHẨM</a>
                </li>
                <li>
                    <a <?= $url == 'du-an' ? 'class="yellow"' : '' ?> href="du-an">DỰ ÁN</a>
                </li>
                <li>
                    <a <?= $url == 'catalogue' ? 'class="yellow"' : '' ?> href="catalogue">CATALOGUE</a>
                </li>
                <li>
                    <a <?= $url == 'tin-tuc' ? 'class="yellow"' : '' ?> href="tin-tuc">TIN TỨC</a>
                </li>
                <li>
                    <a <?= $url == 'tuyen-dung' ? 'class="yellow"' : '' ?> href="tuyen-dung">TUYỂN DỤNG</a>
                </li>
                <li>
                    <a <?= $url == 'lien-he' ? 'class="yellow"' : '' ?> href="lien-he">LIÊN HỆ</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var timeout;

        // Khi hover vào #sanpham-header hoặc #cap1
        $('#sanpham-header, #cap1').hover(
            function () {
                // Clear timeout nếu đang tồn tại
                clearTimeout(timeout);
                // Hiển thị #cap1
                $('#cap1').removeClass('d-none');
            },
            function () {
                // Đặt timeout để add class sau 1 giây nếu không hover vào gì cả
                timeout = setTimeout(function () {
                    $('#cap1').addClass('d-none');
                }, 100);
            }
        );
    });
</script>