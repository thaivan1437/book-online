<ul class="edu-mobile-menu-ul">
	<li>
		<a href="http://<?=$config_url?>" <?php if($source=="index") echo 'class="active"'; ?> title="<?=_trangchu?>" >
			<i style="position:static;font-size:1.75rem;color:unset;" class="fa fa-home" aria-hidden="true"></i>
			
		</a>
	</li>
	<li>
		<a href="chung-toi-la-ai.html" <?php if($com=="chung-toi-la-ai") echo 'class="active"'; ?> title="Về BSA">
			<!-- <i class="fa fa-book" aria-hidden="true"></i> -->
			Chúng tôi là ai
		</a>
	</li>
	<li>
		<a href="san-pham.html" <?php if($com=="san-pham") echo 'class="active"'; ?> title="Thương hiệu">
			<!-- <i class="fa fa-shopping-bag" aria-hidden="true"></i> -->
			Sản phẩm
		</a>
		<?php /* if(!empty($rs_list)) { ?>
		<i class="fa fa-chevron-down edu-menu-show-btn" aria-hidden="true"></i>
		<ul class="edu-mobile-submenu">
			<?php foreach($rs_list as $v) {
			$d->reset();
			$sql="select ten_$lang as ten, tenkhongdau, id, type from #_product_list where id_parent='".$v['id']."' and hienthi=1 order by stt, id desc";
			$d->query($sql);
			$rs_list_con=$d->result_array(); ?>
			<li><a href="<?=$v['type']?>/<?=$v["tenkhongdau"]?>-<?=$v["id"]?>/"><?=$v["ten"]?></a>
				<?php if(!empty($rs_list_con)) { ?>
				<i class="fa fa-chevron-down edu-menu-show-btn" aria-hidden="true"></i>
				<ul class="edu-mobile-submenu">
					<?php foreach($rs_list_con as $v2) { ?>
						<li><a href="<?=$v2['type']?>/<?=$v2["tenkhongdau"]?>-<?=$v2["id"]?>/"><?=$v2["ten"]?></a></li>
					<?php } ?>
				</ul>
				<?php } ?>
			</li>
			<?php }?>
		</ul>
		<?php } */?>
	</li>
	<li>
		<a href="doanh-nhan-vao-bep.html" <?php if($com=="doanh-nhan-vao-bep") echo 'class="active"'; ?> title="Doanh nhân vào bếp">
			<!-- <i class="fa fa-newspaper-o" aria-hidden="true"></i> -->
			Doanh nhân vào bếp
		</a>
	</li>
	<?php /*<li>
		<a href="su-kien.html" <?php if($com=="su-kien") echo 'class="active"'; ?> title="Sự kiện đặc biệt">
			<i class="fa fa-newspaper-o" aria-hidden="true"></i>
			Sự kiện đặc biệt
		</a>
	</li>*/?>
	<li>
		<a href="tin-tuc-su-kien.html" <?php if($com=="tin-tuc-su-kien") echo 'class="active"'; ?> title="Đồng hành cùng xã hội">
			<!-- <i class="fa fa-newspaper-o" aria-hidden="true"></i> -->
			Tin tức & Sự kiện
		</a>
	</li>
	<li>
		<a href="phat-trien-cung-bsa.html" <?php if($com=="phat-trien-cung-bsa") echo 'class="active"'; ?> title="Tuyển dụng">
			<!-- <i class="fa fa-newspaper-o" aria-hidden="true"></i> -->
			Phát triển cùng BSA
		</a>
	</li>
	<li>
		<a href="lien-he.html" <?php if($com=="lien-he") echo 'class="active"'; ?> title="<?=_lienhe?>">
			<!-- <i class="fa fa-address-book" aria-hidden="true"></i> -->
			Liên hệ
		</a>
	</li>
	<li>
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
	</li>
</ul>