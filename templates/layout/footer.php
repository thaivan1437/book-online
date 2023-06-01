<?php
$d->reset();
$sql="select noidung_$lang as noidung, chinhanh_$lang as chinhanh from #_footer";
$d->query($sql);
$footer=$d->fetch_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, photo, mota_$lang as mota, type from #_about where type='ho-tro-khach-hang' and hienthi=1 order by stt, id desc");
$hotrokhachhang = $d->result_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, photo, mota_$lang as mota, type from #_about where type='thong-tin-hop-tac' and hienthi=1 order by stt, id desc");
$thongtinhoptac = $d->result_array();

?>
<footer class="footer">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="footer-box">
                <div class="mb-4 mb-text-center">
                    <a href=""><img src="<?=_upload_hinhanh_l.$row_photo['photo']?>" alt="logo" class="logo-img mb-foot-logo"></a>
                </div>
                <div class="d-flex flex-wrap justify-content-between mb-5">
                    <div class="foot-menu-box">
                        <div class="foot-title"><?=$row_setting['ten_vi']?> </div>
                        <hr class="foot-hr">
                        <div class=""><?=$row_setting['diachi_vi']?> </div>
                        <div class="">Hotline: <?=$row_setting['hotline']?> </div>
                        <div class="">Email: <?=$row_setting['email']?> </div>
                    </div>
                    <div class="foot-menu-box">
                        <div class="text-uppercase foot-title"><a href="khoa-hoc.html">Khóa học</a></div>
                        <div class="text-uppercase foot-title"><a href="video-khoa-hoc.html">Bộ video bài giảng</a></div>
                        <div class="text-uppercase foot-title"><a href="giao-trinh.html">Giáo trình</a></div>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="foot-menu-box">
                        <div class="foot-title">Hỗ trợ khách hàng</div>
                        <hr class="foot-hr">
                        <?php foreach ($hotrokhachhang as $k => $v) { ?>
                            <div class=""><a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html"><?=$v["ten"]?></a></div>
                        <?php }  ?>
                    </div>
                    <div class="foot-menu-box">
                        <div class="text-uppercase foot-title">Thông tin hợp tác</div>
                        <hr class="foot-hr">
                        <?php  foreach ($thongtinhoptac as $k => $v) { ?>
                            <div class=""><a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>.html"><?=$v["ten"]?></a></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="footer-box">
                <div class="footer-mxh-title">Theo dõi chúng tôi tại</div>
                <!-- <div class="">
                    <a href="<?=$row_setting["facebook"]?>"><img src="assets/images/fb.png" alt="fake mxh" width="30px"></a>
                    <a href="<?=$row_setting["messager"]?>"><img src="assets/images/mess.png" alt="fake mxh" width="30px"></a>
                    <a href="<?=$row_setting["zalo"]?>"><img src="assets/images/zalo.png" alt="fake mxh" width="30px"></a>
                    <a href="<?=$row_setting["ins"]?>"><img src="assets/images/ins.png" alt="fake mxh" width="30px"></a>
                </div> -->
                <div>
                    <?php foreach ($rs_icon as $k => $v ) { ?>
                        <a href="<?=$v["url"]?>"><img src="<?=_upload_icon_l.$v["photo"]?>" alt="<?=$v["ten"]?>" width="30px"></a>
                    <?php } ?>
                </div>
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