<?php
$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='sp-gt'";
$d->query($sql);
$gt_sp=$d->fetch_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='dhxh-bn'";
$d->query($sql);
$banner_sp=$d->fetch_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, h3, type, mota_$lang as mota, photo from #_about where type='dhxh-video' and hienthi=1 order by stt, id desc";
$d->query($sql);
$video=$d->result_array();
?>
<link rel="stylesheet" type="text/css" href="assets/css/popup.css"/>
<div><img src="<?=_upload_hinhanh_l.$banner_sp['photo']?>" alt="banner" class="img-fluid img-100"></div>
<div class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="container">
	<h3 class="mb-3 text-center text-uppercase brand-title"><?=$title_tcat?></h3>
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
	<h3 class="mb-3 text-center text-uppercase brand-title">Truyền thông</h3>
	<div class="content">   
		<?php foreach($tintuc as $v){?>
		<div class="d-lg-flex d-md-flex d-sm-flex justify-content-between mb-4 ttuc-box">
			<div class="ttuc-box-left">
				<div class="sp-img">
					<a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html">
						<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],400,267,1,80)?>" alt="<?=$v["ten"]?>" class="img-fluid img-100">
					</a>
					<div class="splash"></div>
				</div>
			</div>
			<div class="ttuc-box-right">
				<div class="text-capitalize ttuc-name"><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><?=$v['ten']?></a></div>
				<div class="ttuc-desc"><?=$v['mota']?></div>
			</div>
		</div>
		<?php }?>
		<div class="pagination"><div class="phantrang" ><?= $paging['paging'] ?></div></div>
	</div>
</div>