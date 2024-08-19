<?php
if ((isset($_GET['month']) && $_GET['month'] != '') && (isset($_GET['year']) && $_GET['year'] != '')) {
    $time = $_GET['year'] . '-' . $_GET['month'] . '-1';
    $date = strtotime($time);
} else {
    $date = strtotime(date('y-m-d'));
}

$day = date('d', $date);
$month = date('m', $date);
$year = date('Y', $date);
$firstDay = mktime(0, 0, 0, $month, 1, $year);
$dayOfWeek = date('D', $firstDay);
$daysInMonth = cal_days_in_month(0, $month, $year);
$timestamp = strtotime('next Sunday');
$weekDays = array();

/* Make data for js chart */
$charts = array();
$charts['month'] = $month;

for ($i = 1; $i <= $daysInMonth; $i++) {
    $k = $i + 1;
    $begin = strtotime($year . '-' . $month . '-' . $i);

    if ($k == 32) {
        $month = $month + 1;
        if ($month == 13) {
            $year = $year + 1;
            $month = 1;
        }
        $k = 1;
    }

    $end = strtotime($year . '-' . $month . '-' . $k);
    $todayrc = $d->rawQueryOne("select count(*) as todayrecord from #_counter where tm >= ? and tm < ?", array($begin, $end));
    $today_visitors = $todayrc['todayrecord'];
    $charts['series'][] = $today_visitors;
    $charts['labels'][] = 'D' . $i;
}
?>
<!-- Main content -->
<section class="content mb-3">
    <div class="container-fluid">
        <h5 class="pt-3 pb-2">Dashboard</h5>
        <div class="row mb-2 text-sm">
            <div class="col-12">
                <a class="my-info-box info-box" href="index.php?com=setting&act=update" title="Thông tin website">
                    <div class="info-box-content text-dark">
                        <span style="font-size: 18px; text-transform:uppercase !important " class="info-box-text text-capitalize">Thông tin website </span>
                    </div>
                </a>
            </div>
            <div class="col-12">
                <a class="my-info-box info-box" href="index.php?com=user&act=info_admin" title="Tài khoản admin">
                    <div class="info-box-content text-dark">
                        <span style="font-size: 18px; text-transform:uppercase !important " class="info-box-text text-capitalize">Tài khoản admin</span>
                    </div>
                </a>
            </div>
            <div class="clearfix hidden-md-up"></div>
            <div class="col-12">
                <a class="my-info-box info-box" href="index.php?com=user&act=info_admin&changepass=1" title="Thay đổi mật khẩu">
                    <div class="info-box-content text-dark">
                        <span style="font-size: 18px; text-transform:uppercase !important " class="info-box-text text-capitalize">Thay đổi mật khẩu</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>