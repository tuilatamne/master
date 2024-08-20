<?php
$danhmucnoibat = $db->getRaw("SELECT * FROM product_types WHERE slug = 'bon-cau'OR slug='lavabo'");
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
                $sanphamnoibat = $db->getRaw("SELECT * FROM products WHERE product_type_id = '$id'");
                foreach ($sanphamnoibat as $sanpham): ?>
                    <div class="sanpham-item">
                        <div class="sanpham-item-image-box">
                            <img src="assets/images/upload/<?= $sanpham['image'] ?>" alt="<?= $sanpham['title'] ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>