<?php
$d->reset();
$sql_slider = "select ten_$lang as ten,photo,link, mota_$lang as mota from #_slider where hienthi=1 order by stt,id desc";
$d->query($sql_slider);
$result_slider = $d->result_array();
?>

<?php if($source=="index") { ?>
	<div class="slick-banner">
		<?php foreach($result_slider as $v) { ?>
		<div>
			<div class="position-relative banner-box">
				<div>
					<a href="<?=$v['link']?>">
						<img src="<?=thumb($v["photo"],_upload_hinhanh_l,$v["tenkhongdau"],1427,602,1,80)?>" alt="<?=$v["ten"]?>" class="img-fluid img-100">
					</a>
				</div>
				<?php if(!empty($v['mota'])) { ?>
				<div class="banner-info">
					<div class="banner-name"><?=$v['ten']?></div>
					<div class="banner-desc"><?=$v['mota']?></div>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php } ?>
	</div>
<?php } else { 
/* <div class="section-breadcrumbs" style="background: url(<?=_upload_hinhanh_l.$row_setting["tuvan"]?>);background-size:100% 100%;">
	<div class="container">
		<div class="breadcrumb-arrow"><?=$breakcrumb?></div>
	</div>
</div> */
} ?>