<?php
$active = 'san-pham';
if (!empty($type_id))
{
    $sql = "SELECT * FROM products WHERE product_type_id = '$type_id'";
} else
{
    $sql = 'SELECT * FROM products';
}
$list_sanpham = $db->getRaw($sql);
if (empty($list_sanpham))
{
    setFlashData('smg', 'Nội dung đang được cập nhật');
    setFlashData('smg_type', 'danger');
}
if (isset($search_status) && $search_status)
{
    if (!empty($list_result))
    {
        $list_sanpham = $list_result;
    } else
    {
        $list_sanpham = [];
        setFlashData('smg', "Không có kết quả tìm kiếm cho $search_keyword");
        setFlashData('smg_type', 'danger');
    }
}



$smg = getFlashData('smg');
$smg_type = getFlashData('smg_type');
?>
<div class="py-3 bg-light">
    <div class="wrap-content px-3">
        <a style="font-size: 14px;" class="text-decoration-none" href="./">Trang chủ</a>
        <span style="font-size: 14px;"> / <?= empty($title) ? 'TẤT CẢ SẢN PHẨM' : $title ?></span>
    </div>
</div>
<div class="wrap-content my-4 px-3">
    <h2 class="title-lienhe"><?= empty($title) ? 'TẤT CẢ SẢN PHẨM' : $title ?></h2>
    <?php
    if (!empty($smg))
    {
        $f->getSmg($smg, $smg_type);
    } ?>
    <div class="row">
        <?php foreach ($list_sanpham as $sanpham): ?>
            <div class="col-6 col-sm-4 col-md-3 mb-4">
                <div class="sanpham-box">
                    <a class="text-decoration-none" href="<?= $sanpham['slug'] ?>">
                        <div class="sanpham-item">
                            <div class="sanpham-item-image-box sanpham-sale">
                                <img src="assets/images/upload/<?= $sanpham['image'] ?>" alt="<?= $sanpham['title'] ?>">
                            </div>
                            <p class="sanpham-item-title"><?= $sanpham['title'] ?></p>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="giagoc"><?= $sanpham['price'] ?></span>
                                <span class="discount"><?= $sanpham['discount'] ?></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>