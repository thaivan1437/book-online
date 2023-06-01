<ul class="edu-mobile-menu-ul">

	<li>
		<a href="khoa-hoc.html" <?php if($com=="khoa-hoc") echo 'class="active"'; ?> title="Thương hiệu">
			<!-- <i class="fa fa-shopping-bag" aria-hidden="true"></i> -->
			Khóa học
		</a>
		<?php if(!empty($rs_list)) { ?>
		<i class="fa fa-chevron-down edu-menu-show-btn" aria-hidden="true"></i>
		<ul class="edu-mobile-submenu">
			<?php foreach($rs_list as $v) { ?>
				<li>
					<a href="<?=$v['type']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/"><?=$v["ten"]?></a>
				</li>
			<?php }?>
		</ul>
		<?php } ?>
	</li>

	<li>
		<a href="video-khoa-hoc.html" <?php if($com=="video-khoa-hoc") echo 'class="active"'; ?> title="Thương hiệu">
			<!-- <i class="fa fa-shopping-bag" aria-hidden="true"></i> -->
			Video khóa học
		</a>
		<?php if(!empty($rs_list2)) { ?>
		<i class="fa fa-chevron-down edu-menu-show-btn" aria-hidden="true"></i>
		<ul class="edu-mobile-submenu">
			<?php foreach($rs_list2 as $v) { ?>
				<li>
					<a href="<?=$v['type']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/"><?=$v["ten"]?></a>
				</li>
			<?php }?>
		</ul>
		<?php } ?>
	</li>

	<li>
		<a href="giao-trinh.html" <?php if($com=="giao-trinh") echo 'class="active"'; ?> title="Giáo trình">
			<!-- <i class="fa fa-address-book" aria-hidden="true"></i> -->
			Giáo trình
		</a>
	</li>
	<li>
		<a href="dang-ky.html" <?php if($com=="dang-ky") echo 'class="active"'; ?> title="Đăng ký">
			<!-- <i class="fa fa-address-book" aria-hidden="true"></i> -->
			Đăng ký
		</a>
	</li>
	<li>
		<a href="dang-nhap.html" <?php if($com=="dang-nhap") echo 'class="active"'; ?> title="Đăng nhập">
			<!-- <i class="fa fa-address-book" aria-hidden="true"></i> -->
			Đăng nhập
		</a>
	</li>
	<!-- <li>
		<div class="edu-mobile-menu-layout-foot">
			<div class="text-center color-orange">
				<i class="fa fa-info-circle" aria-hidden="true"></i> Hỗ trợ
			</div>
			<div class="">
				<a href="tel:<?= $row_setting['hotline'] ?>">
					<i class="fa fa-mobile" aria-hidden="true"></i> <?= $row_setting['hotline'] ?>
				</a>
			</div>
			<div class="">
				<a href="mailto:<?= $row_setting['email'] ?>">
					<i class="fa fa-envelope-o edu-mobile-menu-mail-icon" aria-hidden="true"></i> <?= $row_setting['email'] ?>
				</a>
			</div>
		</div>
	</li> -->
</ul>