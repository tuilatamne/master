<?php
$danhmucnoibat = $db->getRaw("SELECT * FROM product_types WHERE noibat = '1'");
?>
<section id="sanphamnoibat">
    <?php foreach ($danhmucnoibat as $danhmuc): ?>
        <div class="wrap-content sanphamnoibat-component">
            <p class="d-none"><?= $danhmuc['title'] ?></p>
            <div class="title-component">
                <img src="assets/images/page/danhmucleft.svg">
                <span><?= $danhmuc['title'] ?></span>
                <img src="assets/images/page/danhmucright.svg">
            </div>
            <p class="title-desc-component">Uy Tín - Chất Lượng - Giá Cả Cạnh Tranh</p>
            <div class="sanpham-list">
                <?php
                $id = $danhmuc['id'];
                $sanphamnoibat = $db->getRaw("SELECT * FROM products WHERE product_type_id = '$id' AND noibat = '1'");
                foreach ($sanphamnoibat as $sanpham): ?>
                    <div class="sanpham-box">
                        <a class="text-decoration-none" href="<?= $sanpham['slug'] ?>">
                            <div class="sanpham-item">
                                <div class="sanpham-item-image-box sanpham-sale">
                                    <img class="sanpham-item-image" src="assets/images/upload/<?= $sanpham['image'] ?>"
                                        alt="<?= $sanpham['title'] ?>">
                                </div>
                                <p class="sanpham-item-title"><?= $sanpham['title'] ?></p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="giagoc"><?= $f->format_tiente($sanpham['original_price']) ?>đ</span>
                                    <span class="discount"><?= $f->format_tiente($sanpham['price']) ?>đ</span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>