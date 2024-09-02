<?php
// Lấy ID
$id = $func->filter()['id'];
// Lấy dữ liệu bảng orders
$order = $db->oneRaw("SELECT * FROM orders WHERE id = '$id'");
$code = $order['code'];
// Xoá bảng order_details
$db->delete('order_details', "code = '$code'");
// Xoá bảng orders
$db->delete('orders', "id = '$id'");
setFlashData('smg', 'Đã xoá thành công đơn hàng');
$func->redirect('?com=order&act=list');