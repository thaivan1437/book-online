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
				<div class="d-flex justify-content-between align-items-center mb-3">
					<div class="">Giá khóa học: <span class="kh-price"><?=number_format($rs_menu["gia"],"0",",",".")?></span></div>
					<div class="kh-price-sale"><?=number_format($rs_menu["giakm"],"0",",",".")?></div>
				</div>
				<div class="mb-4 kh-price-sale">Lộ trình khóa học</div>
				<div class="kh-detail-item kh-detail-item1">Hình thức học: <?=$rs_menu["hinhthuc"]?></div>
				<div class="kh-detail-item kh-detail-item3">Giờ học: <?=$rs_menu["giohoc"]?></div>
				<div class="kh-detail-item kh-detail-item5">Giảng viên: <?=$rf_giangvien["ten"]?></div>
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
				<?=$rs_menu["mtkh"]?>
				<!-- <div class="mb-3 font-weight-700">Chương trình học tiêm Botox giúp bạn trở thành một người hành nghề toàn diện</div>
				<div class="">
					Lorem lour dolor aisu sarj asit raimet ui noklox ruipja ur htuwih aionb ywbi zybfy ibsgyhe svtbis bgyei bgyesi aoiun gbyireu sbh guryhs obdf gyros bfyd gobroys bogysrb ygbrsoyg eyrgis fgiysegiksy fgiysegri sgiysfog soryg
					osryg oyrgo aodfoaywe gauyf oayeg aoey aoehfa fhaiuf hpafh paohf orfhosief hosdhfoisehrp fsoerf hsoeihrf oserghfousgr fosh fo.
				</div> -->
			</div>
		</div>
	</div>
</div>
<div class="main-bg2 bookstore3">
	<div class="container">
		<div class="main-title">Bạn sẽ được gì khi đăng ký khóa học</div>
		<div class="main-title-img"><img src="assets/images/icon2.png" alt="icon" class="title-icon" /></div>
		<div class="d-flex flex-wrap justify-content-between">
			<?=$rs_menu["result_kh"]?>
			<!-- <div class="bookstore3-box duoc-gi-desc">
				<p>- Ai là người phù hợp với khóa học này</p>
				<p>- Học viên đã học nhưng cần được ôn lại lý thuyết và thực hành một cách bài bản, hiệu quả và an toàn</p>
				<p>- Khách hàng có nhu cầu tiêm filler muốn hiểu thêm về quy trình trước khi thực hiện</p>
				<p>- Các bạn kỹ thuật viên muốn chuẩn hóa kiến thức về filler và botox một cách bài bản và chuẩn y khoa</p>
				<p>- Các chủ spa học để quản lý và để hiểu biết về các sản phẩm filler botox một cách bài bản và an toàn</p>
				<p>- Sinh viên và các bạn khác mong muốn học nghề và kiến thức chuẩn về filler và botox</p>
				<p>- Các bạn muốn học một cách bài bản về filler và botox nhưng không có nhiều thời gian đi học</p>
			</div>
			<div class="bookstore3-box duoc-gi-desc">
				<p>- Khách hàng có nhu cầu tiêm filler muốn hiểu thêm về quy trình trước khi thực hiện</p>
				<p>- Các bạn kỹ thuật viên muốn chuẩn hóa kiến thức về filler và botox một cách bài bản và chuẩn y khoa</p>
				<p>- Các chủ spa học để quản lý và để hiểu biết về các sản phẩm filler botox một cách bài bản và an toàn</p>
				<p>- Sinh viên và các bạn khác mong muốn học nghề và kiến thức chuẩn về filler và botox</p>
				<p>- Các bạn muốn học một cách bài bản về filler và botox nhưng không có nhiều thời gian đi học</p>
			</div> -->
		</div>
	</div>
</div>
<div class="bookstore2">
	<div class="container">
		<div class="main-title2">Nội dung khóa học</div>
		<div class="main-title-img"><img src="assets/images/icon1.png" alt="icon" class="title-icon" /></div>
		<div class="nd-kh-contain2">

			<?php foreach ($rs_category_child as $k => $v) {
					$d->reset();
					$sql = "select ten_$lang as ten,id,tenkhongdau,type,video,hocthu from #_product where hienthi=1 and find_in_set('" . $v['id'] . "',list_id)>0 order by stt, id desc";
					$d->query($sql);
					$product = $d->result_array();
				?>
				<div class="khol-block">
					<div class="khol-title"><?=$v["ten"]?></div>
					<?php foreach($product as $k => $v1) { ?>
						<a href="<?=$v1["video"]?>" class="khol-item">
							<div class="khol-item-left"><?=$v1["ten"]?></div>
							<div class="khol-item-right"><?=$v1["hocthu"] == 1 ? 'Học thử' : 'Học ngay'?></div>
						</a>
					<?php }?>
			<?php }?>

			
		</div>
		<div class="main-title2">Khóa học liên quan</div>
		<div class="main-title-img"><img src="assets/images/icon1.png" alt="icon" class="title-icon" /></div>
	</div>
</div>
<div class="main-bg1">
	<div class="container">
		<div class="slick-hocvien">
			<?php foreach($rs_danhmuc_other as $k => $v) {?>
				<div class="">
					<div class="kh-lq-box">
						<div class="kh-lq-img-div">
							<a href=""><img src="<?=_upload_product_l.$v["photo"]?>" alt="khlq" class="kh-lq-img" /></a>
						</div>
						<div class="kh-lq-info">
							<div class="kh-lq-name cut2"><?=$v["ten"]?></div>
							<?php if (!empty($v["mota"])) {?>
								<div class="kh-lq-desc cut3"><?=$v["mota"]?></div>
							<?php }?>							
							<div class="">Ngày khai giảng: <?=$v["ngaykhaigiang"]?></div>
							<div class="">Lịch học: <?=$v["lichhoc"]?></div>
							<div class="">Giờ học: <?=$v["giohoc"]?></div>
						</div>
						<div class="kh-lq-bot">
							<a href="<?=$v["type"]?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/" class="kh-lq-bot-a">Xem chi tiết</a>
						</div>
					</div>
				</div>
			<?php }?>
			

			<!-- <div class="">
				<div class="kh-lq-box">
					<div class="kh-lq-img-div">
						<a href=""><img src="assets/images/h2.jpg" alt="khlq" class="kh-lq-img" /></a>
					</div>
					<div class="kh-lq-info">
						<div class="kh-lq-name">Khóa học</div>
						<div class="kh-lq-desc">Lorem ipsum dolor asit raimet, consecterure uiwms oiwj fuiw. Lorem ipsum dolor asit raimet, consecterure uiwms oiwj fuiw.</div>
						<div class="">Ngày khai giảng:</div>
						<div class="">Lịch học:</div>
						<div class="">Giờ học:</div>
					</div>
					<div class="kh-lq-bot">
						<a href="" class="kh-lq-bot-a">Xem chi tiết</a>
					</div>
				</div>
			</div>
			<div class="">
				<div class="kh-lq-box">
					<div class="kh-lq-img-div">
						<a href=""><img src="assets/images/h3.jpg" alt="khlq" class="kh-lq-img" /></a>
					</div>
					<div class="kh-lq-info">
						<div class="kh-lq-name">Khóa học</div>
						<div class="kh-lq-desc">Lorem ipsum dolor asit raimet, consecterure uiwms oiwj fuiw. Lorem ipsum dolor asit raimet, consecterure uiwms oiwj fuiw.</div>
						<div class="">Ngày khai giảng:</div>
						<div class="">Lịch học:</div>
						<div class="">Giờ học:</div>
					</div>
					<div class="kh-lq-bot">
						<a href="" class="kh-lq-bot-a">Xem chi tiết</a>
					</div>
				</div>
			</div>
			<div class="">
				<div class="kh-lq-box">
					<div class="kh-lq-img-div">
						<a href=""><img src="assets/images/h4.jpg" alt="khlq" class="kh-lq-img" /></a>
					</div>
					<div class="kh-lq-info">
						<div class="kh-lq-name">Khóa học</div>
						<div class="kh-lq-desc">Lorem ipsum dolor asit raimet, consecterure uiwms oiwj fuiw. Lorem ipsum dolor asit raimet, consecterure uiwms oiwj fuiw.</div>
						<div class="">Ngày khai giảng:</div>
						<div class="">Lịch học:</div>
						<div class="">Giờ học:</div>
					</div>
					<div class="kh-lq-bot">
						<a href="" class="kh-lq-bot-a">Xem chi tiết</a>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
<div class="bookstore4">
	<div class="container">
		<div class="main-title2">Thông tin giảng viên</div>
		<div class="main-title-img"><img src="assets/images/icon1.png" alt="icon" class="title-icon" /></div>
		<div class="slick-banner">
			<?php foreach ($rs_giangvien as $k => $v) { ?>
				<div class="">
					<div class="d-flex flex-wrap justify-content-between align-items-center">
						<div class="gvien-left">
							<img src="<?=_upload_product_l.$v["photo"]?>" alt="ykien" class="img-100" />
						</div>
						<div class="gvien-right">
							<div class="gvien-name"><?=$v["ten"]?></div>
							<div class=""><?=$v["mota"]?></div>
						</div>
					</div>
				</div>
			<?php }?>
			<!-- <div class="">
				<div class="d-flex flex-wrap justify-content-between align-items-center">
					<div class="gvien-left">
						<img src="assets/images/i3.png" alt="ykien" class="img-100" />
					</div>
					<div class="gvien-right">
						<div class="gvien-name">Giáo viên Nguyễn Đức Hạnh</div>
						<div class="">
							Lorem dolor asit raimetr ruidm oiamr, ruiow pipowr uifm opiqm usuhr iowj aiudhf eagbf woi awoeur eyha, fwu aoid eryaa. iowj aiudhf eagbf woi awoeur eyha, fwu aoid eryaa. Lorem dolor asit raimetr ruidm oiamr,
							ruiow pipowr uifm opiqm usuhr iowj aiudhf eagbf woi awoeur eyha, fwu aoid eryaa. iowj aiudhf eagbf woi awoeur eyha, fwu aoid eryaa.
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
