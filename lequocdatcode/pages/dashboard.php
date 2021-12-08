<?php 
require_once '../_config.php';
if ($duysexy == false) {
    header('location: /auth/login');
    die();
} else if($user_level == 0){
    header('location: /profile/update-info');
}
$title = 'Trang chủ';
require_once '../includes/header.php'; 
require_once '../includes/navbar.php'; 
?>
<div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card"></div>
    <!--/.bg-holder-->
    <div class="card-body position-relative">
        <div class="row">
            <div class="col-lg-8">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item font-sans-serif"><a href="/"><strong><i class="fas fa-globe"></i>
                                <?=$site_name;?></strong></a></li>
                    <li class="breadcrumb-item font-sans-serif active" aria-current="page"><i class="fas fa-link"></i>
                        Trang chủ</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-md-6 col-xxl-3 mb-3 pe-md-2">
        <div class="card h-md-100">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2 d-flex align-items-center">Username</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row">
                    <div class="col-12">
                        <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info"><?=$user_username;?></div>
                    </div>
                    <div class="col-auto ps-0">
                        <div class="echart-bar-weekly-sales h-70"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3 mb-3 ps-md-2 pe-xxl-2">
        <div class="card h-md-70">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Cấp bậc Tài khoản</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info"><?=$user_level_type;?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3 mb-3 ps-md-2 pe-xxl-2">
        <div class="card h-md-100">
            <div class="card-header pb-0">
                <h6 class="mb-0 mt-2">Số dư tài khoản</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">
                <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                        <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info"><?=number_format($user_point);?>
                            VNĐ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xxl-3 mb-3 ps-md-2">
        <div class="card h-md-100">
            <div class="card-header d-flex flex-between-center pb-0">
                <h6 class="mb-0">Số tiền đã sử dụng</h6>
            </div>
            <div class="card-body d-flex flex-column justify-content-end">

                <div class="row justify-content-between">

                    <div class="col-auto align-self-end">
                        <div class="display-4 fs-4 mb-2 font-weight-normal text-sans-serif text-info">0 VNĐ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-0">
    <div class="col-md-8">
        <div class="card overflow-hidden mb-3">
            <div class="card-header bg-light">
                <div class="row justify-content-between align-items-center">
                    <div class="col-sm-auto">
                        <h5 class="mb-1 mb-md-0">Thông báo gần đây</h5>
                    </div>

                </div>
            </div>
            <div class="card-body fs--1 p-0">
                <a class="border-bottom-0 notification rounded-0 border-x-0 border border-300" href="#!">
                    <div class="notification-avatar">
                        <div class="avatar avatar-xl mr-3">
                            <div class="avatar-emoji rounded-circle">
                                <img class="rounded-circle" src="https://automxh.vn/assets/img/noti.png">
                            </div>
                        </div>
                    </div>
                    <div class="notification-body">
                        <p class="mb-1">
                            <strong>
                                Chào mừng bạn đã đến với hệ thống nhé, chúc bạn có 1 ngày làm việc vui vẻ!
                            </strong>
                        </p>
                        <span class="notification-time">2021-06-11</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ps-lg-2 mb-3">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Cấp bậc tài khoản</h5>
            </div>
            <div class="card-body bg-light overflow-hidden">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="d-flex position-relative">
                            <div class="col-auto">
                                <div class="card bg-soft-info text-info mb-3 page_speed_219467203">
                                    <div class="card-body p-3 text-center"><i class="fas fa-crown"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 pl-3 p-2">
                                <h6 class="fs-0 mb-1">Cộng tác viên</h6>
                                <p class="mb-0 fs--1 text-500">Tổng nap: <b class="text-danger">5,000,000</b> coin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="d-flex position-relative">
                            <div class="col-auto">
                                <div class="card bg-soft-success text-success mb-3 page_speed_219467203">
                                    <div class="card-body p-3 text-center"><i class="fas fa-crown"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 pl-3 p-2">
                                <h6 class="fs-0 mb-1">Đại lý</h6>
                                <p class="mb-0 fs--1 text-500">Tổng nap: <b class="text-danger">20,000,000</b> coin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <hr>
                        <p class="text-small text-warning">Khi bạn lên cấp bậc nào thì sẽ có giá ưu đãi cho cấp bậc đó
                            nhé.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- script bổ sung -->
</div>
<?php require_once '../includes/footer.php'; ?>