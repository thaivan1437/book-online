<?php

if (!defined('_source'))
    die("Error");
//check($_POST);

$title_tcat = _giohang;
$breakcrumb='<li><a href="http://'.$config_url.'">'._trangchu.'</a></li><li class="active"> '.$title_tcat.'</li>';

if (isAjaxRequest()) {

    if ($_POST['act'] == "add") {

        addtocart($_POST['id'], $_POST['sl'],$_POST["size"],$_POST["color"]);
		$d->reset();
		$sql="select ten_$lang as ten, id, photo from #_product where id='".$_POST["id"]."'";
		$d->query($sql);
		$result=$d->fetch_array();
		$rs["mes"]='<div class="images">
					<img src="'._upload_product_l.$result["photo"].'" class="img-fluid" alt=".$result["ten"]." />
				</div>
				<div class="name"> '.$result["ten"].'</div>
				✔ Đã được thêm vào giỏ hàng.
				<div class="clear"></div>';
		$rs["num"]=get_total();
        echo json_encode($rs);
        die();
    }
}

if($_GET['act'] == "fill"){
	include _template."giohang_tpl.php";
	die;

}
?>