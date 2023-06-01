

<div class="main-bg1">
	<div class="main-title"><?=$rs_menu["ten"]?></div>
	<div class="main-title-img"><img src="assets/images/icon2.png" alt="icon" class="title-icon" /></div>
</div>
<div class="main-banner">
	<div class="slick-banner">
		<div class="">
			<a href="">
				<img src="assets/images/banner.jpg" alt="banner" class="img-100" />
			</a>
		</div>
		<div class="">
			<a href="">
				<img src="assets/images/banner.jpg" alt="banner" class="img-100" />
			</a>
		</div>
	</div>
</div>
<div class="bookstore2">
	<div class="container">
		<div class="d-flex flex-wrap justify-content-between kh-detail-contain">
			<div class="bookstore3-box">
				<div class="mb-3">
					<img src="<?=_upload_product_l.$rs_menu["photo"]?>" alt="dep" class="img-100" />
				</div>
				<div class="kh-detail-km-title">Chương trình khuyến mãi</div>
				<div class="kh-detail-km-item"><?=$rs_menu["ctkm"]?></div>
				<!-- <div class="kh-detail-km-item">Tặng giáo trình học: Giải mã 1001 câu hỏi về Filler và Botox. Lý thuyết + Bài tập thực hành + Bộ video hướng dẫn đọc sách. Trị giá 780k</div>
				<div class="kh-detail-km-item">Tặng giáo trình học: Giải mã 1001 câu hỏi về Filler và Botox. Lý thuyết + Bài tập thực hành + Bộ video hướng dẫn đọc sách. Trị giá 780k</div> -->
			</div>
			<div class="bookstore3-box">
				<div class="kh-detail-title"><?=$rs_menu["ten"]?></div>
				<div class="d-flex justify-content-between align-items-center mb-5">
					<div class="">Giá khóa học: <span class="kh-price"><?=number_format($rs_menu["gia"],"0",",",".")?></span></div>
					<div class="kh-price-sale"><?=number_format($rs_menu["giakm"],"0",",",".")?></div>
				</div>
				<div class="mb-4 kh-price-sale">Lộ trình khóa học botox</div>
				<div class="kh-detail-item kh-detail-item1">Hình thức học: <?=$rs_menu["hinhthuc"]?></div>
				<div class="kh-detail-item kh-detail-item2">Khai giảng ngày: <?=$rs_menu["ngaykhaigiang"]?></div>
				<div class="kh-detail-item kh-detail-item3">Giờ học: <?=$rs_menu["giohoc"]?></div>
				<div class="kh-detail-item kh-detail-item4">Lịch học: <?=$rs_menu["lichhoc"]?></div>
				<div class="kh-detail-item kh-detail-item5">Giảng viên: <?=$rf_giangvien["ten"]?></div>
				<div class="kh-detail-item kh-detail-item6">Số buổi học: <?=$rs_menu["sobuoihoc"]?></div>
				<div class="kh-detail-item kh-detail-item7">Địa điểm: <?=$rs_menu["diadiem"]?></div>
				<div class="d-flex justify-content-between align-items-center mt-5">
					<div class="kh-detail-them-btn nut-mua" data-id="<?=$rs_menu['id']?>">Thêm khóa học</div>
					<div class="kh-detail-mua-btn nut-mua" data-id="<?=$rs_menu['id']?>">Đặt chỗ học ngay</div>
				</div>
			</div>
		</div>
		<div class="main-title2">Mô tả khóa học</div>
		<div class="main-title-img"><img src="assets/images/icon1.png" alt="icon" class="title-icon" /></div>
		<div class="d-flex flex-wrap justify-content-between">
			<div class="bookstore3-box">
				<iframe
					class="kh-video-iframe"
					src="https://www.youtube.com/embed/<?= getYoutubeIdFromUrl($rs_menu['mtkh_video']) ?>"
					title="YouTube video player"
					frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
					allowfullscreen
				></iframe>
			</div>
			<div class="bookstore3-box color-tim">
				<div class="dky-title1">Ưu đãi học phí chí từ:</div>
				<div class="dky-title2">7.500.000</div>
				<div class="dky-title3">
					Dành cho 20 bạn đăng ký sớm nhất <br />
					để lại thông tin để nhận ngay ưu đãi
				</div>
				<form action="">
					<div class="mb-3"><input type="text" class="dky-inp" placeholder="Họ và tên:" /></div>
					<div class="mb-3"><input type="text" class="dky-inp" placeholder="Sđt:" /></div>
					<div class="mb-3"><input type="text" class="dky-inp" placeholder="Địa chỉ:" /></div>
					<div class="dky-title2"><button type="submit" class="dky-btn">Đăng ký ngay</button></div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="main-bg2 bookstore3">
	<div class="container">
		<div class="ziczac-box">
			<div class="ziczac-left">
				<img src="<?=_upload_product_l.$rs_book[0]["photo"]?>" alt="dep" class="img-100" />
			</div>
			<div class="ziczac-right">
				<div class="ziczac-title kh-detail-zic-tit"><?=$rs_book[0]["ten"]?></div>
				<div class="ziczac-desc kh-detail-zic-desc">
					<?=$rs_book[0]["noidung"]?>
				</div>
			</div>
		</div>
		<div class="ziczac-box">
			<div class="ziczac-right">
				<div class="ziczac-title kh-detail-zic-tit"><?=$rs_book[1]["ten"]?></div>
				<div class="ziczac-desc kh-detail-zic-desc">
					<?=$rs_book[1]["noidung"]?>
				</div>
			</div>
			<div class="ziczac-left">
				<img src="<?=_upload_product_l.$rs_book[1]["photo"]?>" alt="dep" class="img-100" />
			</div>
		</div>
	</div>
</div>
<div class="bookstore2">
	<div class="container">
		<div class="main-title2">Nội dung khóa học</div>
		<div class="main-title-img"><img src="assets/images/icon1.png" alt="icon" class="title-icon" /></div>
		<div class="nd-kh-contain">
            <?php foreach ($rs_category_child as $k => $v) {?>
                <a href="" class="nd-kh-item">
                    <div class="mb-1"><img src="<?=_upload_product_l.$v["photo"]?>" alt="khoa hoc" class="nd-kh-img" /></div>
                    <div class="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>"><?=$v["ten"]?></div>
                </a>
            <?php } ?>
			<!-- <a href="" class="nd-kh-item">
				<div class="mb-1"><img src="assets/images/h1.jpg" alt="khoa hoc" class="nd-kh-img" /></div>
				<div class="">Chương 1: Tổng quan ngành làm đẹp</div>
			</a>
			<a href="" class="nd-kh-item">
				<div class="mb-1"><img src="assets/images/h2.jpg" alt="khoa hoc" class="nd-kh-img" /></div>
				<div class="">Chương 2: Kỹ thuật căn bản</div>
			</a>
			<a href="" class="nd-kh-item">
				<div class="mb-1"><img src="assets/images/h3.jpg" alt="khoa hoc" class="nd-kh-img" /></div>
				<div class="">Chương 3: Kỹ thuật cầm kim</div>
			</a>
			<a href="" class="nd-kh-item">
				<div class="mb-1"><img src="assets/images/h4.jpg" alt="khoa hoc" class="nd-kh-img" /></div>
				<div class="">Chương 4: Kỹ thuật sử dụng máy</div>
			</a>
			<a href="" class="nd-kh-item">
				<div class="mb-1"><img src="assets/images/h5.jpg" alt="khoa hoc" class="nd-kh-img" /></div>
				<div class="">Chương 5: Kỹ thuật tiêm</div>
			</a> -->
		</div>
		<div class="main-title2">Lợi ích khi đăng ký học tại Hoài Thương</div>
		<div class="main-title-img"><img src="assets/images/icon1.png" alt="icon" class="title-icon" /></div>
		<div class="loi-kh-contain">
			<a href="" class="loi-kh-item">
				<div class="loi-kh-img-div"><img src="assets/images/h5.jpg" alt="khoa hoc loi ich" class="loi-kh-img" /></div>
				<div class="loi-kh-name">Hệ thống online dễ học</div>
			</a>
			<a href="" class="loi-kh-item">
				<div class="loi-kh-img-div"><img src="assets/images/h6.jpg" alt="khoa hoc loi ich" class="loi-kh-img" /></div>
				<div class="loi-kh-name">Giáo trình dễ học</div>
			</a>
			<a href="" class="loi-kh-item">
				<div class="loi-kh-img-div"><img src="assets/images/h1.jpg" alt="khoa hoc loi ich" class="loi-kh-img" /></div>
				<div class="loi-kh-name">Thực hành 1 kèm 1</div>
			</a>
			<a href="" class="loi-kh-item">
				<div class="loi-kh-img-div"><img src="assets/images/h5.jpg" alt="khoa hoc loi ich" class="loi-kh-img" /></div>
				<div class="loi-kh-name">Giảng bằng hình minh họa</div>
			</a>
		</div>
	</div>
</div>
<div class="main-bg2">
	<div class="container">
		<div class="like-contain">
			<div class="like-icon-div">
				<img src="assets/images/ic_like.png" alt="like" class="img-fluid" />
			</div>
			<div class="like-name">Cam kết hiệu quả thật bằng phương pháp dành riêng cho người không có năng khiếu</div>
		</div>
	</div>
</div>
<div class="bookstore4">
	<div class="container">
		<div class="d-flex flex-wrap justify-content-between">
			<div class="bookstore4-left">
				<div class="bookstore4-title2">Học viên nói gì về chúng tôi</div>
			</div>
			<div class="bookstore4-right">
				<div class="slick-banner">
					<?php foreach ($hvdg as $k => $v){?>
						<div class="">
							<div class="d-flex flex-wrap justify-content-between align-items-center">
								<div class="gvien-left">
									<img src="<?=_upload_tintuc_l.$v["photo"]?>" alt="ykien" class="img-100" />
								</div>
								<div class="gvien-right">
									<div class="gvien-name"><?=$v["ten"]?></div>
									<div class=""><?=$v["mota"]?></div>
								</div>
							</div>
						</div>
					<?php } ?>
					
					<!-- <div class="">
						<div class="d-flex flex-wrap justify-content-between align-items-center">
							<div class="gvien-left">
								<img src="assets/images/i3.png" alt="ykien" class="img-100" />
							</div>
							<div class="gvien-right">
								<div class="gvien-name">Giáo viên Nguyễn Đức Hạnh</div>
								<div class="">
									Lorem dolor asit raimetr ruidm oiamr, ruiow pipowr uifm opiqm usuhr iowj aiudhf eagbf woi awoeur eyha, fwu aoid eryaa. iowj aiudhf eagbf woi awoeur eyha, fwu aoid eryaa. Lorem dolor asit raimetr ruidm
									oiamr, ruiow pipowr uifm opiqm usuhr iowj aiudhf eagbf woi awoeur eyha, fwu aoid eryaa. iowj aiudhf eagbf woi awoeur eyha, fwu aoid eryaa.
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>

