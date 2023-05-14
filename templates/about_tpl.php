<?php 
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, noidung_$lang as noidung, h1, photo from #_time where type='loi-hua'";
$d->query($sql);
$lhth=$d->fetch_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, noidung_$lang as noidung, h1, photo from #_time where type='lich-su'";
$d->query($sql);
$lichsu=$d->fetch_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='chu-ky2'";
$d->query($sql);
$chuky=$d->fetch_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, photo, mota_$lang as mota from #_about where type='dac-diem' and hienthi=1 order by stt, id desc");
$dacdiem = $d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='cddn-gt'";
$d->query($sql);
$cddn_gt=$d->fetch_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, mota_$lang as mota, photo from #_about where type='cong-dong-doanh-nghiep' and hienthi=1 order by stt, id desc");
$cddn = $d->result_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, photo, noidung_$lang as mota from #_about where type='day-chuyen' and hienthi=1 order by stt, id desc");
$daychuyen = $d->result_array();

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
?>
<div><img src="<?=_upload_hinhanh_l.$tintuc_detail["photo"]?>" alt="banner" class="img-fluid img-100"></div>
<div class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="container">
	<div class="text-center brand-title"><?=$lichsu['ten']?></div>
	<div class="mb-2"><img src="<?=_upload_hinhanh_l.$lichsu["photo"]?>" alt="banner" class="img-fluid img-100"></div>
	<div class=""><?=$lichsu['mota']?></div>
</div>
<div class="mb-5 about-group">
	<div class="container">
		<div class="promise-contain" style="border:none">
			<div class="promise-left">
				<div class="mb-3">
					<img src="<?=thumb($lhth["photo"],_upload_hinhanh_l,$lhth["tenkhongdau"],300,300,1,80)?>" alt="avatar" class="img-fluid community-img">
				</div>
				<div class="promise-name"><?=$lhth['h1']?></div>
				<div class="font-weight-bold"><?=$lhth['mota']?></div>
			</div>
			<div class="promise-right">
				<div class="promise-title"><?=$lhth['ten']?></div>
				<div class="promise-talk"><?=$lhth['noidung']?></div>
				<div class=""><img src="<?=thumb($chuky["photo"],_upload_hinhanh_l,$chuky["tenkhongdau"],200,100,2,80)?>" alt="sign" class="img-fluid"></div>
			</div>
		</div>
		<div class="about-contain">
			<?php foreach($dacdiem as $v) { ?>
			<div class="about-box">
				<div class="mb-5"><img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],81,81,2,80)?>" alt="view" class="img-fluid"></div>
				<div class="about-name"><?=$v['ten']?></div>
				<div><?=$v['mota']?></div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<div class="mb-5 container">
	<div class="tech-title"><?=$cddn_gt['ten']?></div>
	<div class="tech-desc"><?=$cddn_gt['mota']?></div>
	<div class="community-about">
		<div class="slick-community2">
			<?php foreach($cddn as $v) { ?>
			<div class="text-center">
				<div class="mb-3">
					<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],251,251,1,80)?>" alt="avatar" class="img-fluid community-img">
				</div>
				<div class="promise-name"><?=$v['ten']?></div>
				<div class="font-weight-bold"><?=$v['mota']?></div>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="tech-group">
		<div class="tech-title">Công nghệ và dây chuyền sản xuất</div>
		<?php foreach($daychuyen as $k => $v) { 
			if($k % 2 == 0) { ?>
			<div class="tech-contain">
				<div class="tech-left">
					<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],526,352,1,80)?>" alt="tech" class="img-fuild img-100">
				</div>
				<div class="tech-right">
					<div class="mb-2 d-flex align-items-center">
						<div><img src="assets/images/k<?=$k?>.png" alt="icon" class="imf-fluid"></div>
						<div class="tech-name"><?=$v['ten']?></div>
					</div>
					<div><?=$v['mota']?></div>
				</div>
			</div>
			<?php } else { ?>
			<div class="tech-contain">
				<div class="tech-right">
					<div class="mb-2 d-flex align-items-center">
						<div><img src="assets/images/k<?=$k?>.png" alt="icon" class="imf-fluid"></div>
						<div class="tech-name"><?=$v['ten']?></div>
					</div>
					<div><?=$v['mota']?></div>
				</div>
				<div class="tech-left">
					<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],526,352,1,80)?>" alt="tech" class="img-fuild img-100">
				</div>
			</div>
			<?php } ?>	
		<?php } ?>
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