<div style="padding-top:40px" class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="container">
	<div class="font-weight-bold text-capitalize tcon-td"><?= $tintuc_detail['ten'] ?></div>
	<div class="mb-5 tcon-content"><?=$tintuc_detail["noidung"]?></div>
	<div class="brand-title">Các bài viết khác</div>
	<div class="slick-cook2">
		<?php foreach($tintuc_khac as $v){?>
		<div class="ttuc-box">
			<div class="img-hover-box">
				<a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html">
					<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],400,267,1,80)?>" alt="<?=$v["ten"]?>" class="img-fluid img-100">
				</a>
			</div>
			<div class="text-capitalize ttuc-name"><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><?=$v['ten']?></a></div>
			<div class="ttuc-desc"><?=$v['mota']?></div>
		</div>
		<?php }?>
	</div>
</div>