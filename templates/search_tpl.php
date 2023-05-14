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
<div><img src="<?=_upload_hinhanh_l.$banner_sp['photo']?>" alt="banner" class="img-fluid img-100"></div>
<div class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="container">
	<h3 class="mb-3 text-center text-uppercase brand-title"><?=$title_tcat?></h3>
	<div class="position-relative">
		<div id="products" class="product-contain">
			<?php foreach($product as $v) { ?>
			<div class="product-box">
				<div class="sp-img">
					<a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html">
						<img src="<?=thumb($v["photo"],_upload_product_l,$v["tenkhongdau"],400,400,2,80)?>" alt="<?=$v["ten"]?>" class="img-fluid img-100">
					</a>
					<div class="splash"></div>
				</div>
				<div class=""><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><?=$v['ten']?></a></div>
			</div>
			<?php } ?>
		</div>
		<div class="ajax-preloader">
			<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
		</div>
	</div>
</div>