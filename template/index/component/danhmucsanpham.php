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
                        <img src="assets/images/upload/<?= $danhmuc['image'] ?>" alt="<?= $danhmuc['title'] ?>">
                    </div>
                    <span class="danhmuc-item-title"><?= $danhmuc['title'] ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>