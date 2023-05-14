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
if(!isset($_POST['id']) || $_POST['id'] == '') {
	$r = [
		'status' => false,
		'message' => 'id list require'
	];
	echo json_encode($r);
	die();
}

function productItemHtml($listProduct) {
	$count = count($listProduct);
	if($count == 0) return '';

	$html = '';
	foreach($listProduct as $item)  {
		$html .= '<div class="product-box">
					<div class="sp-img">
						<a href="'.$item['type'].'/'.$item['tenkhongdau'].'-'.$item['id'].'.html">
							<img src="'.thumb($item["photo"],_upload_product_l,$item["tenkhongdau"],400,400,2,80).'" alt="'.$item["ten"].'" class="img-fluid img-100">
						</a>
						<div class="splash"></div>
					</div>
					<div class="font-weight-bold"><a href="'.$item['type'].'/'.$item['tenkhongdau'].'-'.$item['id'].'.html">'.$item['ten'].'</a></div>
				</div>';
	}

	return $html;
}

$d->reset();
$sql = "select ten_$lang as ten,id,tenkhongdau,thumb,photo,gia,spbc,noibat,giakm,rate, luot_rate,masp, id_list, mota_$lang as mota, spkm, spbc,type from #_product where hienthi=1 and id_list=".$_POST['id']." order by stt, id desc";
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