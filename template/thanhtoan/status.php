<?php
if ($order_status): ?>
    <h2>Đặt hàng thành công</h2>
    <?php
    $order_status = !$order_status;
else:
    $f->redirect('./');
endif;