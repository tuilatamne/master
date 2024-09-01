<?php
$list_tinh = $db->getRaw('SELECT * FROM tinhthanhpho');
?>
<section id="cart">
    <div class="py-3 bg-light">
        <div class="wrap-content px-3">
            <a style="font-size: 14px;" class="text-decoration-none" href="./">Trang chủ</a>
            <span style="font-size: 14px;"> / Giỏ hàng</span>
        </div>
    </div>
    <div class="wrap-content my-4 px-3">
        <!-- <div class="title-main">
            <h2 class="title-lienhe">Giỏ hàng</h2>
        </div> -->
        <?php if (empty($_SESSION['cart'])): ?>
            <div class="alert alert-warning" role="alert">
                Giỏ hàng của bạn đang trống. Hãy chọn thêm <a href="san-pham" class="alert-link">sản phẩm</a> để mua sắm nhé
            </div>
        <?php else:
            // echo '<pre>';
            // print_r($_SESSION['cart']);
            // echo '</pre>';
            ?>
            <div class="row">
                <div class="col-md-7">
                    <p class="fs-4 fw-bold">Giỏ hàng</p>
                    <?php foreach ($_SESSION['cart'] as $cart): ?>
                        <div class="product-item row py-3 my-3 border shadow-sm rounded">
                            <div class="col-1">
                                <div class="d-flex h-100 flex-column justify-content-center align-items-center">
                                    <input data-id="<?= $cart['id'] ?>" style="cursor: pointer;" type="checkbox"
                                        class="check-status form-check-input" <?= $cart['status'] == true ? 'checked' : '' ?>>
                                </div>
                            </div>
                            <div class="col-2 px-0">
                                <img src="assets/images/upload/<?= $cart['image'] ?>"
                                    onerror="this.src='assets/images/noimage/noimage.png'">
                            </div>
                            <div class="col-7">
                                <div class="h-100 d-flex flex-column justify-content-around">
                                    <p class="sanpham-item-title text-start mt-0"><?= $cart['title'] ?></p>
                                    <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center  ">
                                        <span class="giagoc"><?= $f->format_tiente($cart['original_price']) ?>đ</span>
                                        <span class="discount ms-0 ms-md-2"><?= $f->format_tiente($cart['price']) ?>đ</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="h-100 d-flex flex-column justify-content-around align-items-end">
                                    <button class="btn-delete btn" data-id="<?= $cart['id'] ?>"><i
                                            class="fa-solid fa-trash-can text-danger"></i></button>
                                    <div class="d-flex">
                                        <button data-id="<?= $cart['id'] ?>" type="button"
                                            class="btn-decrease btn btn-outline-secondary btn-sm d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <input data-id="<?= $cart['id'] ?>" style="width: 50px;" type="number"
                                            class="input-quantity text-center form-control form-control-sm"
                                            value="<?= $cart['quantity'] ?>" min="1">
                                        <button data-id="<?= $cart['id'] ?>" type="button"
                                            class="btn-increase btn btn-outline-secondary btn-sm d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-plus fw-bold"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-5 ps-md-4">
                    <p class="fs-4 fw-bold">Thông tin thanh toán</p>
                    <div class="row border rounded py-3 shadow-sm">
                        <form action="api/order/submit.php" method="post" class="needs-validation" novalidate>
                            <div class="col-md-12 mb-3">
                                <label for="fullname" class="form-label fw-bold">Họ và tên:</label>
                                <input type="text" name="fullname" id="fullname" class="form-control" required>
                                <div class="invalid-feedback">
                                    Vui lòng nhập tên người nhận
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="phone_number" class="form-label fw-bold">Số điện thoại:</label>
                                <input type="number" name="phone_number" id="phone_number" class="form-control" required>
                                <div class="invalid-feedback">
                                    Vui lòng nhập số điện thoại
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="tinh" class="form-label fw-bold">Tỉnh, thành phố:</label>
                                <select name="tinh" id="tinh" class="form-select select2-diachi">
                                    <option value="">Chọn Tỉnh/Thành phố</option>
                                    <?php foreach ($list_tinh as $tinh): ?>
                                        <option value="<?= $tinh['matp'] ?>"><?= $tinh['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="huyen" class="form-label fw-bold">Quận, huyện:</label>
                                <select name="huyen" id="huyen" class="form-select" disabled>
                                    <option value="">Chọn Quận/Huyện</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="xa" class="form-label fw-bold">Phường, xã:</label>
                                <select name="xa" id="xa" class="form-select" disabled>
                                    <option value="">Chọn Phường/Xã</option>
                                </select>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="address" class="form-label fw-bold">Địa chỉ:</label>
                                <input type="text" name="address" id="address" class="form-control" required>
                                <div class="invalid-feedback">
                                    Vui lòng nhập địa chỉ
                                </div>
                            </div>
                            <div class="col-md-12 mb-3 d-flex align-items-center">
                                <span class="fw-bold fs-6">Tạm tính:</span>
                                <span id="tamtinh" class="discount"></span>
                                <input id="tamtinh-input" type="hidden">
                            </div>
                            <div class="col-md-12">
                                <p style="line-height: 1.5; font-size: 14px;"
                                    class="fw-bold fst-italic text-danger-emphasis mb-0">
                                    Sau khi
                                    tiến hành đặt hàng.
                                    Chúng tôi sẽ liên lạc quý
                                    khách qua số
                                    điện thoại để hỗ trợ tất cả về đơn hàng.</p>
                                <button type="submit" class="w-100 btn btn-success fw-bold">Đặt hàng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- Hàm validate cho form -->
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
<!-- Hàm lấy địa danh sách tỉnh, huyện, xã -->
<script>
    $("#tinh").change(function () {
        var tinhid = $(this).val();
        if (tinhid) {
            $.ajax({
                url: 'api/cart/get-address.php',
                type: 'POST',
                data: {
                    yeucau: 'huyen',
                    id: tinhid
                },
                success: function (response) {
                    $('#huyen').html(response).prop('disabled', false);
                }
            });
        } else {
            $('#huyen').html('<option value="">Chọn Quận/Huyện</option>').prop('disabled', true);
            $('#xa').html('<option value="">Chọn Phường/Xã</option>').prop('disabled', true);
        }
    });
    $("#huyen").change(function () {
        var huyenid = $(this).val();
        if (huyenid) {
            $.ajax({
                url: 'api/cart/get-address.php',
                type: 'POST',
                data: {
                    yeucau: 'xa',
                    id: huyenid
                },
                success: function (response) {
                    $('#xa').html(response).prop('disabled', false);
                }
            });
        }
    });
</script>

<!-- Hàm tính tổng tiền -->

<!-- Hàm cập nhật status -->

<!-- Hàm tăng giảm số lượng -->

<!-- Hàm xoá sản phẩm trong giỏ -->

<script>
    function updateTotalPrice() {
        $.ajax({
            url: 'api/cart/calculateCartTotal.php',
            type: 'POST',
            success: function (response) {
                response = JSON.parse(response);
                $("#tamtinh").html(response.format_total);
                $("#tamtinh-input").val(response.total);
            }
        });
    }
    updateTotalPrice();
    // Xử lý nút checkbox
    $(document).on('change', '.check-status', function () {
        var id = $(this).data('id');
        var status = $(this).is(':checked') ? 1 : 0;

        $.ajax({
            url: 'api/cart/update-cart.php',
            type: 'POST',
            data: {
                action: 'status',
                id: id,
                status: status
            },
            success: function (response) {
                // Handle success (e.g., display a success message)
                updateTotalPrice();
            },
            error: function () {
                // Handle error
                alert('Error updating status.');
            }
        });
    });
    $(document).on('click', '.btn-delete', function () {
        var id = $(this).data('id');
        var productItem = $(this).closest('.product-item');

        if (confirm('Bạn có muốn xoá sản phẩm trong giỏ hàng?')) {
            $.ajax({
                url: 'api/cart/update-cart.php',
                type: 'POST',
                data: {
                    action: 'delete',
                    id: id
                },
                success: function (response) {
                    // Remove the item from the UI
                    productItem.remove();
                    updateTotalPrice();
                },
                error: function () {
                    // Handle error
                    alert('Error deleting item.');
                }
            });
        }
    });
    $(document).on('click', '.btn-increase, .btn-decrease', function () {
        var input = $(this).siblings('.input-quantity');
        var currentQuantity = parseInt(input.val());
        var newQuantity = $(this).hasClass('btn-increase') ? currentQuantity + 1 : currentQuantity - 1;

        if (newQuantity > 0) {
            input.val(newQuantity).trigger('change');
        }
    });

    $(document).on('change', '.input-quantity', function () {
        var id = $(this).data('id');
        var quantity = $(this).val();

        $.ajax({
            url: 'api/cart/update-cart.php',
            type: 'POST',
            data: {
                action: 'change',
                id: id,
                quantity: quantity
            },
            success: function (response) {
                // Handle success (e.g., update total price)
                updateTotalPrice();
            },
            error: function () {
                // Handle error
                alert('Error updating quantity.');
            }
        });
    });
</script>