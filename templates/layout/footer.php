<?php
$d->reset();
$sql="select noidung_$lang as noidung, chinhanh_$lang as chinhanh from #_footer";
$d->query($sql);
$footer=$d->fetch_array();
?>
<footer class="footer">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <div class="ft-cty"><?=$row_setting['ten_'.$lang]?></div>
                <div class="italic"><?=$row_setting['slogan_'.$lang]?></div>
            </div>
            <div>
				<?php foreach($rs_icon as $v){?>
					<a href="<?=$v["url"]?>" target="_blank" rel="nofollow">
						<img src="<?=_upload_icon_l.$v["photo"]?>" alt="<?=$v["ten_vi"]?>">
					</a>
				<?php }?>
            </div>
        </div>
        <hr class="ft-main-hr">
        <div class="d-flex justify-content-between flex-wrap">
            <div class="ft-box1">
                <div class="ft-title">Thông tin liên hệ</div>
                <hr class="ft-hr">
                <div class="mb-1 ft-info"><i class="fa fa-map-marker ft-fa" aria-hidden="true"></i> Địa chỉ: <?=$row_setting['diachi_'.$lang]?></div>
                <div class="mb-1 ft-info"><i class="fa fa-phone ft-fa" aria-hidden="true"></i> Điện thoại: <?=$row_setting['hotline']?></div>
                <div class="mb-1 ft-info"><i class="fa fa-envelope ft-fa" aria-hidden="true"></i> Email: <?=$row_setting['email']?></div>
                <div class="mb-1 ft-info"><i class="fa fa-clock-o ft-fa" aria-hidden="true"></i> Giờ làm việc: <?=$row_setting['h6_'.$lang]?></div>
            </div>
            <div class="ft-box2">
                <div class="ft-title">Chúng tôi là ai?</div>
                <hr class="ft-hr">
                <div class="mb-1"><a href="chung-toi-la-ai.html">Chúng tôi là ai </a></div>
                <div class="mb-1"><a href="doanh-nhan-vao-bep.html">Doanh nhân vào bếp </a></div>
            </div>
            <div class="ft-box2">
                <div class="ft-title">Sản phẩm</div>
                <hr class="ft-hr">
                <?php foreach($rs_list as $v) { ?>
                <div class="mb-1"><a href="<?=$v['type']?>/<?=$v['tenkhongdau']?>-<?=$v['id']?>/"><?=$v['ten']?> </a></div>
                <?php } ?>
            </div>
            <div class="ft-box2">
                <div class="ft-title">Liên kết nhanh</div>
                <hr class="ft-hr">
                <div class="mb-1"><a href="tin-tuc-su-kien.html">Tin tức & Sự kiện </a></div>
                <div class="mb-1"><a href="phat-trien-cung-bsa.html">Phát triển cùng BSA </a></div>
                <div class="mb-1"><a href="lien-he.html">Liên hệ</a></div>
            </div>
        </div>
    </div>
</footer>

<div class="fixed-phone">
    <img src="assets/images/ic_call.png" alt="call" class="mr-1 img-fluid">
    <a href="tel:<?=$row_setting['hotline']?>">
       <?=$row_setting['hotline']?> 
    </a>
</div>