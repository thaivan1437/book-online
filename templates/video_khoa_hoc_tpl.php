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
<!-- <div><img src="<?=_upload_hinhanh_l.$banner_sp['photo']?>" alt="banner" class="img-fluid img-100"></div> -->

<div class="container">
	<h3 class="mb-3 text-center text-uppercase brand-title"><?=$title_tcat?></h3>
	<div class="mb-5 product-list-desc"><?=$gt_sp['mota']?></div>
	<!-- <div class="mb-5 slick-productlist">
		<?php foreach($rs_list as $v) { ?>
		<div class="">
			<div class="productlist-box productlist-js <?= ($idc == $v['id']) ? 'active' : '' ?>" data-id="<?=$v['id']?>">
				<div><img src="<?=thumb($v["photo"],_upload_product_l,$v["tenkhongdau"],400,400,1,80)?>" alt="" class="img-fluid img-100"></div>
				<div><span class="productlist-name"><?=$v['ten']?></span></div>
			</div>
			<div class="productlist-space"></div>
		</div>
		<?php } ?>
	</div> -->
	<div class="position-relative">
		<div id="products" class="product-contain">
			<?php foreach($product as $v) { ?>
				<div class="product-box">
					<div class="sp-img">
						<a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>/">
							<img src="<?=thumb($v["photo"],_upload_product_l,$v["tenkhongdau"],400,400,2,80)?>" alt="<?=$v["ten"]?>" class="img-fluid img-100">
						</a>
						<div class="splash"></div>
					</div>
					<div class="sp-info text-left">
						<div class="text-left pl-2">
							<a class="text-color fw-b d-block fs-16 line-2" href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>/"><?=$v['ten']?></a>
						</div>
						<div class="sp-desc pb-2 pl-2">
							<?=$v['mota']?>
						</div>
						<div class="d-flex text-color pl-2 sp-config">
							<div class="pr-1">Hình thức học:</div>
							<div class="pl-3"><?=$v['hinhthuc']?></div>
						</div>
						<div class="d-flex text-color pl-2 sp-config">
							<div class="pr-1">Ngày khai giảng:</div>
							<div class="pl-3"><?=$v['ngaykhaigiang']?></div>
						</div>
						<div class="d-flex text-color pl-2 sp-config">
							<div class="pr-1">Giờ học:</div>
							<div class="pl-3"><?=$v['giohoc']?></div>
						</div>
						<div class="d-flex text-color pl-2 sp-config">
							<div class="pr-1">Lịch học:</div>
							<div class="pl-3"><?=$v['lichhoc']?></div>
						</div>
						<div class="sp-prices d-flex justify-content-between align-items-center flex-wrap">
							<div class="box-price text-color2 d-flex justify-content-between align-items-center w-200">
								<?php if ($v['giakm']>0) { ?>
									
									<div class="spkm-gia-km fs-16 fw-b"><span><?=number_format($v["giakm"],"0",",",".")?> </span></div>
									<div class="spkm-gia-bt pl-1"><span><?=number_format($v["gia"],"0",",",".")?> </span></div>
								<?php } else { ?>
									<div class="spkm-gia-km"><span><?=number_format($v["gia"],"0",",",".")?> </span></div>
								<?php } ?>
							</div>
							<div class="sp-nut-box d-flex w-200a justify-content-end align-items-center">
								<div class="sp-mua nut-mua" data-id="<?=$v['id']?>"><img src="assets/images/cart.png" class="cursor-pointer" width="20px" style="margin-right: 10px;" /></div>
								<a class="d-inline-block text-color2 see-more" href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>/">Xem chi tiết</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

	</div>
</div>