<?php
$list_qc = $db->getRaw("SELECT * FROM images WHERE type = 'quang-cao'");
?>
<section id="quangcao">
    <div class="slide-quangcao">
        <?php foreach ($list_qc as $qc): ?>
            <div class="quangcao-item-box-image">
                <img src="assets/images/upload/<?= $qc['image'] ?>">
            </div>
        <?php endforeach; ?>
    </div>
</section>