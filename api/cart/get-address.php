<?php


require_once '../../config.php';
require_once '../../source/database.php';
require_once '../../source/function.php';


$db = new Database();
$f = new func();


if ($f->isPOST()):
    $filterAll = $f->filter();
    $yeucau = $filterAll['yeucau'];
    $id = $filterAll['id'];
    ?>
    <?php
    // Lấy danh sách quận,huyện
    if ($yeucau == 'huyen'):
        $danhsachhuyen = $db->getRaw("SELECT * FROM quanhuyen WHERE matp = '$id'"); ?>
        <option value="">Chọn Quận/Huyện</option>
        <?php foreach ($danhsachhuyen as $huyen): ?>
            <option value="<?= $huyen['maqh'] ?>"><?= $huyen['name'] ?></option>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php
    // Lấy danh sách phường, xã
    if ($yeucau == 'xa'):
        $danhsachxa = $db->getRaw("SELECT * FROM xaphuongthitran WHERE maqh = '$id'"); ?>
        <option value="">Chọn Phường/Xã</option>
        <?php foreach ($danhsachxa as $xa): ?>
            <option value="<?= $xa['xaid'] ?>"><?= $xa['name'] ?></option>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>