<?php
$d->query("select photo_$lang as photo, logo from #_photo where com='banner_top'");
$row_photo = $d->fetch_array();

$d->reset();
$sql="select * from #_icon where com='top' and hienthi=1 order by stt, id desc";
$d->query($sql);
$rs_icon=$d->result_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, type from #_about where type='chinh-sach' and hienthi=1 order by stt, id desc limit 0,6");
$csach = $d->result_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, photo, mota_$lang as mota, ngaytao, type from #_about where type='tin-tuc' and noibat=1 and hienthi=1 order by stt, id desc");
$ttuc = $d->result_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, photo, gia, giakm, type, masp from #_product where type='san-pham' and hienthi=1 and noibat=1 order by stt, id desc ");
$spnb = $d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, type, photo from #_product_list where com=1 and type='khoa-hoc' and hienthi=1 order by stt, id desc";
$d->query($sql);
$rs_list=$d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, type, photo from #_product_list where com=1 and type='video-khoa-hoc' and hienthi=1 order by stt, id desc";
$d->query($sql);
$rs_list2=$d->result_array();
?>
<?php /*
<header class="header">
    <div class="header-item header-logo an-pc">
        <a href="http://<?=$config_url?>" class="big-logo"><img src="<?=_upload_hinhanh_l.$row_photo['logo']?>" alt="<?=$row_setting['ten_'.$lang]?>" alt="logo" class="img-fluid logo-mb-respon"></a>
    </div>
    <div class="header-item">
        <a href=""><i class="fa fa-home header-home-fa" aria-hidden="true"></i></a>
    </div>
    <div class="header-item <?= ($com == 'chung-toi-la-ai') ? 'active' : '' ?> ">
        <a href="chung-toi-la-ai.html">Chúng tôi là ai</a>
    </div>
    <div class="header-item <?= ($com == 'san-pham') ? 'active' : '' ?> ">
        <a href="san-pham.html">Sản phẩm <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        <div class="header-submenu">
            <?php foreach($rs_list as $item) { ?>
                <div><a href="<?=$item['type']?>/<?=$item['tenkhongdau']?>-<?=$item['id']?>/"><?=$item['ten']?></a></div>
            <?php } ?>
        </div>
    </div>
    <div class="header-item <?= ($com == 'doanh-nhan-vao-bep') ? 'active' : '' ?> ">
        <a href="doanh-nhan-vao-bep.html">Doanh nhân vào bếp</a>
    </div>
    <div class="header-item header-logo an-mb">
        <a href="http://<?=$config_url?>" class="big-logo"><img src="<?=_upload_hinhanh_l.$row_photo['logo']?>" alt="<?=$row_setting['ten_'.$lang]?>" alt="logo" class="img-fluid logo-mb-respon"></a>
    </div>
    <div class="header-item <?= ($com == 'tin-tuc-su-kien') ? 'active' : '' ?> ">
        <a href="tin-tuc-su-kien.html">Tin tức & Sự kiện</a>
    </div>
    <div class="header-item <?= ($com == 'phat-trien-cung-bsa') ? 'active' : '' ?>">
        <a href="phat-trien-cung-bsa.html">Phát triển cùng BSA</a>
    </div>
    <div class="header-item <?= ($com == 'lien-he') ? 'active' : '' ?> ">
        <a href="lien-he.html">Liên hệ</a>
    </div>
    <div class="header-item head-search-mb">
        <div class="header-search" data-toggle="modal" data-target="#myModal2"><i class="fa fa-search" aria-hidden="true"></i> Tìm</a></div>
    </div>
    <div class="an-pc">
        <div class="top-menu">
            <nav id="cssmenu" class="wow fadeIn" data-wow-delay="0.7s">
                <?php include _template . "layout/menu_top.php"; ?>
            </nav>
        </div>
	</div>
</header> */?>

<!-- header -->
<header class="header">
    <div class="container position-relative an-mb">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-between align-items-center">
                <a href="<?=$row_setting["facebook"]?>" class="head-item d-flex align-items-center">
                    <img src="assets/images/fb.png" alt="facebook" style="width: 35px; margin-right: 5px"> Facebook
                </a>
                <a href="<?=$row_setting["zalo"]?>" class="head-item d-flex align-items-center">
                    <img src="assets/images/zalo.png" alt="facebook" style="width: 35px; margin-right: 5px">
                    Zalo
                </a>
            </div>
            
            <div class="">
                <a href="mailto:<?=$row_setting["email"]?>" class="head-item d-flex align-items-center">
                    <img src="assets/images/mail.png" alt="facebook" style="width: 35px; margin-right: 5px">
                    <?=$row_setting["email"]?>
                </a>
            </div>
        </div>
        <a href="tel:<?=$row_setting["hotline"]?>" class="head-hot an-mb"><?=$row_setting["hotline"]?></a>
        
    </div>
    
    <div class="head-menu an-mb">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center position-relative">
                <div class="head-box d-flex justify-content-around align-items-center">

                    <div class="header-item <?= ($com == 'khoa-hoc') ? 'active' : '' ?> ">
                        <a href="khoa-hoc.html" class="text-uppercase menu-item">Khóa học <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="header-submenu">
                            <?php foreach($rs_list as $item) { ?>
                                <div><a href="<?=$item['type']?>/<?=$item['tenkhongdau']?>-<?=$item['id']?>/"><?=$item['ten']?></a></div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="header-item <?= ($com == 'video-khoa-hoc') ? 'active' : '' ?> ">
                        <a href="video-khoa-hoc.html" class="text-uppercase menu-item">Bộ video bài giảng <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="header-submenu">
                            <?php foreach($rs_list2 as $item) { ?>
                                <div><a href="<?=$item['type']?>/<?=$item['tenkhongdau']?>-<?=$item['id']?>/"><?=$item['ten']?></a></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="logo">
                    <a href="http://<?=$config_url?>"><img src="<?=_upload_hinhanh_l.$row_photo['logo']?>" alt="logo" class="logo-img"></a>
                </div>
                <div class="head-box text-right d-flex justify-content-between align-items-center">
                    <a href="giao-trinh.html" class="text-uppercase menu-item">Giáo trình</a>


                    <?php if(!empty($_SESSION['login_web'])) { ?>
                        <a href="quan-ly-ca-nhan.html" class="menu-item d-flex align-items-center"><?=$_SESSION['login_web']['username']?></a> 
                        <a onclick="logout()" class="menu-item d-flex align-items-center">Đăng xuất</a>
                    <?php } else { ?>
                        <a href="dang-ky.html" class="menu-item d-flex align-items-center">
                            <img src="assets/images/sign-up.png" alt="facebook" style="width: 35px; margin-right: 5px">
                            Đăng ký
                        </a>
                        <a href="dang-nhap.html" class="menu-item d-flex align-items-center">
                            <img src="assets/images/sign-in.png" alt="facebook" style="width: 35px; margin-right: 5px">
                            Đăng nhập
                        </a>
                    <?php } ?>

                    
                </div>
            </div>
            <div class="breadcrumb-arrow"><?=$breakcrumb?></div>
            <!-- <div class="head-breadcrum">
                <a href="/" class="head-breadcrum-item">Trang chủ</a>
                <a href="" class="head-breadcrum-item">Giáo trình</a>
                <a href="" class="head-breadcrum-item">Sách giáo trình</a>
            </div> -->
        </div>
    </div>
    <div class="an-pc custom text-center d-flex position-relative align-items-center">
        <div class="top-menu">
            <nav id="cssmenu" class="wow fadeIn" data-wow-delay="0.7s">
                <?php include _template . "layout/menu_top.php"; ?>
            </nav>
        </div>
        <div class="logo">
            <a href="http://<?=$config_url?>"><img src="<?=_upload_hinhanh_l.$row_photo['photo']?>" alt="logo" class="logo-img"></a>
        </div>
	</div>
</header>

<!-- header -->