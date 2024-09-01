<?php
$order_status = getFlashData('order_status');
if (isset($order_status) && $order_status): ?>
    <div class="py-3 bg-light">
        <div class="wrap-content px-3">
            <a style="font-size: 14px;" class="text-decoration-none" href="./">Trang chủ</a>
            <span style="font-size: 14px;"> / Giỏ hàng</span>
        </div>
    </div>
    <div class="wrap-content my-5 px-3">
        <div class="bg-light shadow p-5 d-flex flex-column align-items-center justify-content-center">
            <p class="text-dathang-success fs-3 text-success fw-bold">Đặt hàng thành công</p>
            <a href="./" class="btn btn-success btn-lg">Về trang chủ</a>
        </div>
    </div>
<?php else:
    $f->redirect('./');
endif;