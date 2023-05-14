<?php
session_start();
$session = session_id();
error_reporting(0);
@define('_lib', './libraries/');
include_once _lib . "Mobile_Detect.php";
$detect = new Mobile_Detect;
$check = $detect->isMobile();
$check2 = $detect->isTablet();
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
@define ( '_template' , './templates/');
@define('_source', './sources/');
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'vi';
}
$lang = $_SESSION['lang']; //Lấy ngỗn ngữ
require_once _source . "lang_$lang.php";
include_once _lib . "config.php";
include_once _lib . "constant.php";
include_once _lib . "functions.php";
include_once _lib . "functions_giohang.php";
include_once _lib . "class.database.php";
include_once _lib . "file_requick.php";
include_once _source . "counter.php";
include_once _source . "useronline.php";

$_SESSION['cur_url'] = 'http://' . $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI'];
$title_bar = (!empty($title_bar) ? $title_bar : $row_setting['title_' . $lang]);
?>

<!DOCTYPE html>
<html lang="vi">
    <head>
        <base href="http://<?= $config_url ?>/"  />
		<title><?= ($title_custom != '') ? $title_custom : $title_bar ?> </title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="<?= ($keywords_custom != '') ? $keywords_custom : $row_setting['keywords_' . $lang] ?>" />
        <meta name="description" content="<?= ($description_custom != '') ? $description_custom : $row_setting['description_' . $lang] ?>" />
        <meta name="author" content="<?=$row_setting["ten_vi"]?>" />
        <meta name="copyright" content="<?=$row_setting["ten_vi"]?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="DC.title" content="<?= ($title_custom != '') ? $title_custom : $row_setting['title_' . $lang] ?>" />
		<meta name="DC.language" scheme="utf-8" content="vi" />
		<meta name="DC.identifier" content="<?= $row_setting['website'] ?>" />
		<meta name="robots" content="noodp,index,follow" />
		<meta name='revisit-after' content='1 days' />
		<meta http-equiv="content-language" content="vi" />
		<meta property="og:site_name" content="<?= ($title_custom != '') ? $title_custom : $row_setting['title_' . $lang] ?>" />
		<meta property="og:url" content="<?= getCurrentPageUrl() ?>" />
		<meta type="og:url" content="<?= getCurrentPageUrl(); ?>" >
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?= ($title_custom != '') ? $title_custom : $row_setting['title_' . $lang] ?>" />
		<meta property="og:image" content="<?php echo (isset($image_share) ? $image_share : '')?>" />
		<meta property="og:description" content="<?= ($description_custom != '') ? $description_custom : $row_setting['description_' . $lang] ?>" />
		<link href="<?= _upload_hinhanh_l . $row_setting['fav'] ?>" rel="shortcut icon" type="image/x-icon" />
		<?php inlineCss("http://$config_url/assets/css/font.css") ?>
		<?php inlineCss("http://$config_url/assets/css/critial.css") ?>
		<script src="assets/js/jquery.slim.min.js" ></script>
		
		<script>
			var base_url = 'http://<?=$config_url?>';
		</script>
		
		<!-- xuất mã google console -->
		<?= $row_setting['meta'] ?>
		<!-- end xuất mã google console -->

		<!-- xuất mã google analytics -->
		<?= $row_setting['gg'] ?>
		<!-- end xuất mã google analytics -->
	</head>
	<body>
		<div id="pre-loader" class="pre-loader">
			<div></div>
		</div>
		<div id="fb-root"></div>
		<script>
			(function (d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id))
					return;
				js = d.createElement(s);
				js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=362166527297572&version=v2.0";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<header>
			<section class="heading">
				<?php if(!empty($h1_custom)) { ?>
					<h1><?=$h1_custom?></h1>
				<?php } else {
					if(!empty($row_setting['h1_'.$lang])) { ?>
					<h1><?=$row_setting['h1_'.$lang]?></h1>
					<?php } 
				} ?>
				<?php if(!empty($h2_custom)) { ?>
					<h2><?=$h2_custom?></h2>
				<?php } else {
					if(!empty($row_setting['h2_'.$lang])) { ?>
					<h2><?=$row_setting['h2_'.$lang]?></h2>
					<?php } 
				} ?>
			</section>       	             			           
			<section class="banner">
				<?php include _template . "layout/banner.php"; ?>
			</section>
		</header><!-- End header -->
		<main class="main">
			<section>
				<article class="box_slider" >
					<?php include _template . "layout/slideranh.php"; ?>
				</article>
			</section>
			<section>
				<?php if($source=="index") {
					include _template . $template . "_tpl.php";
				} else { ?>
				<article class="other-page">
					<?php include _template . $template . "_tpl.php"; ?> 
				</article>
				<?php }?>
			</section>
			<section class="heading">
				<?php if(!empty($h3_custom)) { ?>
					<h3><?=$h3_custom?></h3>
				<?php } else {
					if(!empty($row_setting['h3_'.$lang])) { ?>
					<h3><?=$row_setting['h3_'.$lang]?></h3>
					<?php } 
				} ?>
				<?php if(!empty($row_setting['h4_'.$lang])) { ?>
					<h4><?= $row_setting['h4_' . $lang] ?></h4>
				<?php } ?>
				<?php if(!empty($row_setting['h5_'.$lang])) { ?>
					<h5><?= $row_setting['h5_' . $lang] ?></h5>
				<?php } ?>
			</section>
		</main>		
		<footer class="wow fadeInUp">
			<?php include _template . "layout/footer.php"; ?>
		</footer><!-- End footer --> 

		<script src="assets/js/init.js" defer></script>

		<div class="box_carts">
			<div class="content">
				<div class="close">X</div>
				<div class="load"></div>
				<div class="text-center">
					<a href="gio-hang.html" class="btn-red-popup"><?=_xemgiohang?></a>
					<a href="san-pham.html" class="btn-red-popup"><?=_tieptucmuahang?></a>
				</div>
			</div>
		</div>

		<?php if($source!="contact") { ?>
		<script type="text/javascript">
			// JavaScript Document
			function re_capcha()
			{
				document.getElementById('vimg').src = "./captcha_image.php";
			}
		</script>
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="modal-contact-title">Bạn cần tư vấn?</div>
							<div class="mb-3">Vui lòng điền thông tin, chúng tôi sẽ liên hệ ngay</div>
							<form method="post" name="frm" class="forms" action="lien-he.html">    
								<div class="mb-2"><input type="text" class="contact-input" name="ten" placeholder="Họ và tên" required></div>
								<div class="mb-2"><input type="email" class="contact-input" name="email" placeholder="Email"></div>
								<div class="mb-2"><input type="number" name="dienthoai" class="contact-input" pattern="[0-9]{8,11}" minlength="8" maxlength="11" placeholder="Số điện thoại" required></div>
								<div class="mb-2"><textarea name="noidung"  rows="3" class="contact-input" placeholder="Nội dung ..."></textarea></div>
								<div class="mb-2">
									<input type="text" name="capt" id="capt" class="form-control" placeholder="Nhập mã bảo vệ" required>
									<img src="captcha_image.php" id="vimg"><span><img id="reload-capt" src="assets/images/Refresh-icon.png" alt="" width="35px" onclick="re_capcha()" /></span>
								</div>
								<div class="mb-2"><button type="submit" style="width:100%" class="btn contact-btn">Gửi thông tin</button></div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>

	  	<!-- Modal Search -->
		<div class="modal fade" id="myModal2" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div id="tk-modal-box" class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div id="timkiem-box">
						<input id="keywords" class="nhap-tim" type="text" placeholder="<?=_timkiem?>" name="search">
						<i  class="fa fa-search search-btn search-btn2" aria-hidden="true"></i>
					</div>
				</div>
				</div>
			</div>
		</div>

		<?php include _template . "layout/cloud_menu.php"; ?>


	</body>
</html>