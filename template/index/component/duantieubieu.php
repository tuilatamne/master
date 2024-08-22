<?php
$duantieubieu = $db->getRaw("SELECT * FROM news WHERE type = 'du-an-tieu-bieu'");
?>
<section id="duantieubieu">
    <div class="wrap-content duantieubieu-component mt-5">
        <p class="d-none">DỰ ÁN TIÊU BIỂU</p>
        <div class="title-component">
            <img src="assets/images/page/danhmucleft.svg">
            <span>DỰ ÁN TIÊU BIỂU</span>
            <img src="assets/images/page/danhmucright.svg">
        </div>
        <div class="slide-duan mt-4">
            <?php foreach ($duantieubieu as $duan): ?>
                <div class="duan-item-box">
                    <div class="duan-item-component">
                        <img class="duan-item-image" src="assets/images/upload/<?= $duan['image'] ?>">
                        <div class="duan-item-content">
                            <p class="duan-item-title"><?= $duan['title'] ?></p>
                            <div class="d-flex align-items-center justify-content-between w-100">
                                <span class="duan-item-date"><?= $duan['create_at'] ?></span>
                                <a class="duan-item-link" href="<?= $duan['slug'] ?>">Xem thêm -></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>