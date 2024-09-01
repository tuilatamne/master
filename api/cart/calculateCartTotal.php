<?php
session_start();

require_once '../../source/function.php';

$f = new func();

$total = 0;
foreach ($_SESSION['cart'] as $item)
{
    // Nếu status = true thì mới cộng
    if ($item['status'])
    {
        // Nhân giá sản phẩm với số lượng và cộng vào tổng
        $total += $item['price'] * $item['quantity'];
    }
}
echo json_encode([
    'total' => $total,
    'format_total' => $f->format_tiente($total) . 'đ'
]);
