
<div class="box_content">
	<div class="box_login_acoun">
		<div class="head">Đăng nhập hệ thống</div>
		<div class="content">
			<form role="form" action="" method="post" enctype="multipart/form-data" name="dangnhap" id="dangnhap" onsubmit="return login_check();">
				<div class="form-group clear">
					<div class="row">
						<label for="recipient-name" class="col-sm-3 col-12 control-label">Tài khoản</label>
						<div class="col-sm-9 col-12">
							<input type="text" class="form-control" name="username" id="login_username" placeholder="Tên đăng nhập">

						</div>
					</div>
				</div>
				<div class="form-group clear">
					<div class="row">
						<label for="recipient-name" class="col-sm-3 col-12 control-label">Mật khẩu</label>
						<div class="col-sm-9 col-12">
							<input type="password" class="form-control" name="matkhau" id="login_matkhau" placeholder="Mật khẩu" onkeypress="dologin(event);">
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</form>
			<div class="modal-footer">
				<div>
					<span id="LoginLoading" style="display: none;"><img src="assets/images/ajax-loader.gif" width="16"></span>
					<span id="LoginResult"></span>	
				</div>
				<div class="text-center">
					
					<button type="button" class="btn btn-primary" onclick="return login_check();">Đăng nhập</button>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
