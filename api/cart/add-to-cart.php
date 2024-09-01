<?php
session_start();

require_once '../../config.php';
require_once '../../source/database.php';

$db = new Database();

// Lấy ID sản phẩm từ yêu cầu Ajax
$id = intval($_POST['id']);

// Kiểm tra xem giỏ hàng đã tồn tại chưa, nếu chưa thì khởi tạo giỏ hàng
if (!isset($_SESSION['cart']))
{
    $_SESSION['cart'] = [];
}

// Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
if (isset($_SESSION['cart'][$id]))
{
    // Nếu sản phẩm đã tồn tại trong giỏ hàng, trả về false và tổng số sản phẩm trong giỏ hàng
    echo json_encode([
        'success' => false,
        'total_items' => count($_SESSION['cart']),
    ]);
} else
{
    // Nếu sản phẩm chưa có trong giỏ hàng, truy vấn database để lấy thông tin sản phẩm
    $product = $db->oneRaw("SELECT * FROM products WHERE id = '$id'");

    if ($product)
    {
        // Thêm sản phẩm vào giỏ hàng
        $_SESSION['cart'][$id] = [
            'id' => $product['id'],
            'title' => $product['title'],
            'original_price' => $product['original_price'],
            'price' => $product['price'],
            'quantity' => 1, // Bạn có thể đặt số lượng mặc định là 1 hoặc lấy từ yêu cầu Ajax
            'image' => $product['image'],
            'status' => true
        ];

        // Trả về kết quả thành công
        echo json_encode([
            'success' => true,
            'total_items' => count($_SESSION['cart']),
        ]);
    }
}
