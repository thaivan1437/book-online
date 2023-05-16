<article style="" class="brand">
	<div class="container">
		<div class="d-flex flex-wrap">
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
				<div class="d-flex justify-space-between">
					<?php foreach($vechungtoi2 as $k => $v) { ?>
						<div class="wrap-about2-images">
							<img src="<?=_upload_tintuc_l.$v["photo"]?>" alt="<?=$v["ten"]?>" class="img-fluid img-100">
						</div>
					<?php }?>
				</div>
				<div class="d-flex justify-space-between bgcolor1 text-color2">
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

<article class="brand custom">
	<div class="container">
		<div class="ve-chung-toi d-flex justify-space-between align-items-center">
			<h3 class="mb-3 brand-title w-30"><?=$hvdg['ten']?></h3>
			<div class="w-30">
				<img src="<?=_upload_hinhanh_l . $hvdg['photo']?>" alt="<?=$hvdg['ten']?>" class="img-fluid img-100 cook-img">
			</div>
			<div class="mb-3 w-40"><?=$hvdg['mota']?></div>
		</div>
	</div>
</article>

<article class="home-product custom">
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


<article class="home-product">
	<div class="container">
		<h3 class="home-product-title"><?=$gt_sp['ten']?></h3>
		<div class="home-product-desc"><?=$gt_sp['mota']?></div>
		<div class="slick-product2">
			<?php foreach($spnb as $v) { ?>
			<div class="">
				<div class="slick-product-space"></div>
				<div class="">
					<a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><img src="<?=thumb($v["photo"],_upload_product_l,$v["tenkhongdau"],400,400,2,80)?>" alt="<?=$v["ten"]?>" class="img-fluid img-100"></a>
				</div>
				<div class="slick-product-space"></div>
			</div>
			<?php } ?>
		</div>
		<div class="text-center">
			<div class="slick-product1">
				<?php foreach($spnb as $v) { ?>
				<div class="">
					<div class="">
						<div class="slick-product1-name"><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><?=$v['ten']?></a></div>
					</div>
					<div class="">
						<div class="brand-arrow-div home-product-arrow"></div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</article>

<article class="community">
	<div class="container">
		<div class="promise-contain">
			<div class="promise-left">
				<div class="mb-3">
					<img src="<?=thumb($cddn_lh["photo"],_upload_hinhanh_l,$cddn_lh["tenkhongdau"],300,300,1,80)?>" alt="avatar" class="img-fluid community-img">
				</div>
				<div class="promise-name"><?=$cddn_lh['h1']?></div>
				<div class="font-weight-bold"><?=$cddn_lh['h2']?></div>
			</div>
			<div class="promise-right">
				<div class="promise-title"><?=$cddn_lh['ten']?></div>
				<div class="promise-talk"><?=$cddn_lh['mota']?></div>
				<div class=""><img src="<?=thumb($cddn_ck["photo"],_upload_hinhanh_l,$cddn_ck["tenkhongdau"],200,100,2,80)?>" alt="sign" class="img-fluid"></div>
			</div>
		</div>
		<div class="community-contain">
			<div class="community-left">
				<div class="brand-title"><?=$cddn_gt['ten']?></div>
				<div class=""><?=$cddn_gt['mota']?></div>
			</div>
			<div class="community-right">
				<div class="slick-community">
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
		</div>
	</div>
</article>
<article class="cook">
	<div class="container">
		<div class="cook-contain">
			<div class="cook-left">
				<?=$dnvb_gt['ten']?>
			</div>
			<div class="cook-right">
				<div class="mb-3"><?=$dnvb_gt['mota']?></div>
				<div class=""><a href="doanh-nhan-vao-bep" class="cook-more">Xem thêm công thức</a></div>
			</div>
		</div>
		<div class="slick-cook">
			<?php foreach($dnvb as $v) { ?>
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
	</div>
</article>
<article class="bsa-dev">
	<div class="container">
		<div class="bsa-dev-contain">
			<div class="brand-title mb-4"><?=$bdht['ten']?></div>
			<div class="d-flex justify-space-between align-items-end flex-wrap">
				<div class="w-40"><a href="<?=$bdht['link']?>" class="cook-more bgcolor1 text-color2 fw-b">Xem chi tiết</a></div>
				<div class="bsa-desc text-center w-60">
					<img src="<?=_upload_hinhanh_l . $bdht['photo']?>" alt="<?=$bdht['ten']?>" class="img-fluid img-100 cook-img">
				</div>
				
			</div>
		</div>
	</div>
</article>