<div class="google-map pb-5 pb-md-0">
</div>
<div class="d-md-none position-fixed bottom-0 start-0 end-0">
    <div class="p-2">
        <a href="https://zalo.me/<?= $setting_info[3]['setting_value'] ?>"><img style="width: 50px; height: 50px ;"
                src="assets/images/page/zalo.png"></a>
    </div>
    <div class="row bg-primary py-3">
        <div class="col d-flex flex-column align-items-center">
            <a class="text-center text-decoration-none text-white" href="tel:<?= $setting_info[2]['setting_value'] ?>">
                <i class="fa-solid fa-phone fs-5"></i>
                <p class="m-0 mt-2">Gọi ngay</p>
            </a>
        </div>
        <div class="col d-flex flex-column align-items-center">
            <a class="text-center text-decoration-none text-white" href="sms:<?= $setting_info[2]['setting_value'] ?>">
                <i class="fa-regular fa-message fs-5"></i>
                <p class="m-0 mt-2">Nhắn tin</p>
            </a>
        </div>
        <div class="col d-flex flex-column align-items-center">
            <a class="text-center text-decoration-none text-white" href="<?= $setting_info[7]['setting_value'] ?>">
                <i class="fa-brands fa-facebook-messenger fs-5"></i>
                <p class="m-0 mt-2">Facebook</p>
            </a>
        </div>
        <div class="col d-flex flex-column align-items-center">
            <a class="text-center text-decoration-none text-white" target="_blank"
                href="<?= $setting_info[7]['setting_value'] ?>">
                <i class="fa-solid fa-map-location-dot fs-5"></i>
                <p class="m-0 mt-2">Chỉ đường</p>
            </a>
        </div>

    </div>
</div>