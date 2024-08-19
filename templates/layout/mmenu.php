<div class="menu-res">
    <div class="menu-bar-res d-flex align-items-center justify-content-between ">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="search-res">
            <p class="icon-search transition"><i class="bi bi-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="<?= nhaptukhoatimkiem ?>" onkeypress="doEnter(event,'keyword-res');" value="<?= (!empty($_GET['keyword'])) ? $_GET['keyword'] : "" ?>" />
                <p onclick="onSearch('keyword-res');"><i class="bi bi-search"></i></p>
            </div>
        </div>
    </div>
    <nav id="menu">
        <>
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
    </nav>
</div>