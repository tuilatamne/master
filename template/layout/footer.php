<?php
$chinhsach_list = $db->getRaw("SELECT * FROM news WHERE type = 'chinh-sach'");
?>
<footer id="footer">
    <div class="footer-component">
        <div class="wrap-content">
            <p class="d-none"><?= $setting_info[0]['setting_value'] ?></p>
            <div class="title-component">
                <img src="assets/images/page/danhmucleft.svg">
                <span class="text-white"><?= $setting_info[0]['setting_value'] ?></span>
                <img src="assets/images/page/danhmucright.svg">
            </div>
            <div class="footer-content row">
                <div class="col-md-5 col-12 px-2">
                    <p class="footer-title">THÔNG TIN LIÊN HỆ</p>
                    <ul class="info-list">
                        <li class="info-item">
                            <div class="cirle-icon-footer">
                                <img src="assets/images/page/icon-footer-home.svg">
                            </div>
                            <span class="item-footer-span"><?= $setting_info[0]['setting_value'] ?></span>
                        </li>
                        <li class="info-item">
                            <div class="cirle-icon-footer">
                                <img src="assets/images/page/icon-footer-locaion.svg">
                            </div>
                            <span class="item-footer-span"><?= $setting_info[6]['setting_value'] ?></span>
                        </li>
                        <li class="info-item">
                            <div class="cirle-icon-footer">
                                <img src="assets/images/page/icon-footer-call.svg">
                            </div>
                            <span
                                class="item-footer-span"><?= $f->formatPhoneNumber($setting_info[2]['setting_value']) ?></span>
                        </li>
                        <li class="info-item">
                            <div class="cirle-icon-footer">
                                <img src="assets/images/page/icon-footer-email.svg">
                            </div>
                            <span class="item-footer-span"><?= $setting_info[1]['setting_value'] ?></span>
                        </li>
                        <li class="info-item">
                            <div class="cirle-icon-footer">
                                <img src="assets/images/page/icon-footer-website.svg">
                            </div>
                            <span class="item-footer-span"><?= $http . $_SERVER['HTTP_HOST'] ?></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-12 px-2">
                    <p class="footer-title">CHÍNH SÁCH</p>
                    <ul class="chinhsach-list">
                        <?php foreach ($chinhsach_list as $chinhsach): ?>
                            <li class="chinhsach-item">
                                <a href="<?= $chinhsach['slug'] ?>">» <?= $chinhsach['title'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-md-4 col-12 px-2">
                    <p class="footer-title">THEO DÕI CHÚNG TÔI</p>
                    <div class="fb-page" data-href="<?= $setting_info[4]['setting_value'] ?>" data-tabs="timeline"
                        data-width="405" data-height="222" data-small-header="false" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="<?= $setting_info[4]['setting_value'] ?>" class="fb-xfbml-parse-ignore"><a
                                href="<?= $setting_info[4]['setting_value'] ?>">Facebook</a></blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="google-map">
    <?= $setting_info[8]['setting_value'] ?>
</div>
<div class="copyright">
    <p>Copyright © <span style="font-weight: 500;"><?= $setting_info[0]['setting_value'] ?></span> - 2024.</p>
</div>
<div class="d-md-none position-fixed bottom-0 start-0 end-0">
    <div class="p-2">
        <a href="https://zalo.me/<?= $setting_info[3]['setting_value'] ?>"><img style="width: 50px; height: 50px ;"
                src="assets/images/page/zalo.png"></a>
    </div>
    <div class="row bg-primary py-3">
        <div class="col d-flex flex-column align-items-center">
            <a class="text-center text-decoration-none text-white" href="tel:<?= $setting_info[2]['setting_value'] ?>">
                <i class="fa-solid fa-phone fs-5"></i>
                <p class="m-0 mt-2">Gọi ngay</p>
            </a>
        </div>
        <div class="col d-flex flex-column align-items-center">
            <a class="text-center text-decoration-none text-white" href="sms:<?= $setting_info[2]['setting_value'] ?>">
                <i class="fa-regular fa-message fs-5"></i>
                <p class="m-0 mt-2">Nhắn tin</p>
            </a>
        </div>
        <div class="col d-flex flex-column align-items-center">
            <a class="text-center text-decoration-none text-white" href="<?= $setting_info[7]['setting_value'] ?>">
                <i class="fa-brands fa-facebook-messenger fs-5"></i>
                <p class="m-0 mt-2">Facebook</p>
            </a>
        </div>
        <div class="col d-flex flex-column align-items-center">
            <a class="text-center text-decoration-none text-white" target="_blank"
                href="<?= $setting_info[7]['setting_value'] ?>">
                <i class="fa-solid fa-map-location-dot fs-5"></i>
                <p class="m-0 mt-2">Chỉ đường</p>
            </a>
        </div>

    </div>
</div>