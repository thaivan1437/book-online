<?php
$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$d = new database($config['database']);

$d->reset();
$sql_setting = "select * from #_setting limit 0,1";
$d->query($sql_setting);
$row_setting = $d->fetch_array();

//lấy logo trang
$d->reset();
$sql="select photo_$lang as photo, logo from #_photo where com='banner_top'";
$d->query($sql);
$row_photo = $d->fetch_array();

if(isset($_SESSION["login_web"]["id"]) && $_SESSION["login_web"]["id"]!=''){
	$d->reset();
	$sql="select * from #_member where id='".$_SESSION["login_web"]["id"]."'";
	$d->query($sql);
	$rs_user=$d->fetch_array();
}

$title_custom = '';
$keywords_custom = '';
$description_custom = '';

		
switch ($com) {
    case 'thoat':
        $source = "logout";
        $template = "index";
        break;
    case 'giao-trinh':
        $source = "product";
        $title_bar = "Giáo trình";
		$title_tcat = "Giáo trình";
        $type='giao-trinh';
        $template = isset($_GET['idc']) ? "book" : "video_khoa_hoc";
        break;
    
    case 'gio-hang':
        $source = "giohang";
        $template = "giohang";
        break;

    case 'video-khoa-hoc':
        $source = "product";
        $title_bar = "Video khóa học";
		$title_tcat = "Video khóa học";
        $type='video-khoa-hoc';
        $template = isset($_GET['idc']) ? "product_video_detail" : "video_khoa_hoc";
        break;
    
    case 'khoa-hoc':
        $source = "product";
        $type='khoa-hoc';
        $title_bar = "Khóa học";
		$title_tcat = "Khóa học";
        $template = isset($_GET['idc']) ? "product_khoa_hoc_detail" : "video_khoa_hoc";
        break;

    case 'chung-toi-la-ai':
        $source = "about";
		$table="time";
		$type='gioi-thieu';
		$title_bar = "Chúng tôi là ai";
		$title_tcat = "Chúng tôi là ai";
        $template = isset($_GET['id']) ? "about_detail" : "about";
        break;
	case 'ho-tro-khach-hang':
        $source = "amthuc";
		$table="about";
		$type='ho-tro-khach-hang';
		$title_bar = 'Hỗ trợ khách hàng';
		$title_tcat = 'Hỗ trợ khách hàng';
        $template = isset($_GET['id']) ? "news_detail" : "donghanhxahoi";
        break;
    case 'thong-tin-hop-tac':
        $source = "amthuc";
		$table="about";
		$type='thong-tin-hop-tac';
		$title_bar = 'Thông tin hợp tác';
		$title_tcat = 'Thông tin hợp tác';
        $template = isset($_GET['id']) ? "news_detail" : "donghanhxahoi";
        break;

    case 'phat-trien-cung-bsa':
        $source = "amthuc";
        $table="about";
        $type='phat-trien-cung-bsa';
        $title_bar = "Phát triển cùng BSA";
        $title_tcat = "Phát triển cùng BSA";
        $template = isset($_GET['id']) ? "tuyendung_detail" : "tuyendung";
        break;
    case 'su-kien':
        $source = "amthuc";
        $table="about";
        $type='su-kien';
        $title_bar = 'Sự kiện';
        $title_tcat = 'Sự kiện';
        $template = isset($_GET['id']) ? "news_detail" : "news";
        break;
    case 'doanh-nhan-vao-bep':
        $source = "news";
        $table="news";
        $type='doanh-nhan-vao-bep';
        $title_bar = "Doanh nhân vào bếp";
        $title_tcat = "Doanh nhân vào bếp";
        $template = isset($_GET['id']) ? "vaobep_detail" : "vaobep";
        break;
	case 'tag':
        $source = "tag";
        $template = "product";
        break;
    case 'thanh-toan-banking':
        $source = "banking";
        $template ="banking";
        break;
	case 'bang-gia':
		$source = "banggia";
		$template ="banggia";
		break;
    case 'cong-trinh':
        $source = "hinhanh";
        $template = isset($_GET['id']) ? "hinhanh_detail" : "hinhanh";
        break;
    case 'sitemap':
        $source = "sitemap";
        $template = "sitemap";
        break;
    case 'load-more-product':
        $source = "load_product";
        break;
    case 'load-post':
        $source = "load_post";
        break;
    case 'lien-he':
        $source = "contact";
        $template = "contact";
        break;
	case 'video':
        $source = "video";
        $template = "video";
        break;

    case 'dang-ky':
        $source = "dangki";
        $template = "dangki";
        break;
	case 'dang-nhap':
        $source = "dangnhap";
        $template = "dangnhap";
        break;
	case 'quan-ly-ca-nhan':
        $source = "quanlycanhan";
        $template = "quanlycanhan";
        break;
	case 'doi-mat-khau':
        $source = "doimatkhau";
        $template = "doimatkhau";
        break;
    
    case 'thanh-toan':
        $source = "thanhtoan";
        $template = "thanhtoan";
        break;

    case 'tim-kiem':
        $source = "search";
        $template = "search";
        break;
    case 'ajax':
        $source = "ajax";
        break;
    case 'san-pham-noi-bat':
        $title_bar = _sanphamnoibat;
        $title_tcat = _sanphamnoibat;
        $source = "sp_noibat";
        $template = "product";
        break;
    case 'san-pham':
		$type='san-pham';
		$title_bar = _sanpham;
		$title_tcat = _sanpham;
        $source = "product";
        $template = isset($_GET['id']) ? "product_detail" : "product";
        break;
	case 'user':
        switch ($act){
			case 'kich-hoat-tai-khoan':
				$source = "user/kichhoat";
				$template = "user/kichhoat";
				break;
		}
        break;
    case 'ngonngu':
        if (isset($_GET['lang'])) {
            switch ($_GET['lang']) {
                case 'vi':
                    $_SESSION['lang'] = 'vi';
                    break;
                case 'en':
                    $_SESSION['lang'] = 'en';
                    break;
                case 'jp':
                    $_SESSION['lang'] = 'jp';
                    break;
                default:
                    $_SESSION['lang'] = 'vi';
                    break;
            }
        } else {
            $_SESSION['lang'] = 'vi';
        }
        redirect($_SERVER['HTTP_REFERER']);
        break;

    default:
        $source = "index";
        $template = "index";
        break;
}

if ($source != "")
    include _source . $source . ".php";

if (isset($_REQUEST['com']) && $_REQUEST['com'] == 'logout') {
    session_unregister($login_name);
    header("Location:index.php");
}
?>