<div class="logo"> <a href="default.php"> <!--<img src="images/logoad.png" width="150"  alt="logo" />--> Refresh </a></div>
<div class="sidebarSep mt0"></div>
<!-- Left navigation -->
<ul id="menu" class="nav">
	<li class="dash" id="menu1"><a class=" active" title="" href="default.php"><span>Trang chủ</span></a></li>
	<li class="categories_li <?php if(($_GET["com"]=='about' && $_GET['type']=='dac-diem') || ($_GET["com"]=='time' && $_GET['type']=='loi-hua') || ($_GET["com"]=='time' && $_GET['type']=='chu-ky2') || ($_GET["com"]=='about' && $_GET['type']=='day-chuyen')  || ($_GET["com"]=='time' && $_GET['type']=='gt-tt2') || ($_GET["com"]=='time' && $_GET['type']=='ve-chung-toi') || ($_GET["com"]=='about' && $_GET['type']=='tt-trong') || ($_GET["com"]=='about' && $_GET['type']=='tt-ngoai') || ($_GET["com"]=='time' && $_GET['type']=='gioi-thieu') || ($_GET["com"]=='time' && $_GET['type']=='lich-su') || ($_GET["com"]=='time' && $_GET['type']=='tai-lieu-giao-trinh') ) echo "activemenu";?>" id="menu_vebsa"><a href="" title="" class="exp"><span>Về BSA</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=time&act=capnhat&type=gioi-thieu">Banner</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=ve-chung-toi">Về chúng tôi ở trang chủ</a></li>
			<li><a href="default.php?com=about&act=man&type=dac-diem">Về chúng tôi chi tiết</a></li>

			<li><a href="default.php?com=time&act=capnhat&type=hoc-vien-danh-gia">Học viên nói gì về chúng tôi</a></li>

			<li><a href="default.php?com=time&act=capnhat&type=lich-su">Lịch sử hình thành</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=loi-hua">Lời hứa thương hiệu</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=chu-ky2">Chữ ký</a></li>
			
			<li><a href="default.php?com=about&act=man&type=day-chuyen">Quản lý dây chuyền sản xuất</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=gt-tt">Đoạn giới thiệu thị trường</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=gt-tt2">Đoạn giới thiệu thị trường trong nước</a></li>
			<li><a href="default.php?com=about&act=man&type=tt-trong">Thị trường trong nước</a></li>
			<li><a href="default.php?com=about&act=man&type=tt-ngoai">Thị trường xuất khẩu</a></li>

			<li><a href="default.php?com=time&act=capnhat&type=tai-lieu-giao-trinh">Tài liệu giáo trình</a></li>
		</ul>
	</li>
	<li class="categories_li <?php if(($_GET["com"]=='product' && $_GET["type"]=="san-pham") || ($_GET["com"]=='about' && $_GET['type']=='thuong-hieu') || ($_GET["com"]=='time' && $_GET['type']=='sp-gt') || ($_GET["com"]=='time' && $_GET['type']=='banner-sp')) echo "activemenu";?>" id="menu_sp"><a href="" title="" class="exp"><span>Sản phẩm</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=time&act=capnhat&type=sp-gt">Đoạn giới thiệu trang chủ</a></li>
			<!-- <li><a href="default.php?com=about&act=man&type=thuong-hieu">Quản lý hình logo thương hiệu</a></li> -->
			<li><a href="default.php?com=time&act=capnhat&type=banner-sp">Banner trang danh mục sản phẩm</a></li>
			<?php for($i=1;$i<=$config['subcat'];$i++){?>
			<li><a href="default.php?com=product&act=man_list&subcat=<?=$i?>&type=san-pham">Quản lý danh mục cấp <?=$i?></a></li>
			<?php }?>
			<li><a href="default.php?com=product&act=man&type=san-pham">Quản lý sản phẩm</a></li>
		</ul>
	</li>
	<li class="categories_li <?php if(($_GET["com"]=='about' && $_GET['type']=='cong-dong-doanh-nghiep') || ($_GET["com"]=='time' && $_GET['type']=='cddn-gt') || ($_GET["com"]=='time' && $_GET['type']=='chu-ky') || ($_GET["com"]=='time' && $_GET['type']=='cddn-lh')) echo "activemenu";?>" id="menu_cddn"><a href="" title="" class="exp"><span>Cộng đồng doanh nghiệp</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=time&act=capnhat&type=chu-ky">Chữ ký</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=cddn-lh">Lời hứa</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=cddn-gt">Đoạn giới thiệu trang chủ</a></li>
			<li><a href="default.php?com=about&act=man&type=cong-dong-doanh-nghiep">Quản lý bài viết</a></li>
		</ul>
	</li>
	<li class="categories_li <?php if(($_GET["com"]=='news' && $_GET['type']=='doanh-nhan-vao-bep') || ($_GET["com"]=='time' && $_GET['type']=='dnvb-gt') || ($_GET["com"]=='time' && $_GET['type']=='dnvb-bn') || ($_GET["com"]=='about' && $_GET['type']=='dnvb-video') ) echo "activemenu";?>" id="menu_dnvb"><a href="" title="" class="exp"><span>Doanh nhân vào bếp</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=time&act=capnhat&type=dnvb-bn">Banner</a></li>
			<li><a href="default.php?com=time&act=capnhat&type=dnvb-gt">Đoạn giới thiệu trang chủ</a></li>
			<li><a href="default.php?com=news&act=man_cat&type=doanh-nhan-vao-bep">Quản lý danh mục</a></li>
			<li><a href="default.php?com=about&act=man&type=dnvb-video">Quản lý video</a></li>
			<li><a href="default.php?com=news&act=man&type=doanh-nhan-vao-bep">Quản lý bài viết</a></li>
		</ul>
	</li>
	<li class="categories_li <?php if(($_GET["com"]=='about' && $_GET['type']=='tin-tuc-su-kien') || ($_GET["com"]=='video') || ($_GET["com"]=='time' && $_GET['type']=='dhxh-bn') || ($_GET["com"]=='about' && $_GET['type']=='dhxh-video') ) echo "activemenu";?>" id="menu_dhcxh"><a href="" title="" class="exp"><span>Tin tức & Sự kiện</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=time&act=capnhat&type=dhxh-bn">Banner</a></li>
			<li><a href="default.php?com=about&act=man&type=tin-tuc-su-kien">Quản lý bài viết</a></li>
			<li><a href="default.php?com=about&act=man&type=dhxh-video">Quản lý video</a></li>
		</ul>
	</li>
	<li class="categories_li <?php if(($_GET["com"]=='about' && $_GET['type']=='su-kien') || ($_GET["com"]=='about' && $_GET['type']=='phat-trien-cung-bsa') || ($_GET["com"]=='about' && $_GET['type']=='dai-ly') || ($_GET["com"]=='time' && $_GET['type']=='tuyendung-bn') ) echo "activemenu";?>" id="menu_td"><a href="" title="" class="exp"><span>Danh mục đơn</span><strong></strong></a>
		<ul class="sub">
			<!-- <li><a href="default.php?com=about&act=man&type=su-kien">Quản lý sự kiện</a></li> -->
			<li><a href="default.php?com=time&act=capnhat&type=tuyendung-bn">Banner phát triển cùng bsa và mô tả ngắn</a></li>
			<li><a href="default.php?com=about&act=man&type=phat-trien-cung-bsa">Quản lý phát triển cùng bsa</a></li>
			<li><a href="default.php?com=about&act=man&type=dai-ly">Quản lý đại lý</a></li>
			
		</ul>
	</li>
	<li class="categories_li <?php if($_GET["com"]=='bannerqc' || $_GET["com"]=='slider' ) echo "activemenu";?>" id="menu_sl"><a href="" title="" class="exp"><span>Logo - Slider</span><strong></strong></a>
		<ul class="sub">
			<li><a href="default.php?com=bannerqc&act=capnhat">Quản lý Logo</a></li>
			<li><a href="default.php?com=slider&act=man_photo&type=slider">Quản lý Slider</a></li>
			<li><a href="default.php?com=doitac&act=man_photo&type=banner-home">Banner trang chủ</a></li>
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