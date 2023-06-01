<?php
$d->reset();
$sql="select noidung_$lang as noidung, chinhanh_$lang as chinhanh from #_footer";
$d->query($sql);
$footer=$d->fetch_array();
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
                        <div class="foot-title">Hoài thương spa</div>
                        <hr class="foot-hr">
                        <div class="">Trụ sở: 40 Tân bình, Tp.HCM</div>
                        <div class="">Chi nhánh số 1 Đống đa, Hà nội</div>
                        <div class="">Hotline: 12345678</div>
                        <div class="">Email: hoaithuong@gmail.com</div>
                    </div>
                    <div class="foot-menu-box">
                        <div class="text-uppercase foot-title"><a href="">Khóa học</a></div>
                        <div class="text-uppercase foot-title"><a href="">Bộ video bài giảng</a></div>
                        <div class="text-uppercase foot-title"><a href="">Giáo trình</a></div>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="foot-menu-box">
                        <div class="foot-title">Hỗ trợ khách hàng</div>
                        <hr class="foot-hr">
                        <div class=""><a href="">Bảo mật thông tin</a></div>
                        <div class=""><a href="">Chính sách học nghề</a></div>
                        <div class=""><a href="">Nguyên tắc hoàn tiền</a></div>
                        <div class=""><a href="">Phương thức thanh toán</a></div>
                    </div>
                    <div class="foot-menu-box">
                        <div class="text-uppercase foot-title">Thông tin hợp tác</div>
                        <hr class="foot-hr">
                        <div class=""><a href="">Định hướng kinh doanh</a></div>
                        <div class=""><a href="">Hợp tác kinh doanh</a></div>
                    </div>
                </div>
            </div>
            <div class="footer-box">
                <div class="footer-mxh-title">Theo dõi chúng tôi tại</div>
                <div class="">
                    <a href="<?=$row_setting["facebook"]?>"><img src="assets/images/fb.png" alt="fake mxh" width="30px"></a>
                    <a href="<?=$row_setting["messager"]?>"><img src="assets/images/mess.png" alt="fake mxh" width="30px"></a>
                    <a href="<?=$row_setting["zalo"]?>"><img src="assets/images/zalo.png" alt="fake mxh" width="30px"></a>
                    <a href="<?=$row_setting["ins"]?>"><img src="assets/images/ins.png" alt="fake mxh" width="30px"></a>
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