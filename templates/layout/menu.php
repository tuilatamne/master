<div class="w-menu">
    <div class="menu">
        <div class="wrap-content">
            <ul class="menu-main">
                <li><a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="" title="<?= trangchu ?>"><?= trangchu ?></a></li>

                <li><a class="<?php if ($com == 'gioi-thieu') echo 'active'; ?> transition" href="gioi-thieu" title="<?= gioithieu ?>"><?= gioithieu ?></a></li>

                <li>
                    <?php if (count($productListMenu)) { ?>
                        <?php foreach ($productListMenu as $klist => $vlist) {
                            $productCatMenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                <li>
                    <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                </li>
            <?php } ?>
        <?php } ?>
        </li>
        <li><a class="<?php if ($com == 'thu-vien-anh') echo 'active'; ?> transition" href="thu-vien-anh" title="Bộ sưu tập">Bộ sưu tập</a></li>
        <li>
            <a class="has-child <?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="Lifestyle">Lifestyle</a>
        </li>

        <li><a class="<?php if ($com == 'tuyen-dung') echo 'active'; ?> transition" href="tuyen-dung" title="<?= tuyendung ?>"><?= tuyendung ?></a></li>



        <li class="">
            <div class="search w-clear">
                <input type="text" id="keyword" placeholder="<?= nhaptukhoatimkiem ?>" onkeypress="doEnter(event,'keyword');" value="<?= (!empty($_GET['keyword'])) ? $_GET['keyword'] : '' ?>" />
                <p onclick="onSearch('keyword');"><i class="bi bi-search"></i></p>
            </div>
        </li>
        </ul>
        </div>
    </div>
    <?php include TEMPLATE . LAYOUT . "mmenu.php"; ?>
</div>