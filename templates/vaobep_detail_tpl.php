<?php
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='dnvb-bn'";
$d->query($sql);
$banner_sp=$d->fetch_array();
?>
<?php if(!empty($tintuc_detail['thumb'])) { ?>
	<div><img src="<?=_upload_tintuc_l.$tintuc_detail['thumb']?>" alt="banner" class="img-fluid img-100"></div>
<?php } else { ?>
	<div><img src="<?=_upload_hinhanh_l.$banner_sp['photo']?>" alt="banner" class="img-fluid img-100"></div>
<?php } ?>
<div class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="container">
	<h3 class="mb-3 text-center text-uppercase brand-title"><?=$title_tcat?></h3>
	<div class="mb-5 product-list-desc"><?=$tintuc_detail['h2']?></div>
	<div class="mb-5 d-flex flex-wrap">
		<div class="dnvb-congthuc-left">
			<h3 class="mb-3 text-center text-uppercase brand-title">Nguyên liệu</h3>
			<?=$tintuc_detail['mota']?>
		</div>
		<div class="dnvb-congthuc-right">
			<iframe src="https://www.youtube.com/embed/<?=getYoutubeIdFromUrl($tintuc_detail['h3'])?>" class="vaobep-iframe"></iframe>
		</div>
	</div>
	<h3 class="mb-5 text-center text-uppercase brand-title">Các bước chế biến</h3>
	<div class="mb-5 tcon-content">
		<?=$tintuc_detail['noidung']?>
	</div>
	<?php if(!empty($tintuc_khac)) { ?>
	<h3 class="mb-3 text-center text-uppercase brand-title">Các công thức khác</h3>
	<div id="products" class="dnvb-contain">
		<?php foreach($tintuc_khac as $v) { ?>
		<div class="">
			<div class="cook-slide-space"></div>
			<div class="cook-box">
				<div class="mb-3 sp-img">
					<a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html">
						<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],400,267,1,80)?>" alt="cook" class="img-fluid img-100 cook-img">
					</a>
					<div class="splash"></div>
				</div>
				<div class="cook-type"><?=$v['h1']?></div>
				<div class="mb-2 sp-name"><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html" class="cook-name"><?=$v['ten']?></a></div>
				<div class="mb-3 ttuc-desc"><?=$v['h2']?></div>
				<div class=""><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html" class="cook-view">Xem cách chế biến</a></div>
			</div>
		</div>
		<?php } ?>
	</div>
	<?php } ?>
</div>