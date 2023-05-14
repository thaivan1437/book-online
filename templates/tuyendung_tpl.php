<?php
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='tuyendung-bn'";
$d->query($sql);
$gt_sp=$d->fetch_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='banner-sp'";
$d->query($sql);
$banner_sp=$d->fetch_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, photo, h1 as soluong, h2 as vitri, noidung_$lang as noidung, type from #_about where type='phat-trien-cung-bsa' and hienthi=1 order by stt, id desc");
$tuyendung = $d->result_array();
?>
<div><img src="<?=_upload_hinhanh_l.$gt_sp['photo']?>" alt="banner" class="img-fluid img-100"></div>
<div style="padding-top:40px" class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="container">
	<h3 class="mb-3 text-center text-uppercase brand-title"><?=$title_tcat?></h3>
	<div class="mb-5 product-list-desc"><?=$gt_sp['mota']?></div>
	<div class="mb-5">
		<div class="table-responsive">
			<table class="table table-bordered table-hover">
				<thead class="thead-success">
					<tr>
						<th>Vị trí tuyển dụng</th>
						<th>Số lượng</th>
						<th>Nơi làm việc</th>
					</tr>
					</thead>
				<tbody>
					<?php foreach($tuyendung as $item) { ?>
					<tr class="cursor-pointer tuyendung-js" data-href="<?=$item['type']?>/<?=$item['tenkhongdau']?>-<?=$item['id']?>.html">
						<td><?=$item['ten']?></td>
						<td><?=$item['soluong']?></td>
						<td><?=$item['vitri']?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
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
	
</div>