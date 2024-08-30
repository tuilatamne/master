<?php
$list_order = $db->getRaw("SELECT * FROM orders");
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
                    <h3 class="mb-0">Quản lý đơn hàng</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="index.php">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Quản lý đơn hàng
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
                    <div class="card-title">Danh Sách Đơn Hàng</div>
                </div>
                <!--end::Header-->
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="15%">Mã đơn hàng</th>
                                <th>Họ tên</th>
                                <th>Ngày đặt</th>
                                <th width="8%" class="text-center">Tổng giá</thư>
                                <th width="8%" class="text-center">Tình trạng</th>
                                <th width=" 10%" class="text-center">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list_order as $item):
                                ?>
                                <tr>
                                    <td></td>
                                    <td>
                                        <a class="text-decoration-none fw-bold text-black"
                                            href="?com=order&act=edit&id=<?= $item['id'] ?>">
                                            <?= $item['fullname'] ?>
                                        </a>
                                    </td>
                                    <td><?= $item['create_at'] ?></td>
                                    <td class="fw-bold"><?= $func->format_tiente($item['total_price']) ?>đ</td>
                                    <td class="fw-bold"><?= $func->status_order($item['status']) ?></td>
                                    <td class="text-center">
                                        <a href="?com=order&act=edit&id=<?= $item['id'] ?>" class="btn btn-warning btn-sm">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="?com=order&act=delete&id=<?= $item['id'] ?>" class="btn btn-danger btn-sm">
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