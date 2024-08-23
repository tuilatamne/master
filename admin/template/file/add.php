<?php
if ($func->isPOST())
{
    $error = false;
    $uploadDir = '../upload/file/'; // Thư mục lưu trữ file PDF
    $filename = basename($_FILES['pdfFile']['name']);
    $uploadFile = $uploadDir . basename($_FILES['pdfFile']['name']);
    $fileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));


    // Di chuyển file từ thư mục tạm thời sang thư mục đích
    if (!move_uploaded_file($_FILES['pdfFile']['tmp_name'], $uploadFile))
    {
        $error = true;
    }
    // $filterAll = $func->filter();
    //xử lý insert
    $dataInsert = [
        'filename' => $filename
    ];
    $insertStatus = $db->insert('files', $dataInsert);
    if ($insertStatus)
    {
        setFlashData('smg', "Thêm file thành công");
        setFlashData('smg_type', 'success');
        $func->redirect("?com=file&act=list");
    } else
    {
        setFlashData('smg', 'Lỗi cơ sở dữ liệu');
        setFlashData('smg_type', 'danger');
    }
}

$smg = getFlashData('smg');
$smg_type = getFlashData('smg_type');
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
                    <h3 class="mb-0">Thêm mới file</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="index.php">Bảng điều khiển</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Thêm mới file
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
            <form method="post" enctype="multipart/form-data">
                <div class="card card-primary card-outline">
                    <!--begin::Header-->
                    <div class="card-header">
                        <div class="card-title">Thêm mới file</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <label class="form-label fw-bold">Tải file lên:</label>
                                <input class="form-control" type="file" name="pdfFile" id="pdfFile" accept=".pdf"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!--begin::Footer-->
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->