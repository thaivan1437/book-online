<?php
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='sp-gt'";
$d->query($sql);
$gt_sp=$d->fetch_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='banner-sp'";
$d->query($sql);
$banner_sp=$d->fetch_array();
?>
<div style="padding-top:40px" class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="container">
	<div class="font-weight-bold text-capitalize tcon-td"><?= $tintuc_detail['ten'] ?></div>
	<hr>
	<div class="d-flex flex-wrap align-items-center justify-content-between">
		<?php if(!empty($tintuc_detail['muc_luong'])) { ?>
		<div class="td-item">
			<div class="td-item-left td-item1">Mức lương:</div>
			<div class="td-item-right"><?=$tintuc_detail['muc_luong']?></div>
		</div>
		<?php } ?>
		<?php if(!empty($tintuc_detail['gio_lam'])) { ?>
		<div class="td-item">
			<div class="td-item-left td-item2">Giờ làm:</div>
			<div class="td-item-right"><?=$tintuc_detail['gio_lam']?></div>
		</div>
		<?php } ?>
		<?php if(!empty($tintuc_detail['dia_diem'])) { ?>
		<div class="td-item">
			<div class="td-item-left td-item3">Địa điểm:</div>
			<div class="td-item-right"><?=$tintuc_detail['dia_diem']?></div>
		</div>
		<?php } ?>
		<?php if(!empty($tintuc_detail['kinh_nghiem'])) { ?>
		<div class="td-item">
			<div class="td-item-left td-item4">Kinh nghiệm:</div>
			<div class="td-item-right"><?=$tintuc_detail['kinh_nghiem']?></div>
		</div>
		<?php } ?>
		<?php if(!empty($tintuc_detail['gioi_tinh'])) { ?>
		<div class="td-item">
			<div class="td-item-left td-item5">Giới tính:</div>
			<div class="td-item-right"><?=$tintuc_detail['gioi_tinh']?></div>
		</div>
		<?php } ?>
		<?php if(!empty($tintuc_detail['trinh_do'])) { ?>
		<div class="td-item">
			<div class="td-item-left td-item6">Trình độ:</div>
			<div class="td-item-right"><?=$tintuc_detail['trinh_do']?></div>
		</div>
		<?php } ?>
	</div>
	<hr>
	<div class="tcon-content mb-5"><?=$tintuc_detail["noidung"]?></div>
	<h3 class="mb-3 text-center text-uppercase brand-title">Thông tin liên hệ</h3>
	<div style="max-width:600px;margin: 0 auto;">
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

	<?php if(!empty($tintuc_khac)) { ?>
	<div class="brand-title">Các tin tuyển dụng khác</div>
	<ul>
		<?php foreach ($tintuc_khac as $tinkhac) { ?>
			<li><a style="font-size:1.2rem" href="<?=$_GET["com"]?>/<?= $tinkhac['tenkhongdau'] ?>-<?= $tinkhac['id'] ?>.html" style="text-decoration:none;"><?= $tinkhac['ten'] ?></a> </li>
			<?php } ?>
	</ul>
	<?php } ?>
</div>