<?php
$logo = $db->oneRaw("SELECT * FROM images WHERE type = 'logo'")['image'];
?>


<header id="header">
    <div class="header-layout wrap-content flex-column flex-md-row">
        <div class="header-left">
            <a href="./">
                <img style="width: 277px; height: 76px;" src="assets/images/upload/<?= $logo ?>" alt="logo">
            </a>
        </div>
        <div class="header-right">
            <div class="header-right-top">
                <div class="search-container">
                    <input type="text" placeholder="Tìm kiếm sản phẩm bạn cần">
                    <button>
                        <img src="assets/images/page/icon-search.svg" class="me-1">
                        <span style="padding-top: 2px;">Search</span>
                    </button>
                </div>
                <div class="header-tel-box d-none d-md-flex">
                    <div class="icon-call">
                        <img src="assets/images/page/Vector.svg" onerror="this.src='assets/images/noimage/noimage.png'">
                    </div>
                    <div class="d-flex flex-column justify-content-evenly ms-2">
                        <span class="header-hotline-title">Hotline 24/7</span>
                        <span class="header-hotline-content">(+84)
                            <?= $f->formatPhoneNumber($setting_info[2]['setting_value']) ?></span>
                    </div>
                </div>
            </div>
            <div class="header-right-bottom d-none d-md-block">
                <nav class="menu-box">
                    <ul class="menu-list">
                        <li class="menu-item"><a href="./"><img src="assets/images/page/home-icon.svg"></a></li>
                        <li class="menu-item"><a class="menu-link <?= $url == 'gioi-thieu' ? 'active' : '' ?>"
                                href="gioi-thieu">GIỚI THIỆU</a></li>
                        <li class="menu-item"><a class="menu-link mucsanpham <?= $url == 'san-pham' ? 'active' : '' ?>"
                                href="san-pham">SẢN PHẨM</a></li>
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