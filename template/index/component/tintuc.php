<?php
$tintuc_list = $db->getRaw("SELECT * FROM news WHERE type = 'tin-tuc'");
$list_video = $db->getRaw("SELECT * FROM images WHERE type = 'video'");
?>
<section id="tintuc">
    <div class="wrap-content tintuc-component">
        <p class="d-none">TIN TỨC & VIDEO LIÊN QUAN</p>
        <div class="title-component">
            <img src="assets/images/page/danhmucleft.svg">
            <span>TIN TỨC & VIDEO LIÊN QUAN</span>
            <img src="assets/images/page/danhmucright.svg">
        </div>
        <div class="row" style="padding: 54px 0;">
            <div class="col-md-6">
                <?php foreach ($tintuc_list as $index => $tintuc): ?>
                    <div class="row tintuc-item-row">
                        <?php if ($index % 2 == 0): ?>
                            <div class="col-5">
                                <img src="assets/images/upload/<?= $tintuc['image'] ?>" alt="<?= $tintuc['title'] ?>">
                            </div>
                            <div class="col-7 py-2">
                                <p class="tintuc-item-title"><?= $tintuc['title'] ?></p>
                                <p class="tintuc-item-desc"><?= $tintuc['description'] ?></p>
                                <div class="d-flex">
                                    <img src="assets/images/page/icon-tintuc.svg">
                                    <span class="tintuc-item-date"><?= $tintuc['create_at'] ?></span>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-7 py-2">
                                <p class="tintuc-item-title"><?= $tintuc['title'] ?></p>
                                <p class="tintuc-item-desc"><?= $tintuc['description'] ?></p>
                                <div class="d-flex">
                                    <img src="assets/images/page/icon-tintuc.svg">
                                    <span class="tintuc-item-date"><?= $tintuc['create_at'] ?></span>
                                </div>
                            </div>
                            <div class="col-5">
                                <img src="assets/images/upload/<?= $tintuc['image'] ?>" alt="<?= $tintuc['title'] ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-6">
                <?php
                foreach ($list_video as $video): ?>
                    <iframe class="w-100 h-100"
                        src="https://www.youtube.com/embed/<?= $f->getYouTubeVideoId($video['link']) ?>" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>