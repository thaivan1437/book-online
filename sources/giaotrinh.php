
<?php

if (!defined('_source'))
  die("Error");

  $breakcrumb='<li><a href="http://'.$config_url.'">'._trangchu.'</a></li><li class="active"> Giáo trình</li>';
  
 
  $d->reset();
  $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo, h3 as link from #_about where type='bo-sach'";
  $d->query($sql);
  $rs_bosach=$d->result_array();

  $d->reset();
  $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo, h3 as link from #_about where type='tay-nghe'";
  $d->query($sql);
  $rs_taynghe=$d->result_array();

  $d->reset();
  $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota,noidung_$lang as noidung, photo, h3 as link from #_about where type='book'";
  $d->query($sql);
  $rs_book=$d->result_array();

  $d->reset();
  $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo, h3 as link from #_about where type='giang-vien-danh-gia'";
  $d->query($sql);
  $rs_danhgia=$d->result_array();

  $d->reset();
  $sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo, h3 as link from #_about where type='faq'";
  $d->query($sql);
  $rs_faq=$d->result_array();


  if (!empty($_POST)) {
    $data['ten'] = $_POST['ten'];
    $data['diachi'] = $_POST['diachi'];
    $data['dienthoai'] = $_POST['dienthoai'];
    $data['email'] = $_POST['email'];
    $data['tieude'] = $_POST['tieude1'];
    $data['noidung'] = $_POST['noidung'];
    $data['ngaytao'] = time();
    $data['view'] = 0;
    $d->reset();
    $d->setTable('contact');
    $d->insert($data);
    if (!$mail->Send()) {
      transfer("Có lỗi xảy ra!", "index.html");
    } else {
      transfer("Gửi liên hệ thành công!<br/>", "index.html");
    }
  }

?>