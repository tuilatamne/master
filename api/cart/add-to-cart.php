<?php
session_start();

require_once '../../config.php';
require_once '../../source/database.php';

$db = new Database();

// Lấy id
$product_id = $_POST['id'];



// Kiểm tra trong giỏ hàng có sản phẩm chưa
// Nếu có tăng số lượng
// Nếu không có thì truy vấn database lấy thông tin sản phẩm rồi thêm vào giỏ hàng
// Trả về số lượng sản phẩm trong giỏ hàng