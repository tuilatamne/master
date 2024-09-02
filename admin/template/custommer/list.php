<?php
$list_custommer = $db->getRaw("SELECT * FROM custommer");
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
                    <h3 class="mb-0">Đăng ký nhận tin</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="index.php">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Đăng ký nhận tin
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
            <div class="card card-primary card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Danh Sách Khách Hàng đăng ký</div>
                </div>
                <!--end::Header-->
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="5%" class="text-center">STT</th>
                                <th>Thông tin đăng ký</th>
                                <th>Ngày đăng ký</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $dem = 0;
                            foreach ($list_custommer as $custommer): ?>
                                <tr>
                                    <td class="text-center"><?= ++$dem ?></td>
                                    <td><?= $custommer['info'] ?></td>
                                    <td><?= date('d-m-Y H:i:s', strtotime($custommer['create_at'])) ?></td>
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