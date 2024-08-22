<?php
$danhmuc_list = $db->getRaw("SELECT * FROM product_types");
?>
<section id="danhmucsanpham">
    <div class="danhmuc-component wrap-content">
        <p class="d-none">DANH MỤC SẢN PHẨM</p>
        <div class="title-component">
            <img src="assets/images/page/danhmucleft.svg">
            <span>DANH MỤC SẢN PHẨM</span>
            <img src="assets/images/page/danhmucright.svg">
        </div>
        <div class="danhmuc-list row">
            <?php foreach ($danhmuc_list as $danhmuc): ?>
                <div class="col-lg-2 col-md-3 col-4 danhmuc-item">
                    <div class="danhmuc-box-image">
                        <a class="d-flex align-items-center justify-content-center h-100 w-100"
                            href="<?= $danhmuc['slug'] ?>">
                            <img class="danhmuc-image" src="assets/images/upload/<?= $danhmuc['image'] ?>"
                                alt="<?= $danhmuc['title'] ?>">
                        </a>
                    </div>
                    <a style="padding-top: 20px;" class="text-decoration-none" href="<?= $danhmuc['slug'] ?>">
                        <span class="danhmuc-item-title"><?= $danhmuc['title'] ?></span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>