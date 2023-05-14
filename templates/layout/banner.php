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
$sql="select ten_$lang as ten, tenkhongdau, id, type, photo from #_product_list where com=1 and type='san-pham' and hienthi=1 order by stt, id desc";
$d->query($sql);
$rs_list=$d->result_array();
?>
<header class="header">
<div class="header-item header-logo an-pc">
        <a href="http://<?=$config_url?>" class="big-logo"><img src="<?=_upload_hinhanh_l.$row_photo['logo']?>" alt="<?=$row_setting['ten_'.$lang]?>" alt="logo" class="img-fluid logo-mb-respon"></a>
    </div>
	<!-- <div class="an-pc">
		<div class="edu-mobile-menu-toggle">
			<i class="fa fa-bars edu-mobile-menu-icon-size" aria-hidden="true"></i>
		</div>
	</div> -->
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
    <?php /*<div class="header-item <?= ($com == 'su-kien') ? 'active' : '' ?> ">
        <a href="su-kien.html">Sự kiện đặc biệt</a>
    </div> */ ?>
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
</header>

<!-- <div class="an-pc">
		<div class="edu-mobile-menu-toggle">
			<i class="fa fa-bars edu-mobile-menu-icon-size" aria-hidden="true"></i>
		</div>
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
    <?php /*<div class="header-item <?= ($com == 'su-kien') ? 'active' : '' ?> ">
        <a href="su-kien.html">Sự kiện đặc biệt</a>
    </div> */ ?>
    <div class="header-item header-logo">
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
        <div class="header-search" data-toggle="modal" data-target="#myModal2"><i class="fa fa-search" aria-hidden="true"></i> Tìm</a>
    </div> -->