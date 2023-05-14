<?php if($com!="san-pham") { ?>
<div class="text-center mb-4 box-hotro">
	<div class="text-uppercase font-weight-bold htro-td">Hỗ trợ <br> trực tuyến</div>
	<div class="text-uppercase">Hotline liên hệ</div>
	<div class="font-weight-bold mb-3 htro-hot"><?=$row_setting['hotline']?></div>
	<div class="mb-3">Email: <br> <?=$row_setting['email']?></div>
	<div class="mb-3">Thời gian làm việc <br> <?=$row_setting['h6_'.$lang]?></div>
	<div><img src="assets/images/ic3.png" class="img-fluid"></div>
</div>
<?php } ?>
<div class="text-uppercase text-center left-tcon-td">Tin tức nổi bật</div>
<div class="slick-doc">
	<?php foreach($ttuc as $v) { ?>
	<div>
		<div class="d-lg-flex d-md-flex d-sm-flex justify-content-between mb-4 ttuc-box">
			<div class="ttuc-box-left">
				<div class="img-hover-box">
					<a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html">
						<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],256,151,1,80)?>" alt="<?=$v["ten"]?>" class="img-fluid img-100">
					</a>
				</div>
			</div>
			<div class="ttuc-box-right">
				<div><span class="ttuc-ngay"><?=date("d/m/Y", $v['ngaytao'])?></span></div>
				<div class="text-capitalize ttuc-name"><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><?=$v['ten']?></a></div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
<div class="left-tcon-video">
	<div class="ttuc-right-name">Video</div>
	<iframe id="vid-frame" src="https://www.youtube.com/embed/<?=getYoutubeIdFromUrl($row_setting['youtube'])?>"></iframe>
</div>