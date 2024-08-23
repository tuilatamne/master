<?php
$title = 'Catalogue';
$active = $url;
$catalogue_list = $db->getRaw("SELECT * FROM files");
if (empty($catalogue_list))
{
    setFlashData('smg', 'Nội dung chưa cập nhật');
    setFlashData('smg_type', 'danger');
}
$smg = getFlashData('smg');
$smg_type = getFlashData('smg_type');
?>
<div class="py-3 bg-light">
    <div class="wrap-content px-3">
        <a style="font-size: 14px;" class="text-decoration-none" href="./">Trang chủ</a>
        <span style="font-size: 14px;"> / Catalogue</span>
    </div>
</div>
<div class="wrap-content my-4 px-3">
    <h2 class="title-lienhe">Catalogue</h2>
    <?php
    if (!empty($smg))
    {
        $f->getSmg($smg, $smg_type);
    } ?>
    <?php foreach ($catalogue_list as $catalogue): ?>
        <div class="row py-3 px-2 bg-secondary-subtle rounded mb-2">
            <div class="col align-items-center">
                <i style="color: #00a651; font-size: 18px;" class="fa-solid fa-file-pdf"></i>
            </div>
            <div class="col pt-1">
                <a target="_blank" class="text-decoration-none fw-bold text-danger"
                    href="upload/file/<?= $catalogue['filename'] ?>"><?= $catalogue['filename'] ?></a>
            </div>
            <div class="col d-flex justify-content-end">
                <i style="color: #00a651; font-size: 18px;" class="fa-solid fa-download"></i>
            </div>
        </div>
    <?php endforeach; ?>
</div>