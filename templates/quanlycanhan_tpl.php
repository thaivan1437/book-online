<div class="container">
	<div>
		<?php if(!empty($_SESSION['login_web'])) { 
			$d->reset();
			$d->query("select ten_vi, dienthoai, diachi, email, username from #_member where id=".$_SESSION['login_web']['id']." order by id desc");
			$ttkh = $d->fetch_array();
			?>
			<div class="text-center text-uppercase brand-title mt-3">Thông tin hồ sơ của bạn</div>
			<table class="table table-bordered table-striped">
				<thead class="thead-dark">
					<tr class="text-center">
						<th>Tên</th>
						<th>Username</th>
						<th>Số điện thoại</th>
						<th>Địa chỉ</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?=$ttkh['ten_vi']?></td>
						<td><?=$ttkh['username']?></td>
						<td><?=$ttkh['dienthoai']?></td>
						<td><?=$ttkh['diachi']?></td>
						<td><?=$ttkh['email']?></td>
					</tr>
				</tbody>
			</table>
			<div class="mt-5">
				<a href="doi-mat-khau.html"><button style="margin-right:10px;" type="button" class="btn btn-danger">Đổi mật khẩu</button></a>
				<button type="button" class="btn btn-primary" onclick="logout()">Đăng xuất</button>
			</div>
		<?php } ?>

		<div class="mt-5">
			<div class="text-center text-uppercase brand-title mt-3">Lịch sử mua hàng</div>
			<div class="don-hang-box">
				<?php if(!empty($_SESSION['login_web'])) { 
					$d->reset();
					$d->query("select * from #_donhang where id_dangnhap=".$_SESSION['login_web']['id']." order by id desc");
					$my_donhang = $d->result_array();
					if(!empty($my_donhang)) { ?>
						<?php foreach($my_donhang as $v) { ?>
							<table class="table table-bordered service-list" border="0" cellpadding="5px" cellspacing="1px" style="font-size:13px;">
								<tr  style="font-weight:bold;color:#111;font-weight:bold">
									<th align="center" style="text-transform:uppercase;">Mã đơn hàng</th>
									<th align="center" style="text-transform:uppercase;">Ngày mua hàng</th>
								</tr>
								<tr id="<?=md5($pid)?>" style="background:#fff;padding:4px 0">
									<td width="10%" align="center"><?=$v['madonhang']?></td>
									<td width="10%" align="center"><?=date("d/m/Y" ,$v['ngaytao'])?></td>
								</tr>
							</table>
							<div class="tat-br"><?=$v['donhang']?></div>
							<div style="min-height:75px"></div>
					<?php } } else { 
						echo "Chưa có thông tin mua hàng!!! Khi bạn đặt mua hàng thông tin sẽ được hiển thị tại đây.";
					} ?>
					
				<?php } else { 
					echo "Bạn chưa đăng nhập! Vui lòng đăng nhập để xem thông tin mua hàng của bạn.";
				} ?>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$(".tat-br").children("div:first-child").find("br").remove();
	});
</script>