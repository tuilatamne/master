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
$address = $filterAll['address'] . ', ' . $tinh_info . ', ' . $huyen_info . ', ' . $xa_info;


// Tạo mới đơn hàng, thêm thông tin khách hàng vào bảng order
$order_insert = [
    'code' => '',
    'fullname' => $filterAll['fullname'],
    'phone_number' => $filterAll['phone_number'],

];


// Duyệt qua giỏ hàng và thêm từng sản phẩm đã chọn bảng order_detail
foreach ($_SESSION['cart'] as $item)
{
    if ($item['status'] == true)
    {
        $item_insert = [
            'id' => $item['id'],
            'quantity' => $item['quantity'],
            'price' => $item['price']
        ];
    }
}
// trả về trang chủ và thông báo đã đặt thành công
setFlashData('order_status', true);
$f->redirect('../../?order_status=success');

echo '<pre>';
print_r($filterAll);
print_r($_SESSION['cart']);
echo '</pre>';