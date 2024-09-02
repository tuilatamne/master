<section id="dangkynhantin">
    <div class="dangkynhantin-component">
        <div class="wrap-content row align-items-center">
            <div class="col-md-6">
                <div class="d-flex align-items-center mb-2 mb-md-0">
                    <img class="img-nhantin" src="assets/images/page/icon-email.svg">
                    <span class="text-delaithongtin">ĐỂ LẠI THÔNG TIN ĐỂ NHẬN TƯ VẤN</span>
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <input id="input-dangkynhantin" type="text" class="form-control input-dangkynhantin"
                    placeholder="Nhập Email hoặc Số điện thoại">
                <img id="btn-nhantin" class="icon-send" src="assets/images/page/icon-send.svg">
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $('#btn-nhantin').on('click', function () {
            var contactInfo = $('#input-dangkynhantin').val().trim();
            if (contactInfo === '') {
                // alert('Vui lòng nhập Email hoặc Số điện thoại.');
                Swal.fire({
                    title: "Vui lòng nhập Email hoặc Số điện thoại",
                    showClass: {
                        popup: `
                                animate__animated
                                animate__fadeInUp
                                animate__faster
                                `
                    },
                    hideClass: {
                        popup: `
                                animate__animated
                                animate__fadeOutDown
                                animate__faster
                                `
                    }
                });
                return;
            }
            $.ajax({
                url: 'api/dangkynhantin/submit.php', // Thay thế bằng URL đến endpoint xử lý yêu cầu
                type: 'POST',
                data: {
                    contact_info: contactInfo
                },
                success: function (response) {
                    // Xử lý khi thành công
                    // alert('Đăng ký nhận tin thành công!');
                    Swal.fire({
                        title: "Cảm ơn bạn đã để lại thông tin tư vấn",
                        showClass: {
                            popup: `
                                animate__animated
                                animate__fadeInUp
                                animate__faster
                                `
                        },
                        hideClass: {
                            popup: `
                                animate__animated
                                animate__fadeOutDown
                                animate__faster
                                `
                        }
                    });
                },
                error: function (xhr, status, error) {
                    // Xử lý khi có lỗi
                    alert('Đã xảy ra lỗi, vui lòng thử lại.');
                }
            });
        });
    });
</script>