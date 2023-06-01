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


<div class="container">
	<h3 class="mb-3 mt-3 text-center text-uppercase brand-title"><?=$title_tcat?></h3>
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