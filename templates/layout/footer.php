<div class="footer">
    <div class="footer-article">
        <div class="wrap-content padding-top-bottom d-flex flex-wrap justify-content-between">
            <div class="footer-news">
                <p class="name-company"><?= $footer['name' . $lang] ?></p>
                <div class="footer-info"><?= $func->decodeHtmlChars($footer['content' . $lang]) ?></div>
                <ul class="social social-footer list-unstyled d-flex align-items-center ">
                    <?php foreach ($social as $k => $v) { ?>
                        <li class="d-inline-block align-top">
                            <a href="<?= $v['link'] ?>" target="_blank">
                                <img class="lazy" data-src="<?= THUMBS ?>/30x30x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="footer-news">
                <p class="footer-title"><?= chinhsach ?></p>
                <ul class="footer-ul d-flex flex-wrap justify-content-between">
                    <?php foreach ($policy as $v) { ?>
                        <li><a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="footer-news">
                <p class="footer-title">Fanpage facebook</p>
                <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
            </div>
        </div>
    </div>
 
    <div class="footer-powered">
        <div class="wrap-content">
            <div class="footer-copyright">Hotline: <?= $optsetting['hotline']?> </div>
        </div>
    </div>
    <?= $addons->set('footer-map', 'footer-map', 6); ?>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<?php if ($com != 'gio-hang') { ?>
    <div>
        <a class="cart-fixed text-decoration-none" href="gio-hang" title="Giỏ hàng">
            <i class="bi bi-cart3"></i>
            <span class="count-cart"><?= (!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0 ?></span>
        </a>
    </div>
<?php } ?>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>