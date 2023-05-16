<?php

if (!defined('_source'))
    die("Error");

$image_share='http://' . $config_url .'/'.thumb($row_photo["logo"],_upload_hinhanh_l,"image-share",250,200,2,80);

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='sp-gt'";
$d->query($sql);
$gt_sp=$d->fetch_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='ve-chung-toi'";
$d->query($sql);
$vechungtoi=$d->fetch_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, photo, mota_$lang as mota from #_about where type='dac-diem' and hienthi=1 order by stt, id desc");
$vechungtoi2 = $d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo, h3 as link from #_time where type='hoc-vien-danh-gia'";
$d->query($sql);
$hvdg=$d->fetch_array();


$d->reset();
$sql = "select ten_$lang as ten,id,tenkhongdau,thumb,photo,gia,giakm,rate, luot_rate, id_list, mota_$lang as mota, spkm, masp, spbc,type from #_product where hienthi=1 and noibat=1 and type='khoa-hoc' order by stt, id desc limit 0,3";
$d->query($sql);
$product = $d->result_array();

$d->reset();
$d->query("select id, ten_$lang as ten, tenkhongdau, photo, mota_$lang as mota from #_about where type='hinh-anh' and hienthi=1 order by stt, id desc");
$hinhanh = $d->result_array();


$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='video-khoa-hoc'";
$d->query($sql);
$videokh=$d->fetch_array();

$d->reset();
$sql = "select ten_$lang as ten,id,tenkhongdau,thumb,photo,gia,giakm,rate, luot_rate, id_list, mota_$lang as mota, spkm, masp, spbc,type from #_product where hienthi=1 and noibat=1 and type='video-khoa-hoc' order by stt, id desc limit 0,2";
$d->query($sql);
$videokhnb = $d->result_array();

// $d->reset();
// $d->query("select id, ten_$lang as ten, tenkhongdau, photo from #_about where type='thuong-hieu' and hienthi=1 order by stt, id desc");
// $logo_th = $d->result_array();

// $d->reset();
// $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, h1, h2, photo from #_time where type='cddn-lh'";
// $d->query($sql);
// $cddn_lh=$d->fetch_array();

// $d->reset();
// $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='cddn-gt'";
// $d->query($sql);
// $cddn_gt=$d->fetch_array();

// $d->reset();
// $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='chu-ky'";
// $d->query($sql);
// $cddn_ck=$d->fetch_array();

// $d->reset();
// $d->query("select id, ten_$lang as ten, tenkhongdau, photo, mota_$lang as mota from #_about where type='cong-dong-doanh-nghiep' and hienthi=1 order by stt, id desc");
// $cddn = $d->result_array();

// $d->reset();
// $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo from #_time where type='dnvb-gt'";
// $d->query($sql);
// $dnvb_gt=$d->fetch_array();

// $d->reset();
// $d->query("select id, ten_$lang as ten, tenkhongdau, photo, mota_$lang as mota,h1, h2, type from #_news where type='doanh-nhan-vao-bep' and hienthi=1 and tinnoibat=1 order by stt, id desc");
// $dnvb = $d->result_array();

$d->reset();
$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo, h3 as link from #_time where type='tai-lieu-giao-trinh'";
$d->query($sql);
$bdht=$d->fetch_array();
?>