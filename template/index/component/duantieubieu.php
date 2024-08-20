<?php
$duantieubieu = $db->getRaw("SELECT * FROM news WHERE type = 'du-an-tieu-bieu'");
?>
<section id="duantieubieu">
    <div class="wrap-content duantieubieu-component">
        <p class="d-none">DỰ ÁN TIÊU BIỂU</p>
        <div class="title-component">
            <img src="assets/images/page/danhmucleft.svg">
            <span>DỰ ÁN TIÊU BIỂU</span>
            <img src="assets/images/page/danhmucright.svg">
        </div>
        <p class="title-desc-component w-75 mx-auto">Sản phẩm được sử dụng trong nhiều khách sạn & khu nghỉ dưỡng.
            Hãy cùng xem các sản phẩm cao cấp được thiết kế & kết hợp để mang đến một gian nhà tắm giãn & đẳng cấp</p>
        <div class="slide-duan">
            <!-- <?php foreach ($duantieubieu as $duan): ?>
                <div class="duan-box-image">
                    <img src="assets/images/upload/<?= $duan['image'] ?>" alt="<?= $duan['title'] ?>">
                </div>
                <div class="slide-duan-info">
                    <div class="d-flex align-items-center">
                        <img src="assets/images/page/icon-calendar.svg">
                        <span class="slider-duan-info-date"><?= $duan['create_at'] ?></span>
                    </div>
                    <p class="slide-duan-info-title"><?= $duantieubieu[0]['title'] ?></p>
                    <p class="slide-duan-info-desc"><?= $duantieubieu[0]['description'] ?></p>
                </div>
            <?php endforeach; ?> -->
            <div class="duan-box-image">
                <img class="mx-auto" style="width: 500px;" src="assets/images/upload/<?= $duantieubieu[0]['image'] ?>"
                    alt="<?= $duantieubieu[0]['title'] ?>">
            </div>
            <div class="slide-duan-info">
                <div class="d-flex align-items-center">
                    <img src="assets/images/page/icon-calendar.svg">
                    <span class="slider-duan-info-date"><?= $duantieubieu[0]['create_at'] ?></span>
                </div>
                <p class="slide-duan-info-title"><?= $duantieubieu[0]['title'] ?></p>
                <p class="slide-duan-info-desc"><?= $duantieubieu[0]['description'] ?></p>
            </div>
        </div>

    </div>
</section>