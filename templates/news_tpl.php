<div class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="box_content">
	<div class="text-center text-capitalize td-chung"><?=$title_tcat?></div>
	<div class="content">   
		<?php foreach($tintuc as $v){?>
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
				<div class="ttuc-desc"><?=$v['mota']?></div>
			</div>
		</div>
		<?php }?>
		<div class="pagination"><div class="phantrang" ><?= $paging['paging'] ?></div></div>
	</div> 
</div>
