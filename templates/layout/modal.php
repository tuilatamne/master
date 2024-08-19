<?php if (!empty($popup)) { ?>
    <!-- Modal popup -->
    <div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="popupModalLabel"><?= $popup['name' . $lang] ?></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="<?= $popup['link'] ?>">
                        <?= $func->getImage(['sizes' => '800x530x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $popup['photo'], 'alt' => 'Popup']) ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Modal quickview -->
<div class="modal popup-custom fade" id="popup-quickview" tabindex="-1" role="dialog" aria-labelledby="popup-quickview-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body"></div>
        </div>
    </div>
</div>

<!-- Modal cart -->
<div class="modal fade" id="popup-cart" tabindex="-1" role="dialog" aria-labelledby="popup-cart-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="popup-cart-label"><?= giohangcuaban ?></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>

<div class="modal fade booking" role="dialog" aria-labelledby="bookingLabel">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content datlich">
            <div class="modal-header">
                <h6 class="modal-title" id="bookingLabel">ĐẶT LỊCH</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="validation-newsletter form-booking" novalidate method="post" action="booking" enctype="multipart/form-data">
                    <div class="newsletter-booking">
                        <label><?= hoten ?>:</label>
                        <input type="text" class="form-control text-sm" name="dataBooking[fullname]" placeholder="<?= hoten ?>" required />
                    </div>
                    <div class="newsletter-booking">
                        <label><?= dienthoai ?>:</label>
                        <input type="number" class="form-control text-sm" name="dataBooking[phone]" placeholder="<?= dienthoai ?>" required />
                    </div>
                    <div class="newsletter-booking">
                        <label>Ngày khám:</label>
                        <input type="date" class="form-control text-sm" name="dataBooking[ngay]" placeholder="Ngày khám" required />
                    </div>
                    <div class="newsletter-booking">
                        <label>Giờ khám:</label>
                        <input type="time" class="form-control text-sm" name="dataBooking[gio]" placeholder="Giờ khám" required />
                    </div>
                    <div class="newsletter-booking">
                        <label>Vấn đề gặp phải:</label>
                        <textarea name="dataBooking[content]" class="form-control text-sm" placeholder="Vấn đề gặp phải" required></textarea>
                    </div>
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="d-dongy">
                            <div class="d-flex align-items-center">
                                <div class="newsletter-checkbox">
                                    <input id="lb_ok" type="checkbox" name="ok" class="form-control" required>
                                </div>
                                <label for="lb_ok" class="label-checkbox mb-0">ĐỒNG Ý ĐẶT LỊCH</label>
                            </div>
                            <p class="mb-0 desc-dongy">*Thông tin của bạn sẽ được bảo mật.</p>
                        </div>
                        <div class="booking-button">
                            <input type="submit" class="btn btn-sm bg-default btn-primary " name="submit-booking" value="<?= dangky ?>" disabled>
                        </div>
                    </div>
                    <input type="hidden" class="btn btn-sm" name="recaptcha_response_booking" id="recaptchaResponseBooking">
                    <input type="hidden" name="url-current" value="<?= $func->getCurrentPageURL() ?>">
                </form>
            </div>
        </div>
    </div>
</div>


<?php /*
<!-- Modal prototype -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".exampleModal">
	Open Modal
</button>
<div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="exampleModalLabel">Modal title</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
*/ ?>