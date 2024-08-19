<?php
$tieuchi_list = $db->getRaw("SELECT * FROM news WHERE type LIKE 'tieu-chi%'");
// echo '<pre>';
// print_r($tieuchi_list);
// echo '</pre>';
?>
<section id="tieuchi">
    <div class="tieuchi-component wrap-content">
        <div class="tieuchi-list">
            <?php foreach ($tieuchi_list as $tieuchi): ?>
                <div class="d-flex align-items-center justify-content-center">
                    <div class="tieuchi-item-box">
                        <img class="tieuchi-item-image" onerror="this.src='assets/images/noimage/noimage.png'"
                            src="assets/images/upload/<?= $tieuchi['image'] ?>">
                        <div class="tieuchi-item-box-info ms-3">
                            <span class="tieuchi-item-title"><?= $tieuchi['title'] ?></span>
                            <span class="tieuchi-item-desc"><?= $tieuchi['description'] ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>