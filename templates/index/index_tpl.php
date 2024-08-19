<?php if (count($brand)) { ?>
    <div class="wrap-brand padding-top-bottom">
        <div class="wrap-content">
            <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:10,screen:425|items:3|margin:10,screen:575|items:4|margin:10,screen:767|items:4|margin:10,screen:991|items:4|margin:20,screen:1199|items:4|margin:20" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-brand">
                <?php foreach ($brand as $v) { ?>
                    <div>
                        <a class="brand text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <img class="w-100 lazy" onerror="this.src='<?= THUMBS ?>/300x240x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/300x240x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" />
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="control-brand control-owl transition"></div>
        </div>
    </div>
<?php } ?>

<?php if (count($productHot)) { ?>
    <div class="wrap-product wrap-content">
        <div class="title-main"><span>Best Seller</span></div>
        <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:3|margin:10,screen:991|items:4|margin:20,screen:1199|items:4|margin:20" data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="500" data-autoplaytimeout="3500" data-dots="0" data-nav="0" data-navcontainer="">
            <?php foreach ($productHot as $k => $v) { ?>
                <div class="box-product">
                    <div class="pro-cus">
                        <div class="pic-product">
                            <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/246x369x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/246x369x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>

                        </div>
                        <?php if (!empty($v['photo1'])) { ?>
                            <div class="pic-product2">
                                <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                    <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/246x369x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/246x369x1/<?= UPLOAD_PRODUCT_L . $v['photo1'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                    <p class="price-product">
                        <?php if ($v['discount']) { ?>
                            <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
                            <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
                            <span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
                        <?php } else { ?>
                            <span class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                        <?php } ?>
                    </p>
                    <p class="cart-product d-flex flex-wrap justify-content-between">
                        <span class="cart-add addcart transition" data-id="<?= $v['id'] ?>" data-action="addnow"><?= themvaogiohang ?></span>
                        <span class="cart-buy addcart transition" data-id="<?= $v['id'] ?>" data-action="buynow"><?= muangay ?></span>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<?php if (count($proListHot)) { ?>
    <?php foreach ($proListHot as $vlist) { ?>
        <div class="wrap-product wrap-content">
            <div class="title-main"><span><?= $vlist['name' . $lang] ?></span></div>
            <div class="paging-product-category paging-product-category-<?= $vlist['id'] ?>" data-list="<?= $vlist['id'] ?>">
            </div>
        </div>
    <?php } ?>
<?php } ?>
<?php if (count($newsHot)) { ?>
    <div class="wrap-newsnb padding-top-bottom">
        <div class="wrap-content">
            <p class="title-main"><span>Lifestyle</span></p>
            <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:10,screen:425|items:2|margin:10,screen:575|items:2|margin:10,screen:767|items:3|margin:10,screen:991|items:3|margin:20,screen:1199|items:3|margin:20" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="300" data-autoplayspeed="500" data-autoplaytimeout="3500" data-dots="0" data-nav="0" data-navcontainer=".control-news">
                <?php foreach ($newsHot as $k => $v) { ?>
                    <div class="item-newsnb">
                        <p class="pic-newsnb">
                            <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/420x288x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/420x288x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                        </p>
                        <div class="info-newsnb">
                            <h3 class="mb-0">
                                <a class="name-newsnb text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                            </h3>
                            <p class="time-newshome"><?= ngaydang ?>: <?= date("d/m/Y", $v['date_created']) ?></p>
                            <p class="desc-newsnb text-split"><?= $v['desc' . $lang] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="control-news control-owl transition"></div>
        </div>
    </div>
<?php } ?>

<?php if (count($thuvienanh)) { ?>
    <div class="wrap-thuvienanh padding-top-bottom">
        <div class="wrap-content">
            <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:10,screen:425|items:3|margin:10,screen:575|items:4|margin:10,screen:767|items:4|margin:10,screen:991|items:4|margin:10,screen:1199|items:4|margin:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-partner">
                <?php foreach ($thuvienanh as $v) { ?>
                    <div>
                        <a class="thuvienanh" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                            <img class="w-100 lazy" onerror="this.src='<?= THUMBS ?>/246x369x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/246x369x1/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" />
                        </a>
                        <div class="name-thuvienanh">
                            <?= $v['name' . $lang] ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="control-partner control-owl transition"></div>
        </div>
    </div>
<?php } ?>