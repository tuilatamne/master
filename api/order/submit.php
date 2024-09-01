<?php
session_start();

require_once '../../config.php';
require_once '../../source/session.php';
require_once '../../source/database.php';
require_once '../../source/function.php';

$db = new Database();
$f = new func();

$filterAll = $f->filter();
$matp = $filterAll['tinh'];
$maqh = $filterAll['huyen'];
$xaid = $filterAll['xa'];

// Lấy địa chỉ đặt hàng
$tinh_info = $db->oneRaw("SELECT * FROM tinhthanhpho WHERE matp = '$matp'")['name'];
$huyen_info = $db->oneRaw("SELECT * FROM quanhuyen WHERE maqh = '$maqh'")['name'];
$xa_info = $db->oneRaw("SELECT * FROM xaphuongthitran WHERE xaid = '$xaid'")['name'];
$address = $filterAll['address'] . ', ' . $xa_info . ', ' . $huyen_info . ', ' . $tinh_info;


// Tạo code cho đơn hàng
do
{
    $code = $f->generateOrderCode();
    $code_status = $db->oneRaw("SELECT code FROM orders WHERE code = '$code'");
} while ($code_status);


// Tạo mới đơn hàng, thêm thông tin khách hàng vào bảng order
$order_insert = [
    'code' => $code,
    'fullname' => $filterAll['fullname'],
    'phone_number' => $filterAll['phone_number'],
    'address' => $address,
    'total_price' => $filterAll['total_price']
];
$db->insert('orders', $order_insert);


// Duyệt qua giỏ hàng và thêm từng sản phẩm đã chọn bảng order_detail
foreach ($_SESSION['cart'] as $item)
{
    if ($item['status'] == true)
    {
        $item_insert = [
            'order_id' => $code,
            'product_id' => $item['id'],
            'quantity' => $item['quantity'],
            'price' => $item['price']
        ];
        $db->insert('order_details', $item_insert);
        unset($_SESSION['cart'][$item['id']]);
    }
}
// trả về trang chủ và thông báo đã đặt thành công
setFlashData('order_status', true);
$f->redirect('../../?order_status=success');
