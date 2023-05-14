<?php
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='gt-tt'";
$d->query($sql);
$gttt=$d->fetch_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='gt-tt2'";
$d->query($sql);
$gttt2=$d->fetch_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, photo from #_about where type='tt-trong' and hienthi=1 order by stt, id desc");
$tttrong = $d->result_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, photo from #_about where type='tt-ngoai' and hienthi=1 order by stt, id desc");
$ttngoai = $d->result_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, photo, noidung_$lang as noidung from #_about where type='dai-ly' and hienthi=1 order by stt, id desc");
$daily = $d->result_array();
?>

<script type="text/javascript">
    // JavaScript Document
    function re_capcha()
    {
        document.getElementById('vimg').src = "./captcha_image.php";
    }
</script>

<div><img src="<?=_upload_hinhanh.$row_setting['tuvan']?>" alt="banner" class="img-fluid img-100"></div>
<div class="mb-5 container">
    <div class="daily-contain daily-position">
        <div class="daily-left">
            <div class="daily-title"><?=$row_setting['ten_'.$lang]?></div>
            <div class="mb-3 ft-info"><i class="fa fa-map-marker daily-fa" aria-hidden="true"></i> Địa chỉ: <?=$row_setting['diachi_'.$lang]?></div>
            <div class="mb-3 ft-info"><i class="fa fa-phone daily-fa" aria-hidden="true"></i> Điện thoại: <?=$row_setting['hotline']?></div>
            <div class="mb-3 ft-info"><i class="fa fa-envelope daily-fa" aria-hidden="true"></i> Email: <?=$row_setting['email']?></div>
            <div class="mb-3 ft-info"><i class="fa fa-clock-o daily-fa" aria-hidden="true"></i> Giờ làm việc: <?=$row_setting['h6_'.$lang]?></div>
        </div>
        <div class="daily-right">
            <div class="google-map"><?=$row_setting['map']?></div>
        </div>
    </div>
    <?php /*
    <div class="mb-5 daily-contain">
        <div class="daily-left">
            <?= $company_contact['noidung'] ?>
        </div>
        <div class="daily-right">
            <div class="google-map"></div>
        </div>
    </div>
    */ ?>
    <div class="mb-5">
        <div class="text-center"><div class="daily-big-title">Hệ thống đại lý</div></div>
        <?php foreach($daily as $v) { ?>
        <div class="product-card">
            <div class="product-card-head product-card-head-js">
                <div class=""><?=$v['ten']?></div>
                <div class="pr-3"><i class="fa fa-angle-down product-card-i" aria-hidden="true"></i></div>
            </div>
            <div class="product-card-content"><?=$v['noidung']?></div>
        </div>
        <?php } ?>
    </div>
    <div class="daily-contact">
        <div class="daily-left">
            <div class="contact-title font-weight-bold">Liên hệ với chúng tôi</div>
            <div class="mb-3">Nếu có thắc mắc vui lòng liên hệ với BSA thông qua cách để lại thông tin hoặc gọi ngay <span style="color:#009253; font-weight:bold;">HOTLINE: <?=$row_setting['hotline']?></span></div>
            <div><img src="assets/images/ic7.png" alt="contact" class="img-fluid"></div>
        </div>
        <div class="daily-right">
            <form method="post" name="frm" class="forms" action="">
                <div class="mb-3 d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-50 mb-mobile-10"><input type="text" class="contact-input" name="ten" placeholder="Họ và tên" required></div>
                    <div class="d-50"><input type="email" class="contact-input" name="email" placeholder="Email"></div>
                </div>
                <div class="mb-3"><input type="number" name="dienthoai" class="contact-input" pattern="[0-9]{10}" maxlength="10" placeholder="Số điện thoại" required></div>
                <div class="mb-3"><textarea name="noidung"  rows="3" class="contact-input" placeholder="Nội dung ..."></textarea></div>
                <div class="mb-3">
                    <input type="text" name="capt" id="capt" class="form-control" placeholder="Nhập mã bảo vệ" required>
                    <img src="captcha_image.php" id="vimg"><span><img id="reload-capt" src="assets/images/Refresh-icon.png" alt="" width="35px" onclick="re_capcha()" /></span>
                </div>
                <div class="text-right"><button type="submit" class="btn contact-btn">Gửi thông tin <i class="fa fa-long-arrow-right contact-arr" aria-hidden="true"></i></button></div>
            </form>
        </div>
    </div>
</div>
<div class="marketing">
	<div class="tech-title">Thị trường</div>
	<div class="tech-desc"><?=$gttt['mota']?></div>
</div>
<div class="container">
	<div class="marketing-group">
		<div class="text-center">
			<div class="marketing-title">Thị trường xuất khẩu</div>
			<div class="slick-marketing1">
				<?php foreach($ttngoai as $v) { ?>
				<div>
					<div class="marketing1-box">
						<div class="mb-2"><img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],122,82,2,80)?>" alt="flag" class="img-fluid img-100"></div>
						<div><?=$v['ten']?></div>
					</div>
				</div>
				<?php } ?>
			</div>
			<hr class="marketing-hr">
			<div class="d-flex flex-wrap justify-content-between">
				<div class="brand-left">
					<h3 class="mb-3 brand-title">Thị trường trong nước</h3>
					<div class="mb-3"><?=$gttt2['mota']?></div>
				</div>
				<div class="brand-right">
					<div class="slick-marketing2">
						<?php foreach($tttrong as $v) { ?>
						<div class="">
							<div class="slick-brand-space"></div>
							<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],166,101,2,80)?>" alt="brand-image" class="img-fluid img-100 ">
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>