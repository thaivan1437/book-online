<?php
if (!defined('_source'))
die("Error");
include ("configajax.php");

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
	$r = [
		'status' => false,
		'message' => 'Invalid method'
	];
	echo json_encode($r);
	die();
}

function productItemHtml($listProduct) {
	$count = count($listProduct);
	if($count == 0) return '';

	$html = '';
	foreach($listProduct as $item)  {
		$html .= '<div class="">
					<div class="cook-slide-space"></div>
					<div class="cook-box">
						<div class="mb-3 sp-img">
							<a href="'. $item['type'] .'/'. $item['tenkhongdau'] .'-'. $item['id'] .'.html">
								<img src="' .thumb($item["photo"],_upload_tintuc_l,$item["tenkhongdau"],400,267,1,80) .'" alt="cook" class="img-fluid img-100 cook-img">
							</a>
							<div class="splash"></div>
						</div>
						<div class="cook-type">'.$item['h1'].'</div>
						<div class="mb-2 sp-name"><a href="'. $item['type'] .'/'. $item['tenkhongdau'] .'-'. $item['id'] .'.html" class="cook-name">'. $item['ten'] .'</a></div>
						<div class="mb-3 ttuc-desc">'. $item['h2'] .'</div>
						<div class=""><a href="'. $item['type'] .'/'. $item['tenkhongdau'] .'-'. $item['id'] .'.html" class="cook-view">Xem cách chế biến</a></div>
					</div>
				</div>';
	}

	return $html;
}

$where = 'where type="doanh-nhan-vao-bep" and hienthi=1';
if(isset($_POST['id']) && $_POST['id'] != '') {
	$where .= ' and id_item=' . $_POST['id'];
}
if(isset($_POST['keyword']) && $_POST['keyword'] != '') {
	$tukhoa = $_POST['keyword'];
	$where .= " and (ten_vi LIKE '%$tukhoa%' or tenkhongdau LIKE '%$tukhoa%')";
}

$d->reset();
$sql = "select ten_$lang as ten,tenkhongdau,mota_$lang as mota,h2,h1,thumb,id,ngaytao,luotxem,photo, noidung_$lang as noidung, type from #_news ".$where." order by stt, id desc";
$d->query($sql);
$listProduct = $d->result_array();

$r = [
	'status' => true,
	'message' => 'Successful',
	'result' => productItemHtml($listProduct)
];
echo json_encode($r);
die();

?>