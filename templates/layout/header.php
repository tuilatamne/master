<div class="head">
    <div class="head-top">
        <div class="wrap-content d-flex flex-wrap justify-content-between align-items-center ">
            <p class="slogan-head mb-0 ">
                <marquee><?= $slogan['name' . $lang] ?></marquee>
            </p>
            <div class=" d-flex align-items-center ">
                <?php if (array_key_exists($loginMember, $_SESSION) && $_SESSION[$loginMember]['active'] == true) { ?>
                    <div class="user-head">
                        <a href="account/thong-tin">
                            <span>Hi, <?= $_SESSION[$loginMember]['username'] ?></span>
                        </a>
                        <a href="account/dang-xuat">
                            <i class="fas fa-sign-out-alt"></i>
                            <span><?= dangxuat ?></span>
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="user-head">
                        <a href="account/dang-nhap">
                            <i class="fas fa-sign-in-alt"></i>
                            <span><?= dangnhap ?></span>
                        </a>
                        <a href="account/dang-ky">
                            <i class="fas fa-user-plus"></i>
                            <span><?= dangky ?></span>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="head-bottom text-center">
        <div class="wrap-content">
            <div class="logo">
                <a class="logo-head" href="">
                    <img class="lazy" onerror="this.src='<?= THUMBS ?>/492x161x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/492x161x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" alt="logo" title="logo" />
                </a>
            </div>
        </div>
    </div>
</div>