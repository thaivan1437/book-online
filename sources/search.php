<?php

if (!defined('_source'))
    die("Error");

    $danhmuc = $_GET['danhmuc'];
	$thuonghieu = $_GET['thuonghieu'];
	$giatien = $_GET['giatien'];
	$dotuoi = $_GET['dotuoi'];
	$tukhoa = $_GET['keyword'];
    $tukhoa = trim(strip_tags($tukhoa));
	if (get_magic_quotes_gpc() == false) {
        $tukhoa = mysql_real_escape_string($tukhoa);
    }
	$where ='';
    if ($danhmuc > 0) {
        $where.=' and id_list="'.$danhmuc.'"';
    }
	if ($dotuoi > 0) {
        $where.=' and dotuoi="'.$dotuoi.'"';
    }
	if ($thuonghieu > 0) {
        $where.=' and thuonghieu="'.$thuonghieu.'"';
    }
    if ($giatien > 0) {
		$d->reset();
		$sql="select * from #_giatu where id='".$id."'";
		$d->query($sql);
		$rs_price=$d->fetch_array();
		if($rs_price["giaden"]==0){
			$where.=" and gia>".$rs_price["gia"]."";
		}else{
			$where.=" and gia>".$rs_price["gia"]." and gia<".$rs_price["giaden"]."";
		}
    }
	if($tukhoa!=''){
		$where.= " and (ten_vi LIKE '%$tukhoa%' or tenkhongdau LIKE '%$tukhoa%' or masp LIKE '%$tukhoa%' )";
	}
    $title_tcat = _ketquatimkiem . ': ' . $tukhoa;

    $sql = "select ten_$lang as ten,id,tenkhongdau,photo,gia,type, giakm, masp, mota_$lang as mota from #_product where hienthi=1 $where order by stt, id desc";
    $d->query($sql);
    $product = $d->result_array();



    $breakcrumb="<li><a href='http://".$config_url."'>"._trangchu." </a></li><li class='active'>".$title_tcat."</li>";

    $tongsanpham = count($product);
    $curPage = isset($_GET['p']) ? $_GET['p'] : 1;
    $url = getCurrentPageURL();
    $maxR = 12;
    $maxP = 2;
    $paging = paging_home($product, $url, $curPage, $maxR, $maxP);
    $product = $paging['source'];

?>