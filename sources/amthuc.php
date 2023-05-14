<?php

if (!defined('_source'))
    die("Error");
if (isset($_GET['id'])) {
    #tin tuc chi tiet
    $id = addslashes($_GET['id']);

    $sql_lanxem = "UPDATE #_".$table." SET luotxem=luotxem+1  WHERE id ='" . $id . "'";
    $d->query($sql_lanxem);

    $sql = "select ten_$lang as ten,mota_$lang as mota,noidung_$lang as noidung,muc_luong,dia_diem,gioi_tinh,gio_lam,kinh_nghiem,trinh_do,ngaytao,title_$lang as title,keywords_$lang as keywords,description_$lang as description, photo, h1, h2, h3 from #_$table where hienthi=1 and id='" . $id . "'";
    $d->query($sql);
    $tintuc_detail = $d->fetch_array();
    $title_bar = $tintuc_detail['ten'];
    $title_custom = $tintuc_detail['title'];
    $keywords_custom = $tintuc_detail['keywords'];
    $description_custom = $tintuc_detail['description'];
	
	$h1_custom=$tintuc_detail['h1'];
	$h2_custom=$tintuc_detail['h2'];
	$h3_custom=$tintuc_detail['h3'];
	
	// breakcrumb
	$breakcrumb="<li><a href='http://".$config_url."'>"._trangchu." </a></li><li><a href='".$com."'>".$title_tcat." </a></li><li class='active'>".$tintuc_detail["ten"]."</li>";
	$title_tcat=$tintuc_detail["ten"];
	//share
	if($tintuc_detail["photo"]==''){
		$image_share='http://' . $config_url.'/' ._upload_hinhanh_l.$row_photo["logo"];
	}else{
		$image_share='http://' . $config_url .'/'. _upload_tintuc_l.$tintuc_detail["photo"];
	}
	
	
    #các tin cu hon
    $sql_khac = "select ten_$lang as ten,mota_$lang as mota, tenkhongdau,ngaytao,id,luotxem,photo,type from #_$table where type='".$type."' and hienthi=1 and id <>'" . $id . "' order by stt,ngaytao desc";
    $d->query($sql_khac);
    $tintuc_khac = $d->result_array();
} else {
    $sql_tintuc = "select ten_$lang as ten,tenkhongdau,mota_$lang as mota,noidung_$lang as noidung,thumb,id,ngaytao,luotxem,photo, type from #_$table where type='".$type."' and hienthi=1 order by stt,ngaytao desc";
    $d->query($sql_tintuc);
    $tintuc = $d->result_array();
	
	// breakcrumb
	$breakcrumb="<li><a href='http://".$config_url."'>"._trangchu." </a></li><li class='active'>".$title_tcat."</li>";
	//share
	$image_share='http://' . $config_url.'/' ._upload_hinhanh_l.$row_photo["logo"];
	$tongsanpham = count($tintuc);
    $curPage = isset($_GET['p']) ? $_GET['p'] : 1;
    $url = getCurrentPageURL();
    $maxR = 12;
    $maxP = 10;
    $paging = paging_home($tintuc, $url, $curPage, $maxR, $maxP);
    $tintuc = $paging['source'];
}
?>