<div class="logo"> <a href="default.php"> <!--<img src="images/logoad.png" width="150"  alt="logo" />--> Refresh </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
	<li class="dash" id="menu1"><a class=" active" title="" href="default.php"><span>Trang chủ</span></a></li>
	<li class="categories_li <?php if(($_GET["com"]=='about' && $_GET['type']=='dac-diem') || ($_GET["com"]=='time' && $_GET['type']=='loi-hua') || ($_GET["com"]=='time' && $_GET['type']=='chu-ky2') || ($_GET["com"]=='about' && $_GET['type']=='day-chuyen')  || ($_GET["com"]=='time' && $_GET['type']=='gt-tt2') || ($_GET["com"]=='time' && $_GET['type']=='ve-chung-toi') || ($_GET["com"]=='about' && $_GET['type']=='tt-trong') || ($_GET["com"]=='about' && $_GET['type']=='hoc-vien-danh-gia') || ($_GET["com"]=='time' && $_GET['type']=='gioi-thieu') || ($_GET["com"]=='time' && $_GET['type']=='lich-su') || ($_GET["com"]=='time' && $_GET['type']=='tai-lieu-giao-trinh') ) echo "activemenu";?>" id="menu_vebsa"><a href="" title="" class="exp"><span>Về hoaithuong</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=time&act=capnhat&type=gioi-thieu">Banner</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=ve-chung-toi">Về chúng tôi ở trang chủ</a></li>
			<li><a href="default.php?com=about&act=man&type=dac-diem">Về chúng tôi chi tiết ở trang chủ</a></li>
			<li><a href="default.php?com=about&act=man&type=hinh-anh">Quản lý hình ảnh trang chủ</a></li>
			<li><a href="default.php?com=about&act=man&type=hoc-vien-danh-gia">Học viên đánh giá về chúng tôi</a></li>

			<!-- <li><a href="default.php?com=time&act=capnhat&type=lich-su">Lịch sử hình thành</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=loi-hua">Lời hứa thương hiệu</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=chu-ky2">Chữ ký</a></li> -->
			
			<!-- <li><a href="default.php?com=about&act=man&type=day-chuyen">Quản lý dây chuyền sản xuất</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=gt-tt">Đoạn giới thiệu thị trường</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=gt-tt2">Đoạn giới thiệu thị trường trong nước</a></li>
			<li><a href="default.php?com=about&act=man&type=tt-trong">Thị trường trong nước</a></li>
			<li><a href="default.php?com=about&act=man&type=tt-ngoai">Thị trường xuất khẩu</a></li> -->

			<li><a href="default.php?com=time&act=capnhat&type=tai-lieu-giao-trinh">Tài liệu giáo trình</a></li>
		</ul>
	</li>
	<li class="categories_li <?php if(($_GET["com"]=='product' && $_GET["type"]=="khoa-hoc") || ($_GET["com"]=='about' && $_GET['type']=='thuong-hieu') || ($_GET["com"]=='time' && $_GET['type']=='sp-gt') || ($_GET["com"]=='time' && $_GET['type']=='banner-sp')) echo "activemenu";?>" id="menu_sp"><a href="" title="" class="exp"><span>Khóa học</span><strong></strong></a>
		<ul class="sub">
			<!-- <li><a href="default.php?com=time&act=capnhat&type=sp-gt">Đoạn giới thiệu trang chủ</a></li> -->
			<!-- <li><a href="default.php?com=about&act=man&type=thuong-hieu">Quản lý hình logo thương hiệu</a></li> -->
			<li><a href="default.php?com=time&act=capnhat&type=banner-sp">Banner trang danh mục khóa học</a></li>
			<?php for($i=1;$i<=$config['subcat'];$i++){?>
			<li><a href="default.php?com=product&act=man_list&subcat=<?=$i?>&type=khoa-hoc">Quản lý danh mục cấp <?=$i?></a></li>
			<?php }?>
			<li><a href="default.php?com=product&act=man&type=khoa-hoc">Quản lý khóa học</a></li>
		</ul>
	</li>
	<li class="categories_li <?php if(($_GET["com"]=='product' && $_GET["type"]=="video-khoa-hoc") || ($_GET["com"]=='about' && $_GET['type']=='thuong-hieu') || ($_GET["com"]=='time' && $_GET['type']=='sp-gt') || ($_GET["com"]=='time' && $_GET['type']=='banner-sp')) echo "activemenu";?>" id="menu_sp1"><a href="" title="" class="exp"><span>Bộ video khóa học</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=time&act=capnhat&type=video-khoa-hoc">Đoạn giới thiệu trang chủ</a></li>
			<!-- <li><a href="default.php?com=about&act=man&type=thuong-hieu">Quản lý hình logo thương hiệu</a></li> -->
			<!-- <li><a href="default.php?com=time&act=capnhat&type=banner-sp">Banner trang danh mục sản phẩm</a></li> -->
			<?php for($i=1;$i<=$config['subcat'];$i++){?>
			<li><a href="default.php?com=product&act=man_list&subcat=<?=$i?>&type=video-khoa-hoc">Quản lý danh mục cấp <?=$i?></a></li>
			<?php }?>
			<li><a href="default.php?com=product&act=man&type=video-khoa-hoc">Quản lý video</a></li>
		</ul>
	</li>
	<li class="categories_li <?php if(($_GET["com"]=='product' && $_GET["type"]=="giao-trinh") || ($_GET["com"]=='product' && $_GET['type']=='tay-nghe') || ($_GET["com"]=='time' && $_GET['type']=='sp-gt') || ($_GET["com"]=='about' && $_GET['type']=='faq') || ($_GET["com"]=='about' && $_GET['type']=='giang-vien-danh-gia')) echo "activemenu";?>" id="menu_sp3"><a href="" title="" class="exp"><span>Giáo trình</span><strong></strong></a>
		<ul class="sub">
			<!-- <li><a href="default.php?com=time&act=capnhat&type=giao-trinh">Đoạn giới thiệu trang chủ</a></li> -->
			<!-- <li><a href="default.php?com=about&act=man&type=thuong-hieu">Quản lý hình logo thương hiệu</a></li> -->
			<!-- <li><a href="default.php?com=time&act=capnhat&type=banner-sp">Banner trang danh mục sản phẩm</a></li> -->
			<li><a href="default.php?com=product&act=man_list&subcat=2&type=giao-trinh">Quản lý danh mục cấp 2</a></li>
			<?php /* for($i=1;$i<=$config['subcat'];$i++){?>
			<li><a href="default.php?com=product&act=man_list&subcat=<?=$i?>&type=giao-trinh">Quản lý danh mục cấp <?=$i?></a></li>
			<?php } */?>
			<li><a href="default.php?com=product&act=man&type=giao-trinh">Quản lý giáo trình</a></li>
			<li><a href="default.php?com=about&act=man&type=giang-vien-danh-gia">Quản lý giảng viên và học viên đánh giá</a></li>
			<li><a href="default.php?com=about&act=man&type=faq">Quản lý faq</a></li>
		</ul>
	</li>
	
	<!-- <li class="categories_li <?php if(($_GET["com"]=='about' && $_GET['type']=='faq') || ($_GET["com"]=='about' && $_GET['type']=='giang-vien-danh-gia') || ($_GET["com"]=='about' && $_GET['type']=='tay-nghe') || ($_GET["com"]=='about' && $_GET['type']=='book') || $_GET['type']=='bo-sach' ) echo "activemenu";?>" id="menu_td"><a href="" title="" class="exp"><span>Giáo trình</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=about&act=man&type=bo-sach">Quản lý bộ sách</a></li>
			<li><a href="default.php?com=about&act=man&type=tay-nghe">Quản lý hình tay nghề</a></li>
			<li><a href="default.php?com=about&act=man&type=book">Quản lý sách giành cho ai</a></li>
		</ul>
	</li> -->

	<li class="categories_li <?php if($_GET["com"]=='order' || ($_GET["com"]=='about' && $_GET['type']=='thanh-toan')) echo "activemenu";?>" id="menu_sp9"><a href="" title="" class="exp"><span>Đơn hàng</span><strong></strong></a>
		<ul class="sub">			
			<li><a href="default.php?com=order&act=man">Quản lý đơn hàng</a></li>
			<li><a href="default.php?com=about&act=man&type=thanh-toan">Phương thức thanh toán</a></li>
		</ul>
	</li>
	
	<li class="categories_li <?php if(($_GET["com"]=='product' && $_GET["type"]=="giang-vien")) echo "activemenu";?>" id="menu_sp2"><a href="" title="" class="exp"><span>Giảng viên</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=product&act=man_list&subcat=1&type=giang-vien">Quản lý giảng viên</a></li>
		</ul>
	</li>
	<!-- <li class="categories_li <?php if(($_GET["com"]=='about' && $_GET['type']=='cong-dong-doanh-nghiep') || ($_GET["com"]=='time' && $_GET['type']=='cddn-gt') || ($_GET["com"]=='time' && $_GET['type']=='chu-ky') || ($_GET["com"]=='time' && $_GET['type']=='cddn-lh')) echo "activemenu";?>" id="menu_cddn"><a href="" title="" class="exp"><span>Cộng đồng doanh nghiệp</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=time&act=capnhat&type=chu-ky">Chữ ký</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=cddn-lh">Lời hứa</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=cddn-gt">Đoạn giới thiệu trang chủ</a></li>
			<li><a href="default.php?com=about&act=man&type=cong-dong-doanh-nghiep">Quản lý bài viết</a></li>
		</ul>
	</li> -->
	<!-- <li class="categories_li <?php if(($_GET["com"]=='news' && $_GET['type']=='doanh-nhan-vao-bep') || ($_GET["com"]=='time' && $_GET['type']=='dnvb-gt') || ($_GET["com"]=='time' && $_GET['type']=='dnvb-bn') || ($_GET["com"]=='about' && $_GET['type']=='dnvb-video') ) echo "activemenu";?>" id="menu_dnvb"><a href="" title="" class="exp"><span>Doanh nhân vào bếp</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=time&act=capnhat&type=dnvb-bn">Banner</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=dnvb-gt">Đoạn giới thiệu trang chủ</a></li>
			<li><a href="default.php?com=news&act=man_cat&type=doanh-nhan-vao-bep">Quản lý danh mục</a></li>
			<li><a href="default.php?com=about&act=man&type=dnvb-video">Quản lý video</a></li>
			<li><a href="default.php?com=news&act=man&type=doanh-nhan-vao-bep">Quản lý bài viết</a></li>
		</ul>
	</li> -->
	<li class="categories_li <?php if(($_GET["com"]=='about' && $_GET['type']=='ho-tro-khach-hang') || ($_GET["com"]=='video') || ($_GET["com"]=='time' && $_GET['type']=='dhxh-bn') || ($_GET["com"]=='about' && $_GET['type']=='thong-tin-hop-tac') ) echo "activemenu";?>" id="menu_dhcxh"><a href="" title="" class="exp"><span>Quản lý bài viết</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=about&act=man&type=ho-tro-khach-hang">Hỗ trợ khách hàng</a></li>
			<li><a href="default.php?com=about&act=man&type=thong-tin-hop-tac">Thông tin hợp tác</a></li>
		</ul>
	</li>
	
	<li class="categories_li <?php if($_GET["com"]=='bannerqc' || $_GET["com"]=='slider' ) echo "activemenu";?>" id="menu_sl"><a href="" title="" class="exp"><span>Logo - Slider</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=bannerqc&act=capnhat">Quản lý Logo</a></li>
			<li><a href="default.php?com=slider&act=man_photo&type=slider">Quản lý Slider</a></li>
			<li><a href="default.php?com=doitac&act=man_photo&type=banner-home">Banner ads dưới slide trang chủ</a></li>
		</ul>
	</li>
	<li class="categories_li <?php if($_GET["com"]=='icon' || $_GET["com"]=='yahoo' ||$_GET["com"]=='lienhe' || $_GET["com"]=='footer' || $_GET["com"]=='setting') echo "activemenu";?>" id="menu_tl"><a href="" title="" class="exp"><span>Thiết lập</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=icon&act=man&type=top">Quản lý MXH</a></li>
			<!-- <li><a href="default.php?com=lienhe&act=capnhat">Quản lý chi nhánh hà nội</a></li> -->
			<li><a href="default.php?com=setting&act=capnhat">Quản lý thiết lập</a></li>
		</ul>
	</li>
</ul>