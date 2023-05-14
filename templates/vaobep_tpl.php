<?php
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='dnvb-gt'";
$d->query($sql);
$gt_sp=$d->fetch_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='dnvb-bn'";
$d->query($sql);
$banner_sp=$d->fetch_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, type, photo from #_news_item where type='doanh-nhan-vao-bep' and hienthi=1 order by stt, id desc";
$d->query($sql);
$danhmuc=$d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, h3, type, mota_$lang as mota, photo from #_about where type='dnvb-video' and hienthi=1 order by stt, id desc";
$d->query($sql);
$video=$d->result_array();
?>
<link rel="stylesheet" type="text/css" href="assets/css/popup.css"/>
<div><img src="<?=_upload_hinhanh_l.$banner_sp['photo']?>" alt="banner" class="img-fluid img-100"></div>
<div class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="container">
	<h3 class="mb-3 text-center text-uppercase brand-title">Doanh nhân vào bếp</h3>
	<div class="mb-5 product-list-desc"><?=$gt_sp['mota']?></div>
	<div class="d-flex flex-wrap justify-content-center align-items-center mb-5">
		<div class="dnvb-search-box search-div1">
			<select name="category" class="dnvb-inp">
				<option value="">Loại món ăn</option>
				<?php foreach($danhmuc as $item) { ?>
				<option value="<?=$item['id']?>"><?=$item['ten']?></option>
				<?php } ?>
			</select>
		</div>
		<div class="dnvb-search-box search-div2">
			<input type="text" name="postname" class="dnvb-inp" placeholder="Tìm kiếm món ăn...">
		</div>
		<button class="dnvb-search-box search-div3 cursor-pointer dnvb-search-js">
			Tìm kiếm
		</button>
	</div>
	<div class="mb-5 position-relative">
		<div id="products" class="dnvb-contain">
			<?php foreach($tintuc as $v) { ?>
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
		<div class="ajax-preloader">
			<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
		</div>
	</div>
	<div class="dhxh-vid-contain">
		<div class="vid-item1">
			<div class="video">
				<div class="images mb-3">
					<a class="xem_video" href="<?= getYoutubeIdFromUrl($video[0]['h3']) ?>">
						<img class="img-fluid video-img" style="border:solid 1px #ccc" src="http://img.youtube.com/vi/<?= getYoutubeIdFromUrl($video[0]['h3']) ?>/0.jpg" alt="<?= $video[0]['ten'] ?>">
					</a>      
				</div>
				<div class="name font-weight-bold text-center"><?= $video[0]['ten'] ?></div>
				<div style="padding: 10px;"><?= $video[0]['mota'] ?></div>
			</div>
		</div>
		<div class="vid-item2">
			<div class="video">     
				<div class="images mb-3">
					<a class="xem_video" href="<?= getYoutubeIdFromUrl($video[1]['h3']) ?>">
						<img class="img-fluid video-img" style="border:solid 1px #ccc" src="http://img.youtube.com/vi/<?= getYoutubeIdFromUrl($video[1]['h3']) ?>/0.jpg" alt="<?= $video[1]['ten'] ?>">
					</a>      
				</div>
				<div class="name font-weight-bold text-center"><?= $video[1]['ten'] ?></div>
				<div style="padding: 10px;"><?= $video[1]['mota'] ?></div>
			</div>
		</div>
		<div class="vid-item3">
			<div class="video">     
				<div class="images mb-3">
					<a class="xem_video" href="<?= getYoutubeIdFromUrl($video[2]['h3']) ?>">
						<img class="img-fluid video-img" style="border:solid 1px #ccc" src="http://img.youtube.com/vi/<?= getYoutubeIdFromUrl($video[2]['h3']) ?>/0.jpg" alt="<?= $video[2]['ten'] ?>">
					</a>      
				</div>
				<div class="name font-weight-bold text-center"><?= $video[2]['ten'] ?></div>
				<div style="padding: 10px;"><?= $video[2]['mota'] ?></div>
			</div>
		</div>
	</div>
</div>