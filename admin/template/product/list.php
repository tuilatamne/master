<?php
$product_list = $db->getRaw("SELECT 
                                products.*, 
                                product_types.title AS product_type_title
                            FROM 
                                products 
                            LEFT JOIN 
                                product_types 
                            ON 
                                products.product_type_id = product_types.id
                            ORDER BY 
                                products.stt ASC");
$smg = getFlashData('smg');
?>

<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Quản lý sản phẩm</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="index.php">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Quản lý sản phẩm
                        </li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <?php
            if (!empty($smg))
            {
                $func->getSmg($smg);
            }
            ?>
            <div class="card card-primary card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header">
                    <a href="?com=product&act=add" class="btn btn-success">Thêm mới</a>
                </div>
                <!--end::Header-->
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="6%" class="text-center">STT</th>
                                <th width="15%" class="text-center">Hình</th>
                                <th>Tiêu đề</th>
                                <th>Danh mục</th>
                                <th width="8%" class="text-center">Nổi bật</thư>
                                <th width="8%" class="text-center">Hiển thị</th>
                                <th width=" 10%" class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $dem = 1;
                            foreach ($product_list as $item):
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <input class="form-control text-center stt-input" type="text" name="stt" data-id="<?= $item['id'] ?>"
                                            value="<?= $item['stt'] ?>">
                                    </td>
                                    <td class="text-center">
                                        <img style="width: 100px; height: 80px; object-fit: cover;"
                                            src="../assets/images/upload/<?= $item['image'] ?>" alt="<?= $item['image'] ?>"
                                            onerror="this.src='../assets/images/noimage/noimage.png'">
                                    </td>
                                    <td>
                                        <a href="?com=product&act=edit&id=<?= $item['id'] ?>"
                                            class="text-decoration-none text-black">
                                            <?= $item['title'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?= $item['product_type_title'] ?>
                                    </td>
                                    <td class="text-center">
                                        <input data-id="<?=$item['id']?>" type="checkbox" class="form-check-input highlight-checkbox" 
                                        <?= $item['noibat'] == 1 ?'checked' : '' ?>>
                                    </td>
                                    <td class="text-center">
                                        <input data-id="<?=$item['id']?>" type="checkbox" class="form-check-input hienthi-checkbox" 
                                        <?= $item['hienthi'] == 1 ? 'checked' : '' ?>>
                                    </td>
                                    <td class="text-center">
                                        <a href="?com=product&act=edit&id=<?= $item['id'] ?>"
                                            class="btn btn-warning btn-sm">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="?com=product&act=delete&id=<?= $item['id'] ?>"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->




<script>
    $(document).ready(function () {
        $('.highlight-checkbox').on('change', function () {
            var productId = $(this).data('id');
            var isChecked = $(this).is(':checked');

            $.ajax({
                url: 'api/product/noibat.php',
                type: 'POST',
                data: {
                    id: productId,
                    highlight: isChecked ? 1 : 0
                },
                success: function (response) {
                    // Xử lý phản hồi từ server nếu cần
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        });
        $('.hienthi-checkbox').on('change', function () {
            var productId = $(this).data('id');
            var isChecked = $(this).is(':checked');

            $.ajax({
                url: 'api/product/hienthi.php',
                type: 'POST',
                data: {
                    id: productId,
                    highlight: isChecked ? 1 : 0
                },
                success: function (response) {
                    // Xử lý phản hồi từ server nếu cần
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        });
        $('.stt-input').on('change', function () {
            var productId = $(this).data('id');
            var newStt = $(this).val();

            $.ajax({
                url: 'api/product/stt.php',
                type: 'POST',
                data: {
                    id: productId,
                    stt: newStt
                },
                success: function (response) {
                    // Xử lý phản hồi từ server nếu cần
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>