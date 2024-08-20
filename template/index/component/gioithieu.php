<?php
$gioithieu_desc = $db->oneRaw("SELECT * FROM news WHERE type = 'gioi-thieu-index'")['content'];
$gioithieu_desc_bottom = $db->oneRaw("SELECT * FROM news WHERE type = 'gioi-thieu-index-bottom'")['content'];
$gioithieu_image = $db->oneRaw("SELECT * FROM images WHERE type = 'gioi-thieu'")['image'];

?>
<section id="gioithieu">
    <div class="wrap-content gioithieu-component row">
        <div class="col-md-6 gioithieu-box-info">
            <p class="text-doinetne">Đôi Lời Về</p>
            <h2 class="gioithieu-company_name"><?= $setting_info[0]['setting_value'] ?></h2>
            <div class="gioithieu-desc"><?= $gioithieu_desc ?></div>
            <div class="gioithieu-desc-bottom"><?= $gioithieu_desc_bottom ?></div>
            <div class="d-flex">
                <a href="#" class=" btn-timhieuthem">
                    <span>TÌM HIỂU THÊM</span>
                    <img src="assets/images/page/arow.svg">
                </a>
                <div class="header-tel-box ms-5">
                    <div class="icon-phone">
                        <img src="assets/images/page/icon-phone.svg"
                            onerror="this.src='assets/images/noimage/noimage.png'">
                    </div>
                    <div class="d-flex flex-column justify-content-evenly ms-2">
                        <span class="header-hotline-title fst-italic">Hotline 24/7</span>
                        <span
                            class="header-hotline-content"><?= $f->formatPhoneNumber($setting_info[2]['setting_value']) ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="gioithieu-box-image p-4">
                <img src="assets/images/upload/<?= $gioithieu_image ?>">
            </div>
        </div>
    </div>
</section>