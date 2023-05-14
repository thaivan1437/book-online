<article style="background-image:url(<?=_upload_hinhanh_l . $vechungtoi['photo']?>);" class="brand">
	<div class="container">
		<div class="ve-chung-toi">
			<h3 class="mb-3 brand-title" style="color:#d0b14b;"><?=$vechungtoi['ten']?></h3>
			<div class="mb-3"><?=$vechungtoi['mota']?></div>
			<div><a href="bsa-la-ai" class="btn vechungtoi-btn">Xem thêm</a></div>
		</div>
	</div>
</article>

<article class="brand">
	<div class="container">
		<div class="ve-chung-toi d-flex justify-space-between align-items-center">
			<img src="<?=_upload_hinhanh_l . $hvdg['photo']?>" alt="<?=$hvdg['ten']?>" class="img-fluid img-100 cook-img">
			<h3 class="mb-3 brand-title" style="color:#d0b14b;"><?=$hvdg['ten']?></h3>
			<div class="mb-3"><?=$hvdg['mota']?></div>
			<div><a href="bsa-la-ai" class="btn vechungtoi-btn">Xem thêm</a></div>
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
			<div class="brand-title"><?=$bdht['ten']?></div>
			<div class="bsa-desc text-center">
				<img src="<?=_upload_hinhanh_l . $bdht['photo']?>" alt="<?=$bdht['ten']?>" class="img-fluid img-100 cook-img">
			</div>
			<div class=""><a href="<?=$bdht['link']?>" class="cook-more">Xem chi tiết</a></div>
		</div>
	</div>
</article>