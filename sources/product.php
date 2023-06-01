<?php

if (!defined('_source'))
    die("Error");

@$idl = addslashes($_GET['idl']);
@$idc = addslashes($_GET['idc']);
@$idi = addslashes($_GET['idi']);
@$id = addslashes($_GET['id']);
if ($id != '') {
    # Cap nhat so lan xem
    $sql_lanxem = "UPDATE #_product SET luotxem=luotxem+1  WHERE id ='" . $id . "'";
    $d->query($sql_lanxem);

	
    $d->reset();
    $sql_detail = "select title_$lang as title,keywords_$lang as keywords,description_$lang as description,id_list,id,photo,photo1,ten_$lang as ten,tenkhongdau,gia,giakm,noidung_$lang as noidung,luotxem, list_id,mota_$lang as mota,masp,id_item, h1, h2, h3,rate, luot_rate, tag_$lang as tag, tag_slug_$lang as tag_slug, spkm from #_product where hienthi=1 and id='" . $id . "'";
    $d->query($sql_detail);
    $row_detail = $d->fetch_array();
	
	$x = explode(",",$row_detail['tag']);
	foreach($x as $k2=>$v2){
		if($v2){
			$list_kw[trim($v2)] = 1;
		}
	}
	
	$d->reset();
	$sql="select ten_$lang as ten, tenkhongdau, id, type from #_product_list where find_in_set(".$row_detail["id_list"].", replace(set_level, '|', ','))>0 and hienthi=1 order by stt, id desc";
	$d->query($sql);
	$rs_menu_left=$d->result_array();
	$title_tcat = $row_detail['ten'];
    $title_bar = $row_detail['ten'];
    $title_custom = $row_detail['title'];
    $keywords_custom = $row_detail['keywords'];
    $description_custom = $row_detail['description'];
	// break crumb
	$breakcrumb='<li><a href="http://'.$config_url.'">'._trangchu.'</a></li>';
	$arr=explode(",",$row_detail["list_id"]);
	if(!empty($arr)){
		foreach($arr as $v){
			
			$d->query("select tenkhongdau, ten_$lang as ten, id, type from #_product_list where id='".$v."'");
			$rs=$d->fetch_array();
			if(!empty($rs)){
			$breakcrumb.='<li><a href="'.$rs['type'].'/'.$rs["tenkhongdau"].'-'.$rs["id"].'/">'.$rs["ten"].'</a> </li>';
			}
		}
	}
	$breakcrumb.='<li class="active">'.$row_detail["ten"].'</li>';
	
	$h1_custom=$row_detail['h1'];
	$h2_custom=$row_detail['h2'];
	$h3_custom=$row_detail['h3'];
	//share
	if($row_detail["photo"]==''){
		$image_share='http://' . $config_url .'/'._upload_hinhanh_l.$row_photo["logo"];
	}else{
		$image_share='http://' . $config_url .'/'. _upload_product_l.$row_detail["photo"];
	}
    $sql_hinhanh = "select photo,thumb,thumb1,id from #_product_hinhanh where hienthi=1 and id_photo = '" . $row_detail['id'] . "' order by stt,id desc";
    $d->query($sql_hinhanh);
	$row_hinhanhsp11 = $d->result_array();
	
	$temp_parent = 0;
	if(!empty($row_detail['id_list'])) {
		if(!empty($row_detail['id_item'])) {
			$temp_parent = $row_detail['id_item'];
		} else {
			$temp_parent = $row_detail['id_list'];
		}
	}

	if($temp_parent > 0) {
		$d->reset();
		$sql_sanphamkhac = "select id,thumb,ten_$lang as ten,photo,tenkhongdau,gia,masp,spbc,giakm,rate, luot_rate,noibat, ngaytao, luotxem, id_list, spkm, spbc, type from #_product where hienthi=1 and id !='" . $row_detail["id"] . "' and find_in_set('" . $temp_parent . "',list_id)>0 and type='".$type."' order by stt,ngaytao desc";
		$d->query($sql_sanphamkhac);
		$sanpham_khac = $d->result_array();
	} else {
		$d->reset();
		$sql_sanphamkhac = "select id,thumb,ten_$lang as ten,photo,tenkhongdau,gia,masp,spbc,giakm,rate, luot_rate,noibat, ngaytao, luotxem, id_list, spkm, spbc, type from #_product where hienthi=1 and id !='" . $row_detail["id"] . "' and type='".$type."' order by stt,ngaytao desc";
		$d->query($sql_sanphamkhac);
		$sanpham_khac = $d->result_array();
	}

	// $tongsanpham = count($sanpham_khac);
    // $curPage = isset($_GET['p']) ? $_GET['p'] : 1;
    // $url = getCurrentPageURL();
    // $maxR = 6;
    // $maxP = 5;
    // $paging = paging_home($sanpham_khac, $url, $curPage, $maxR, $maxP);
    // $sanpham_khac = $paging['source'];
	
	
	$d->reset();
    $sql_goiy = "select id,thumb,ten_$lang as ten,photo,tenkhongdau,gia,masp,spbc,giakm,rate, luot_rate,noibat, luotxem, id_list, spkm, spbc from #_product where hienthi=1 and id !='" . $row_detail["id"] . "'  order by stt,ngaytao desc limit 0,8";
    $d->query($sql_goiy);
    $sp_goiy = $d->result_array();
	
	//Lấy tab
	$d->reset();
	$sql="select ten_$lang as ten, noidung_$lang as noidung from #_product_tab where id_photo='".$id."' order by stt, id desc";
	$d->query($sql);
	$rs_tab=$d->result_array();
	
	//Lấy màu
	$d->reset();
	$sql="select * from #_product_color where id_item='".$id."' order by stt, id desc";
	$d->query($sql);
	$rs_color=$d->result_array();
	
	
	// Lấy comment
	$d->reset();
	$sql="select * from #_comment where id_sp='".$row_detail["id"]."' and active=1 order by id desc";
	$d->query($sql);
	$total = $d->num_rows();
	
	$d->reset();
	$sql="select * from #_comment where id_sp='".$row_detail["id"]."' and active=1 order by id desc limit 0,4";
	$current = 4;
	$d->query($sql);
	$rs_comment=$d->result_array();
	
	if(isAjaxRequest()){
		
		
		$total = $_POST['total'];
		$cur = $_POST['current'];
		$xcur = 4;
		if(($xcur+$cur) > $total){
			$xcur = $total - $cur;
		}
		$d->reset();
		$d->query("select * from #_comment where active = 1  order by id desc limit $cur,$xcur");
		$product = $d->result_array();
		
		$xdata['source'] = getData(_template."ajax_doanhnghiep_comment_tpl.php",array("product"=>$product));
		
		$xdata['current'] = $cur+$xcur;
		echo json_encode($xdata);
		die();
		
		
		
	}
	//sản phẩm đã xem
	$flag=0;
		
	if(is_array($_SESSION['spxem'])){
		$max=count($_SESSION['spxem']);
		
		for($i=0;$i<$max;$i++){
			if($id==$_SESSION['spxem'][$i]['id']){
				$flag=1;
				break;
				
			}
		}
		if($flag==1)
		{
			
		}else{
		$_SESSION['spxem'][$max]['id']=$id;
		$_SESSION['spxem'][$max]['ten']=$row_detail['ten'];
		$_SESSION['spxem'][$max]['tenkhongdau']=$row_detail['tenkhongdau'];
		$_SESSION['spxem'][$max]['photo']=$row_detail['photo'];
		$_SESSION['spxem'][$max]['thumb']=$row_detail['thumb'];
		$_SESSION['spxem'][$max]['gia']=$row_detail['gia'];
		$_SESSION['spxem'][$max]['giakm']=$row_detail['giakm'];
		}
	}
	else{
		$_SESSION['spxem']=array();
		$_SESSION['spxem'][0]['id']=$id;
		$_SESSION['spxem'][0]['ten']=$row_detail['ten'];
		$_SESSION['spxem'][0]['tenkhongdau']=$row_detail['tenkhongdau'];
		$_SESSION['spxem'][0]['photo']=$row_detail['photo'];
		$_SESSION['spxem'][0]['thumb']=$row_detail['thumb'];
		$_SESSION['spxem'][0]['gia']=$row_detail['gia'];
		$_SESSION['spxem'][0]['giakm']=$row_detail['giakm'];
	}
	function spxem_exists($id){
		$id=intval($id);
		$max=count($_SESSION['spxem']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($id==$_SESSION['spxem'][$i]['id']){
				$flag=1;
				break;
			}
		}
		return $flag;
	}
} else if ($idc != '') {
    $d->query("select ten_$lang as ten,id, id_parent, set_level,avata, photo, h1, h2, h3,noidung_$lang as noidung, title_$lang as title, keywords_$lang as keywords, description_$lang as description,com, table_product_list.* from #_product_list where id='" . $idc . "'");
    $rs_menu = $d->fetch_array();
	
	// break crumb
	$breakcrumb='<li><a href="http://'.$config_url.'">'._trangchu.'</a></li>';
	$arr=explode("|",$rs_menu["set_level"]);
	foreach($arr as $v){
		if($v!=''){
			$d->query("select tenkhongdau, ten_$lang as ten, id from #_product_list where id='".$v."'");
			$rs=$d->fetch_array();
			
			$breakcrumb.='<li><a href="'.$rs["tenkhongdau"].'-'.$rs["id"].'/">'.$rs["ten"].'</a></li>';
		}
	}
	$breakcrumb.="<li class='active'>".$rs_menu["ten"]."</li>";
	
	$h1_custom=$rs_menu['h1'];
	$h2_custom=$rs_menu['h2'];
	$h3_custom=$rs_menu['h3'];
	$title_custom = $rs_menu['title'];
    $keywords_custom = $rs_menu['keywords'];
    $description_custom = $rs_menu['description'];
	//share
	if($row_detail["photo"]==''){
		$image_share='http://' . $config_url .'/'._upload_hinhanh_l.$row_photo["logo"];
	}else{
		$image_share='http://' . $config_url .'/'. _upload_product_l.$rs_menu["photo"];
	}
	//Lấy danh mục cấp con nổi bật

	$d->reset();
	$sql="select ten_$lang as ten from #_product_list where type='giang-vien' and id = ".$rs_menu['id_giangvien'] ." and hienthi=1 order by stt, id desc";
	$d->query($sql);
	$rf_giangvien=$d->fetch_array();

	$d->reset();
	$sql="select ten_$lang as ten,mota_$lang as mota,id,photo, type from #_product_list where type='giang-vien' and hienthi=1 order by stt, id desc";
	$d->query($sql);
	$rs_giangvien=$d->result_array();
	
	$d->reset();
	$sql="select ten_$lang as ten,id,tenkhongdau,photo, type, hinhthuc,ngaykhaigiang,giohoc,lichhoc,gia,giakm from #_product_list where id != " . $rs_menu['id'] . " and type = '".$type."' and hienthi=1 and com=2 order by stt, id desc";
	$d->query($sql);
	$rs_danhmuc_other=$d->result_array();

	$d->reset();
	$sql="select ten_$lang as ten,id,tenkhongdau,photo, type, hinhthuc,ngaykhaigiang,giohoc,lichhoc,gia,giakm from #_product_list where id_parent = " . $rs_menu['id'] . " and hienthi=1 and com=3 order by stt, id desc";
	$d->query($sql);
	$rs_category_child=$d->result_array();


	$d->reset();
	$sql = "select ten_$lang as ten,photo, noidung_$lang as noidung from #_product_tab where ( id_photo = '" . $rs_menu['id'] . "' OR '" . $rs_menu['id'] . "'=0  ) order by stt,id desc ";
	$d->query($sql);
	$rs_book = $d->result_array();

	$d->reset();
	$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo, h3 as link from #_about where type='hoc-vien-danh-gia'";
	$d->query($sql);
	$hvdg=$d->result_array();
	
	
	
	//id_list active menu trong template LEFT
	if($rs_menu["set_level"]!=''){
		$arr=explode("|",$rs_menu["set_level"]);
		$id_list=$arr[0];
	}else{ $id_list=$rs_menu["id"]; }

    $title_bar = $rs_menu['ten'];
    $title_tcat = $rs_menu['ten'];



	if ($type == 'giao-trinh') {
		$d->reset();
		$sql="select ten_$lang as ten, tenkhongdau, id, mota_$lang as mota, photo, h3 as link from #_about where type='bo-sach'";
		$d->query($sql);
		$rs_bosach=$d->result_array();


		$d->reset();
		$sql = "select ten_$lang as ten,photo, noidung_$lang as noidung from #_product_tab where ( id_photo = '" . $rs_menu['id'] . "' OR '" . $rs_menu['id'] . "'=0  ) and com = '".$type."' order by stt,id desc ";
		$d->query($sql);
		$rs_book = $d->result_array();

		$d->reset();
		$sql = "select ten_$lang as ten,photo, noidung_$lang as noidung from #_product_tab where ( id_photo = '" . $rs_menu['id'] . "' OR '" . $rs_menu['id'] . "'=0  ) and com = 'tay-nghe' order by stt,id desc ";
		$d->query($sql);
		$rs_taynghe = $d->result_array();

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
			$data['dienthoai'] = $_POST['dienthoai'];
			$data['email'] = $_POST['email'];
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
	}
	
	
		// $d->reset();
    // $sql = "select ten_$lang as ten,id,tenkhongdau,thumb,photo,gia,spbc,noibat,giakm,rate, luot_rate,masp, id_list, mota_$lang as mota, spkm, spbc,type from #_product where hienthi=1 and find_in_set('" . $rs_menu['id'] . "',list_id)>0 order by stt, id desc";
    // $d->query($sql);
    // $product = $d->result_array();

		$d->reset();
		$sql="select ten_$lang as ten,id,tenkhongdau,photo, type, hinhthuc,ngaykhaigiang,giohoc,lichhoc,gia,giakm from #_product_list where id_parent = " . $rs_menu['id'] . " and hienthi=1 and com=3 order by stt, id desc";
		$d->query($sql);
		$product=$d->result_array();

		if ($rs_menu['com'] == 1) {
			$template = 'video_khoa_hoc';
		}

    $tongsanpham = count($product);
    $curPage = isset($_GET['p']) ? $_GET['p'] : 1;
    $url = getCurrentPageURL();
    $maxR = 16;
    $maxP = 5;
    $paging = paging_home($product, $url, $curPage, $maxR, $maxP);
    $product = $paging['source'];

} else {
	$where=' and type="'.$type.'"';
	// break crumb
	$breakcrumb='<li><a href="http://'.$config_url.'">'._trangchu.'</a></li><li class="active"> '.$title_tcat.'</li>';
	#share
	$image_share='http://' . $config_url .'/'._upload_hinhanh_l.$row_photo["logo"];
	
    // $sql = "select ten_$lang as ten,id,tenkhongdau,thumb,photo,gia,giakm,rate, luot_rate, id_list, mota_$lang as mota, spkm, masp, spbc,type from #_product where hienthi=1 $where order by stt, id desc";
    // $d->query($sql);
    // $product = $d->result_array();


		$d->query("select ten_$lang as ten,id, id_parent, set_level,avata, photo, h1, h2, h3,noidung_$lang as noidung, title_$lang as title, keywords_$lang as keywords, description_$lang as description,com, table_product_list.* from #_product_list where type='" . $type . "' and com=2 order by stt, id desc");
    $product = $d->result_array();

    $tongsanpham = count($product);
    $curPage = isset($_GET['p']) ? $_GET['p'] : 1;
    $url = getCurrentPageURL();
    $maxR = 16;
    $maxP = 5;
    $paging = paging_home($product, $url, $curPage, $maxR, $maxP);
    $product = $paging['source'];
}
?>