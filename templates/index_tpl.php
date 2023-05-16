<article style="" class="brand">
	<div class="container">
		<div class="d-flex flex-wrap align-items-center">
			<div class="ve-chung-toi-img <?= $deviceType == 'computer' ? 'w-50' : 'w-100' ?>">
				<img src="<?=_upload_hinhanh_l . $vechungtoi['photo']?>" alt="<?=$vechungtoi['ten']?>" class="img-fluid img-100">
			</div>
			<div class="ve-chung-toi <?= $deviceType == 'computer' ? 'w-50' : 'w-100' ?>">
				<h3 class="mb-3 brand-title"><?=$vechungtoi['ten']?></h3>
				<div class="mb-3 text-center text-color"><?=$vechungtoi['mota']?></div>
			</div>
		</div>
		<div class="wrap-about2">
			
			<?php if ($deviceType == 'computer') { ?>
				<div class="d-flex justify-content-between">
					<?php foreach($vechungtoi2 as $k => $v) { ?>
						<div class="wrap-about2-images">
							<img src="<?=_upload_tintuc_l.$v["photo"]?>" alt="<?=$v["ten"]?>" class="img-fluid img-100">
						</div>
					<?php }?>
				</div>
				<div class="d-flex justify-content-between bgcolor1 text-color2">
					<?php foreach($vechungtoi2 as $k => $v) { ?>
						<div class="wrap-about2-item text-center p-1">
							<div class="wrap-about-name fw-b fs-16"><?=$v['ten']?></div>
							<div class="wrap-about-desc"><?=$v['mota']?></div>
						</div>
					<?php }?>
				</div>
			<?php } else { ?>
				<div class="">
					<?php foreach($vechungtoi2 as $k => $v) { ?>
						<div class="wrap-about2-images">
							<img src="<?=_upload_tintuc_l.$v["photo"]?>" alt="<?=$v["ten"]?>" class="img-fluid img-100">
						</div>
						<div class="wrap-about2-item text-center bgcolor1 text-color2">
							<div class="wrap-about-name fw-b fs-16"><?=$v['ten']?></div>
							<div class="wrap-about-desc"><?=$v['mota']?></div>
						</div>
					<?php }?>
				</div>
			<?php }?>
		</div>
	</div>
</article>

<article class="product">
	<div class="container">
		<h3 class="mb-3 brand-title"> Khóa học nổi bật</h3>
		<div class="d-grid-3">
			<?php foreach($product as $v) { ?>
				<div class="product-box">
					<div class="sp-img">
						<a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html">
							<img src="<?=thumb($v["photo"],_upload_product_l,$v["tenkhongdau"],400,400,2,80)?>" alt="<?=$v["ten"]?>" class="img-fluid img-100">
						</a>
						<div class="splash"></div>
					</div>
					<div class="sp-info text-left">
						<div class="text-left pl-2">
							<a class="text-color fw-b d-block fs-16 line-2" href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><?=$v['ten']?></a>
						</div>
						<div class="sp-desc pb-2 pl-2">
							<?=$v['mota']?>
						</div>
						<div class="d-flex text-color pl-2">
							<div class="">Hình thức học:</div>
							<div class="pl-3"><?=$v['hinhthuc']?></div>
						</div>
						<div class="d-flex text-color pl-2">
							<div class="">Ngày khai giảng:</div>
							<div class="pl-3"><?=$v['ngaykhaigiang']?></div>
						</div>
						<div class="d-flex text-color pl-2">
							<div class="">Giờ học:</div>
							<div class="pl-3"><?=$v['giohoc']?></div>
						</div>
						<div class="d-flex text-color pl-2">
							<div class="">Lịch học:</div>
							<div class="pl-3"><?=$v['lichhoc']?></div>
						</div>
						<div class="sp-prices d-flex justify-content-between align-items-center flex-wrap">
							<div class="box-price text-color2 d-flex justify-content-between w-60 ">
								<?php if ($v['giakm']>0) { ?>
									
									<div class="spkm-gia-km fs-16 fw-b"><span><?=number_format($v["giakm"],"0",",",".")?> đ</span></div>
									<div class="spkm-gia-bt pl-1"><span><?=number_format($v["gia"],"0",",",".")?> đ</span></div>
								<?php } else { ?>
									<div class="spkm-gia-km"><span><?=number_format($v["gia"],"0",",",".")?> đ</span></div>
								<?php } ?>
							</div>
							<div class="sp-nut-box d-flex w-40 justify-content-between ">
								<div class="sp-mua nut-mua" data-id="<?=$v['id']?>"><i class="fa-solid fa-cart-shopping-fast"></i></div>
								<a class="d-inline-block pl-1 text-color2 see-more" href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html">Xem chi tiết</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</article>

<article class="brand custom">
	<div class="container">
		<div class="ve-chung-toi d-flex justify-content-between align-items-center flex-wrap">
			<h3 class="mb-3 brand-title w-30"><?=$hvdg['ten']?></h3>
			<div class="w-30">
				<img src="<?=_upload_hinhanh_l . $hvdg['photo']?>" alt="<?=$hvdg['ten']?>" class="img-fluid img-100 cook-img">
			</div>
			<div class="mb-3 w-40 text-color fw-b"><?=$hvdg['mota']?></div>
		</div>
	</div>
</article>

<article class="home-product custom pb-5">
	<div class="container">
		<h3 class="mb-3 brand-title">HÌNH ẢNH</h3>
		<div class="slick-product2">
			<?php foreach($hinhanh as $v) { ?>
			<div class="">
				<div class="slick-product-space"></div>
				<div class="">
					<a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],400,400,2,80)?>" alt="<?=$v["ten"]?>" class="img-fluid img-100"></a>
				</div>
				<div class="slick-product-space"></div>
			</div>
			<?php } ?>
		</div>
	</div>
</article>

<article class="video-khoa-hoc">
	<div class="container">
		<div class="brand-title mb-4"><?=$videokh['ten']?></div>
		<div class="d-grid-3">
			<div class="video-kh-gt-image">
				<img src="<?=_upload_hinhanh_l . $videokh['photo']?>" alt="<?=$videokh['ten']?>" class="img-fluid img-100 cook-img">
			</div>
			<?php foreach($videokhnb as $v) { ?>
				<div class="product-box">
					<div class="sp-img">
						<a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html">
							<img src="<?=thumb($v["photo"],_upload_product_l,$v["tenkhongdau"],400,400,2,80)?>" alt="<?=$v["ten"]?>" class="img-fluid img-100">
						</a>
						<div class="splash"></div>
					</div>
					<div class="sp-info text-left">
						<div class="text-left pl-2">
							<a class="text-color fw-b d-block fs-16 line-2" href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><?=$v['ten']?></a>
						</div>
						<div class="sp-desc pb-2 pl-2">
							<?=$v['mota']?>
						</div>
						<div class="d-flex text-color pl-2">
							<div class="">Hình thức học:</div>
							<div class="pl-3"><?=$v['hinhthuc']?></div>
						</div>
						<div class="d-flex text-color pl-2">
							<div class="">Ngày khai giảng:</div>
							<div class="pl-3"><?=$v['ngaykhaigiang']?></div>
						</div>
						<div class="d-flex text-color pl-2">
							<div class="">Giờ học:</div>
							<div class="pl-3"><?=$v['giohoc']?></div>
						</div>
						<div class="d-flex text-color pl-2">
							<div class="">Lịch học:</div>
							<div class="pl-3"><?=$v['lichhoc']?></div>
						</div>
						<div class="sp-prices d-flex justify-content-between align-items-center flex-wrap">
							<div class="box-price text-color2 d-flex justify-content-between w-60">
								<?php if ($v['giakm']>0) { ?>
									
									<div class="spkm-gia-km fs-16 fw-b"><span><?=number_format($v["giakm"],"0",",",".")?> đ</span></div>
									<div class="spkm-gia-bt pl-1"><span><?=number_format($v["gia"],"0",",",".")?> đ</span></div>
								<?php } else { ?>
									<div class="spkm-gia-km"><span><?=number_format($v["gia"],"0",",",".")?> đ</span></div>
								<?php } ?>
							</div>
							<div class="sp-nut-box d-flex w-40 justify-content-between w-40">
								<div class="sp-mua nut-mua" data-id="<?=$v['id']?>"><i class="fa-solid fa-cart-shopping-fast"></i></div>
								<a class="d-inline-block pl-1 text-color2 see-more" href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html">Xem chi tiết</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</article>

<article class="bsa-dev">
	<div class="container">
		<div class="bsa-dev-contain">
			<div class="brand-title mb-4"><?=$bdht['ten']?></div>
			<div class="d-flex justify-content-between align-items-end flex-wrap">
				<div class="w-40"><a href="<?=$bdht['link']?>" class="cook-more bgcolor1 text-color2 fw-b">Xem chi tiết</a></div>
				<div class="bsa-desc text-center w-60">
					<img src="<?=_upload_hinhanh_l . $bdht['photo']?>" alt="<?=$bdht['ten']?>" class="img-fluid img-100 cook-img">
				</div>
				
			</div>
		</div>
	</div>
</article>