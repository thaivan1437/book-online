<?php
$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, h1, h2, photo, mota_$lang as mota, type from #_news where type='doanh-nhan-vao-bep' and hienthi=1 order by stt, id desc");
$dnvb = $d->result_array();

$quycach = [];
if(!empty($row_detail['tag_slug'])) {
	$quycach = explode(',', $row_detail['tag_slug']);
}
?>

<link rel="stylesheet" href="assets/js/magiczoomplus/magiczoomplus.css"/>
<script src="assets/js/magiczoomplus/magiczoomplus.js" defer></script>
<!-- addthis  -->
<?php /* <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5de5d7780248d788" defer></script> */ ?>
<!-- addthis  -->

<div style="padding-top:50px" class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="mb-5 container">
	<div class="d-md-flex justify-content-between">
		<div class="spct-info-left">
		<div class="app-figure" id="zoom-fig">
			<a id="Zoom-1" class="MagicZoom" href="<?=_upload_product_l.$row_detail["photo"]?>"	>
				<img class="img-fluid img-100" src="<?=thumb($row_detail["photo"],_upload_product_l,$row_detail["tenkhongdau"],500,680,2,80)?>" alt="<?=$row_detail["ten"]?>">
			</a>
			<div class="selectors slick-hakt">
				<div class="item_zoom">
					<a data-zoom-id="Zoom-1" href="<?= _upload_product_l.$row_detail['photo'] ?>" data-image="<?=thumb($row_detail["photo"],_upload_product_l,$row_detail["tenkhongdau"],500,680,2,80)?>" >
						<img src="<?=thumb($row_detail["photo"],_upload_product_l,$row_detail["tenkhongdau"],125,125,2,80)?>" alt="<?=$row_detail["ten"]?>" class="img-fluid img-100">
					</a>
				</div>
				<?php foreach ($row_hinhanhsp11 as $k => $v1) { ?>
				<div class="item_zoom">
					<a data-zoom-id="Zoom-1" href="<?= _upload_product_l.$v1['photo'] ?>" data-image="<?=thumb($v1["photo"],_upload_product_l,$v1["tenkhongdau"],500,680,2,80)?>" >
						<img src="<?=thumb($v1["photo"],_upload_product_l,$v1["tenkhongdau"],125,125,2,80)?>" alt="<?=$v1["ten"]?>" class="img-fluid img-100">
					</a>
				</div>
				<?php }?>
			</div>
		</div>
		</div>
		<div class="spct-info-right">
			<div class=" spct-ten"><?=$row_detail['ten']?></div>
			<div class="spct-desc"><?=$row_detail['mota']?></div>
			<?php if(!empty($quycach)) { ?>
			<div class="quycach">Quy cách</div>
			<div class="d-flex flex-wrap align-items-center">
				<?php foreach($quycach as $item) { ?>
				<div class="quycach-item"><?=$item?></div>
				<?php } ?>
			</div>
			<?php } ?>
			<?php /*
			<?php if($row_detail['gia']>0) { ?>
			<div class="spct-gia">Giá <span><?=number_format($row_detail["gia"],"0",",",".")?> đ </span></div>
			<?php } else { ?>
			<div class="spct-gia">Giá <span>Liên hệ</span></div>
			<?php } ?>
			<div class="text-center text-uppercase"><a href="lien-he.html" class="btn waves-effect spct-btn" >Mua ngay</a></div>
			*/ ?>
		</div>
	</div>
</div>

<?php if(!empty($sanpham_khac)) { ?>
	<div class="related-product">
	<div class="container">
		<div class="related-title">Sản phẩm tương tự</div>
		<div class="slick-related">
			<?php foreach($sanpham_khac as $v) { ?>
			<div class="text-center">
				<div class="related-img">
					<a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html">
						<img src="<?=thumb($v["photo"],_upload_product_l,$v["tenkhongdau"],400,400,1,80)?>" alt="<?=$v["ten"]?>" class="img-fluid img-100">
					</a>
				</div>
				<div class="font-weight-bold"><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html"><?=$v['ten']?></a></div>
			</div>
			<?php } ?>
		</div>
		<?php if(count($sanpham_khac) > 6) { ?>
		<div class="text-center">
			<div class="brand-arrow-div detail-slick-arr"></div>
		</div>
		<?php } ?>
	</div>
</div>
<?php } ?>

<div class="container">
	<div class="product-detail-contain">
		<div class="product-detail-left">
			<div class="product-detail-head product-detail-tab-js active" rel="#detail1">
				<img src="assets/images/ic10.png" alt="icon" class="img-fluid mr-3">
				<span>Thành phần</span>
			</div>
			<div class="product-detail-head product-detail-tab-js" rel="#detail2">
				<img src="assets/images/ic11.png" alt="icon" class="img-fluid mr-3">
				<span>Hướng dẫn sử dụng</span>
			</div>
		</div>
		<div class="product-detail-right">
			<div id="detail1" style="display: block;" class="product-detail-tabcontent">
				<?=$row_detail['noidung']?>
			</div>
			<div id="detail2" class="product-detail-tabcontent">
				<?=$row_detail['tag']?>
			</div>
		</div>
	</div>
	<hr class="marketing-hr detail-product">
	<div class="other-cook-title">Các công thức nấu ăn</div>
	<div class="slick-cook2">
		<?php foreach($dnvb as $v) { ?>
		<div class="">
			<div class="cook-slide-space"></div>
			<div class="cook-box">
				<div class="mb-3">
					<a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html">
						<img src="<?=thumb($v["photo"],_upload_tintuc_l,$v["tenkhongdau"],400,267,1,80)?>" alt="cook" class="img-fluid img-100 cook-img">
					</a>
				</div>
				<div class="cook-type"><?=$v['h1']?></div>
				<div class="mb-2"><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html" class="cook-name"><?=$v['ten']?></a></div>
				<div class="mb-3 cook-desc"><?=$v['h2']?></div>
				<div class=""><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>.html" class="cook-view">Xem cách chế biến</a></div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>