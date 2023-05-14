<?php
// break crumb
$breakcrumb='<li><a href="http://'.$config_url.'">'._trangchu.'</a></li><li class="active">'._sanphamnoibat.'</li>';
#share
$image_share='http://' . $config_url .'/'._upload_hinhanh_l.$row_photo["logo"];

$sql = "select id, ten_$lang as ten, tenkhongdau, photo, gia, giakm, masp, type from #_product where type='san-pham' and hienthi=1 and noibat=1 order by stt, id desc";
$d->query($sql);
$product = $d->result_array();

$tongsanpham = count($product);
$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
$url = getCurrentPageURL();
$maxR = 16;
$maxP = 5;
$paging = paging_home($product, $url, $curPage, $maxR, $maxP);
$product = $paging['source'];
?>