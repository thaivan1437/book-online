<?php

if (!defined('_source'))
    die("Error");
if (isset($_GET['id'])) {
    #tin tuc chi tiet
    $id = addslashes($_GET['id']);

    $sql_lanxem = "UPDATE #_".$table." SET luotxem=luotxem+1  WHERE id ='" . $id . "'";
    $d->query($sql_lanxem);

    $sql = "select ten_$lang as ten,mota_$lang as mota,noidung_$lang as noidung,ngaytao,thumb,luotxem,title_$lang as title,keywords_$lang as keywords,description_$lang as description, id, photo, h1, h2, h3, id_item from #_news where hienthi=1 and id='" . $id . "'";
    $d->query($sql);
    $tintuc_detail = $d->fetch_array();
    $title_temp = $title_tcat;
    $title_tcat = $tintuc_detail['ten'];
    $title_bar = $tintuc_detail['ten'];
    $title_custom = $tintuc_detail['title'];
    $keywords_custom = $tintuc_detail['keywords'];
    $description_custom = $tintuc_detail['description'];
	
	$h1_custom=$tintuc_detail['h1'];
	$h2_custom=$tintuc_detail['h2'];
	$h3_custom=$tintuc_detail['h3'];
	
	// breakcrumb
	$breakcrumb="<li><a href='http://".$config_url."'>"._trangchu." </a></li><li><a href='".$com.".html'>".$title_temp."</a></a></li></li><li class='active'>".$title_tcat."</li>";
	//share
	if($tintuc_detail["photo"]==''){
		$image_share='http://' . $config_url ._upload_hinhanh_l.$row_photo["logo"];
	}else{
		$image_share='http://' . $config_url .'/'. _upload_tintuc_l.$tintuc_detail["photo"];
    }

    #các tin cu hon
	if($tintuc_detail['id_item'] > 0) {
        $sql_khac = "select ten_$lang as ten,tenkhongdau,mota_$lang as mota, ngaytao,id,h2, h1, photo, luotxem, type from #_news where  type='".$type."' and id_item='".$tintuc_detail['id_item']."' and hienthi=1 and id <>'" . $id . "' order by stt,ngaytao desc";
        $d->query($sql_khac);
        $tintuc_khac = $d->result_array();
	} else {
        $sql_khac = "select ten_$lang as ten,tenkhongdau,mota_$lang as mota, ngaytao,id, photo,h1, h2,luotxem, type from #_news where type='".$type."' and hienthi=1 and id <>'" . $id . "' order by stt,ngaytao desc";
        $d->query($sql_khac);
        $tintuc_khac = $d->result_array();
    }
    
}else if($_GET["idc"]!=''){
    $idc = addslashes($_GET['idc']);
    
	$d->reset();
	$sql="select ten_$lang as ten, tenkhongdau, noidung_$lang as noidung, id, h1, h2, h3, title_$lang as title, keywords_$lang as keywords, description_$lang as description from #_news_item where id='".$_GET["idc"]."' order by stt, id desc";
	$d->query($sql);
	$rs_dm=$d->fetch_array();

	$noidung_c=$rs_dm["noidung"];
	
	$title_bar = $rs_dm['ten'];
	$title_tcat = $rs_dm['ten'];
    $title_custom = $rs_dm['title'];
    $keywords_custom = $rs_dm['keywords'];
    $description_custom = $rs_dm['description'];
	
	
	$sql_tintuc = "select ten_$lang as ten,tenkhongdau,mota_$lang as mota,thumb,id,h2,ngaytao,luotxem,photo, noidung_$lang as noidung, type from #_news where id_item='".$rs_dm["id"]."' and hienthi=1 order by stt,ngaytao desc";
    $d->query($sql_tintuc);
    $tintuc = $d->result_array();
	
	// breakcrumb
	$breakcrumb="<li><a href='http://".$config_url."'>"._trangchu." </a></li><li class='active'>".$title_tcat."</li>";
	//share
	$image_share='http://' . $config_url .'/'._upload_hinhanh_l.$row_photo["logo"];
	$tongsanpham = count($tintuc);
    $curPage = isset($_GET['p']) ? $_GET['p'] : 1;
    $url = getCurrentPageURL();
    $maxR = 12;
    $maxP = 5;
    $paging = paging_home($tintuc, $url, $curPage, $maxR, $maxP);
    $tintuc = $paging['source'];
} else {
    $sql_tintuc = "select ten_$lang as ten,tenkhongdau,mota_$lang as mota,thumb,id,h1,h2,ngaytao,luotxem,photo, noidung_$lang as noidung, type from #_news where type='".$type."' and hienthi=1 order by stt,ngaytao desc";
    $d->query($sql_tintuc);
	
    $tintuc = $d->result_array();
	
	// breakcrumb
	$breakcrumb="<li><a href='http://".$config_url."'>"._trangchu." </a></li><li class='active'>".$title_tcat."</li>";
	//share
	$image_share='http://' . $config_url ._upload_hinhanh_l.$row_photo["logo"];
	// $tongsanpham = count($tintuc);
    // $curPage = isset($_GET['p']) ? $_GET['p'] : 1;
    // $url = getCurrentPageURL();
    // $maxR = 12;
    // $maxP = 5;
    // $paging = paging_home($tintuc, $url, $curPage, $maxR, $maxP);
    // $tintuc = $paging['source'];
}
?>