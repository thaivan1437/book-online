<?php 
$d->reset();
$sql="select ten, id,phiship from #_place_city order by stt";
$d->query($sql);
$rs_province=$d->result_array();

$d->reset();
$sql="select ten_vi as ten, id,gia from #_product where hienthi=1 and type='price' order by stt";
$d->query($sql);
$rs_pricevc=$d->result_array();

$d->reset();
$sql="select ten_vi as ten, id,gia,noidung_$lang as noidung from #_product where hienthi=1 and type='pay' order by stt";
$d->query($sql);
$rs_pay=$d->result_array();

if(!empty($_SESSION['login_web'])) {
	$d->reset();
	$d->query("select ten_vi, dienthoai, diachi, email, username from #_member where id=".$_SESSION['login_web']['id']." order by id desc");
	$ttkh_log = $d->fetch_array();
}

?>
<script src="assets/js/jquery.slim.min.js" ></script>
<link rel="stylesheet" type="text/css" href="assets/js/sweet-alert/sweet-alert.css"/>
<script type="text/javascript" src="assets/js/sweet-alert/sweet-alert.js" defer></script>

<div class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="box_content">
    <div class=" nds">
		<form method="post">
        <div class="row">
        	<div class="col-lg-7">
        		<div class="tit_tt"><span><?=_thongtingiaohang?></span></div>
					<div class="row">
						<!-- form thong tin-->
						<div class="col-12 mb-2">
							<input type="text" class="tt-inp" name="hoten" id="hoten" value="<?=$ttkh_log['ten_vi']?>" placeholder="<?= _hovaten ?>" required oninvalid="this.setCustomValidity('<?= _hovaten ?>')" oninput="setCustomValidity('')">
						</div>
						<div class="col-12 mb-2">
							<input type="tel" pattern="[0][0-9]{9,10}" min="10" max="13" class="tt-inp" name="dienthoai" id="dienthoai" value="<?=$ttkh_log['dienthoai']?>" placeholder="<?=_sodienthoai?>"  required oninvalid="this.setCustomValidity('<?=_sodienthoai?>')" oninput="setCustomValidity('')">
						</div>
						<div class="col-12 mb-2">
							<input type="email" class="tt-inp" name="email" value="<?=$ttkh_log['email']?>" placeholder="Email" required oninvalid="this.setCustomValidity('Email')" oninput="setCustomValidity('')">
						</div>
						<div class="col-12">
							<input type="text" class="tt-inp" name="diachi" id="diachi" value="<?=$ttkh_log['diachi']?>" placeholder="<?= _diachi ?>" required oninvalid="this.setCustomValidity('<?=_diachi?>')" oninput="setCustomValidity('')">
						</div>
						<!-- box chon dia chi -->

						<!-- phuong thuc van chuyen -->
						<div class="col-12">
							<div class="mt-5 tit_tt"><span><?=_phuongthucvanchuyen?></span></div>
						</div>
						<div class="col-12">
							<div class="vanchuyen pttt der-vc-cha">
								<?php foreach($pt_vanchuyen as $k => $v){?>
								<div class="item">
									<div class="check">
										<label class="ck">
											<?=$v["ten"]?>
										  <input type="radio" <?=($k==0) ? "checked" : "" ?> class="der-vc" data-tt="<?=$v["ten"]?>" value="<?=$v["ten"]?>" name="ptvc">
										  <span class="checkmark"></span>
										</label>
										<div class="dec <?=($k==0) ? "active" : "" ?>">
											<?=$v["noidung"]?>
										</div>
									</div>					
									
								</div>
								<?php } ?>
							</div>
						</div>
						<div class="col-12">
							<div class="tit_tt1"><?=_giaotannoi?></div>
						</div>

						<div class="col-md-4 col-sm-6 col-12">
							<select name="province_chon" id="province_chon" class="input form-control">
								<option value='0'> Chọn tỉnh/ thành phố </option>
								<?php foreach($rs_province as $v){?>
								<option <?php if($v['id']==$rs_user['province']) echo "selected"; ?> data-ten="<?=$v["ten"]?>" data-phi="<?=$v["phiship"]?>" value="<?=$v['id']?>" ><?=$v["ten"]?></option>
								<?php }?>
							</select>
						</div>
						<div class="col-md-4 col-sm-6 col-12">
							<?php 
								$d->reset();
								$sql="select * from #_place_dist where id_city='".$rs_user['province']."' order by id";
								$d->query($sql);
								$rs_district=$d->result_array();
							?>
							<select name="district_chon" id="district_chon" class="input form-control">
								<option value='0'> Chọn quận huyện </option>
								<?php foreach($rs_district as $v){?>
								<option value="<?=$v['id']?>" <?php if($v['id']==$rs_user['district']) echo "selected"; ?> ><?=$v["ten"]?></option>
								<?php }?>
							</select>
						</div>
						<div class="col-md-4 col-sm-6 col-12">
							<?php 
								$d->reset();
								$sql="select * from #_place_ward where id_dist='".$rs_user['province']."' order by id";
								$d->query($sql);
								$rs_ward2=$d->result_array();
							?>
							<select name="district_chon2" id="district_chon2" class="input form-control">
								<option value='0'> Chọn phường / xã </option>
								<?php foreach($rs_ward as $v){?>
								<option value="<?=$v['id']?>" <?php if($v['id']==$rs_user['district']) echo "selected"; ?> ><?=$v["ten"]?></option>
								<?php }?>
							</select>
						</div>

						
						<!-- phuong thuc van chuyen -->
						<div class="col-12">
							<div class="mt-5 tit_tt"><span><?=_phuongthucthanhtoan?></span></div>
						</div>
						<div class="col-12">
							<div class="vanchuyen pttt der-tt-cha">
								<?php foreach($pt_thanhtoan as $k => $v){?>
								<div class="item">
									<div class="check">
										<label class="ck">
											<?=$v["ten"]?>
										  <input type="radio" <?=($k==0) ? "checked" : "" ?> class="der-tt" data-tt="<?=$v["ten"]?>" value="<?=$v["ten"]?>" name="pttt">
										  <span class="checkmark"></span>
										</label>
										<div class="dec <?=($k==0) ? "active" : "" ?>">
											<?=$v["noidung"]?>
										</div>
									</div>					
									
								</div>
								<?php } ?>
							</div>
						</div>
						<div class="clear"></div>
						<div class="an-mb col-12">
							<div class="tt-nut">
								<div class="fnut">
									<a href="gio-hang.html"><?=_trovegiohang?></a>
								</div>
								<div class="fnut fnut2">
									<button name="continue" class="continue" >
										<?=_hoantatdonhang?>
									</button>
								</div>
							</div>
						</div>

					</div>
				
        	</div>
        	<div class="col-lg-5">
        		<div class="pay">
					<div class="tit"><?=_giohangcuaban?></div>
					<div class="tt-cart-bao">
						<?                  
						$max=count($_SESSION['cart']);
						for($i=0;$i<$max;$i++){
						$pid=$_SESSION['cart'][$i]['productid'];
						$size=$_SESSION['cart'][$i]['size'];
						$color=$_SESSION['cart'][$i]['color'];
						if($size!='') {$psize=get_size_name($size);}
						else{ $psize=0;}
						if($color!='') {$pcolor=get_color_name($color);}
						else{ $pcolor=0;}
						$q=$_SESSION['cart'][$i]['qty'];
						$pname=get_product_name($pid);
						if($q==0) continue;
						?>
						<div class="menu_pay">
							<div class="image_c">
								<img src="<?= _upload_product_l . get_product_image($pid) ?>" width="100px" alt="<?= $pname ?>" />
								<span><?= $q ?></span>
							</div>
							<div class="detail_c">
								<div class="name_c"><?= $pname ?> </div>
								<div class="price_c">
									<?php if(!empty($size)){ ?>
                                        <?= number_format(get_price_size($size), 0, ',', '.') ?> đ
                                    <?php } else { ?>
                                        <?= number_format(get_price($pid), 0, ',', '.') ?> đ
                                    <?php } ?>
								</div>
									
							</div>
						</div>
						<?php } ?>
					</div>
					<div style="border:none;padding:10px" class="mt-3 prive_sc">
						<div><?=_tongcong?></div>
						<div style="font-weight:bold;font-size:18px" class="last_tt"><?= number_format(get_order_total(), 0, ',', '.') ?>&nbsp;đ</div>
						<input type="hidden" class="tongtien" value="<?=get_order_total($_SESSION['cart'])?>" >
                    </div>
        		</div>
			</div>
			<div class="an-pc2 col-12">
				<div class="tt-nut">
					<div class="fnut">
						<a href="gio-hang.html"><?=_trovegiohang?></a>
					</div>
					<div class="fnut fnut2">
						<button name="continue" class="continue" >
							<?=_hoantatdonhang?>
						</button>
					</div>
				</div>
			</div>

<script type="text/javascript">
	$(document).ready(function (e) {
		$('#province_chon').change(function(){

			$phi=$('#province_chon option:selected').data("phi");
			$price = $(".tongtien").val();
			$ten=$('#province_chon option:selected').data("ten");
			$priceall=$price*1 + $phi*1;

			$(".test1").html($ten);
			$(".test2").html(numberFormat($phi,"đ"));
			$(".test3").val($phi);

			$(".price_charge").html(numberFormat($phi,"đ"));	
			$(".all_pricett").html(numberFormat($priceall,"đ"));

		})
		$(".input_check").click(function(){	
			$feevc = $(this).data("vc");
			$price = $(".tongtien").val();						
			$priceall=$price*1 + $feevc*1;	

			$(".price_charge").html(numberFormat($feevc,"đ"));	
			$(".all_pricett").html(numberFormat($priceall,"đ"));
		})
		$(".der-vc").click(function(){
			$(this).parents("div.der-vc-cha").find("div.dec").removeClass("active");
			$(this).parents("div.check").find("div.dec").addClass("active");
			
		});
		$(".der-tt").click(function(){
			$(this).parents("div.der-tt-cha").find("div.dec").removeClass("active");
			$(this).parents("div.check").find("div.dec").addClass("active");
			
		});
	})
</script>

        	<div class="clear"></div>

		</div>
		<div class="clear"></div>
		</form>
    </div>  
</div>  
<div class="mb-5"></div>
<script type="text/javascript">
	$(document).ready(function(e) {
		$(".used-coupon").click(function(){
			if(confirm("Bạn có muốn hủy mã khuyến mãi này?")){
			$.ajax({
				type:"POST",
				url:"ajax/cart.php",
				data:{type:"clear_coupon",user:"<?=$user?>"},
				success:function(data){
					console.log(data);
					$("#pc_code").val("");
					$(".coupon-wrap").addClass("hide");
					$(".aj-promotion").html(0);
					$("#notice_couple").html("").hide();
					$(".last_tt").html(data);
					updatePriceAfterGiftCode();
				}
			})
			}
			return false;
		})
		
		$('#pc_code').focus(function(e) {
            $('#notice_couple').html('').hide();
			$('#notice_couple').removeClass('error_couple').removeClass('success_couple');
        });
		$(".check_code").click(function(){
			$(".coupon-wrap").addClass("hide");
			pc_code=$('#pc_code').val();
            if(pc_code==''){
				alert("Bạn chưa nhập mã giảm giá",function(){$('#pc_code').focus();},{title:'Message',afterShow: function() { $('#boxy_button_OK').focus();} });
				return false;
			}
			
			tiente='VNĐ';
			giamgia='Giảm giá';
			notice_error='Rất tiếc! Mã giảm giá này không được nhận diện bởi hệ thống.';	
		
			
			$.ajax({
				url:'ajax/cart.php',
				type: "POST",
				async:true,
				dataType: "json",
				data: {cmd:'check_couple',pc_code:pc_code,user: '<?=$user?>'},
				success: function(res){
					
					$(".aj-promotion").html(0);
					if(res[0]==1){
						$(".aj-promotion").html(numberFormat(res['value']));
						
						$('#notice_couple').addClass('success_couple');
						$('#notice_couple').html('Mã giảm giá có giá trị '+res['value']+' '+tiente+'.');
						$('#notice_couple').fadeIn();
						
						
						$.ajax({
							url:'ajax/cart.php',
							type: "POST",
							async:true,
							dataType: "json",
							data: {cmd:'use_couple',id:res['id'],pc_code:pc_code,gia:res['value'],user: '<?=$user?>'},
							success: function(res){
								$('.last_tt').html(res["total"]);
								$(".coupon-wrap").removeClass("hide");
								
							}
						});
						
						//return res['value'];
					}else{
						$('#notice_couple').html(res["result"]);
						$('#notice_couple').fadeIn();
					}
					
					updatePriceAfterGiftCode();
				}
			});
		})
	})
	function updatePrice(){
		$tt = 0;
		$(".price_tt").each(function(){
			$h = $(this).html().replace(/\./g,"");
			$tt+=parseInt($h);
			
		})
		
		$(".last_tt").html(numberFormat($tt));
		updatePriceAfterGiftCode();
		
	}
	function price($val){
		//return parseInt($($val).replace(/\./g,""));
	}
	function updatePriceAfterGiftCode(){
		$fi_gh = price($(".fi_gh").html());
		$km = price($(".aj-promotion").html());
		$total = price($(".last_tt").html());
		
	$("#total_tr").html(numberFormat($total-$km+$fi_gh));

	//alert("Đơn hàng chỉ được thanh toán khi có giá trị > 90.000đ")
	}
	function numberFormat(num,ext) {
	ext = (!ext) ? '  VNĐ' : ext;
   return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")+ext;
}
</script>
<script type="text/javascript">
	$(document).ready(function(e) {
        $('#province_chon').change(function(){

			var pro = $(this).val();
			$('#district_chon').load("ajax/xuly.php?act=load-quan&id="+$(this).val());
		})
		$('#district_chon').change(function(){
			var pro = $(this).val();
			$('#district_chon2').load("ajax/xuly.php?act=load-phuong&id="+$(this).val());
		})
		$('#province_nhan').change(function(){
			var pro = $(this).val();
			$('#district_nhan').load("ajax/xuly.php?act=load-quan&id="+$(this).val());
		})
		$('#same').click(function(){
			var frm = $('#step1');
			var name = frm.find('#hoten');
			var address = frm.find('#diachi');
			var city = frm.find('#province_chon');
			var district = frm.find('#district_chon');
			var dienthoai = frm.find('#dienthoai');
			var name2 = frm.find('#hotennhan');
			var city2 = frm.find('#province_nhan');
			var district2 = frm.find('#district_nhan');
			var address2= frm.find("#diachinhan");
			var dienthoai2=frm.find("#dienthoainhan");

			if($(this).is(':checked') == true){
				name2.val(name.val());
				address2.val(address.val());
				city2.val(city.val());
				dienthoai2.val(dienthoai.val());
				$.ajax({
					type: "POST",
					url: "ajax/xuly.php",
					data: {id: city.val(),act:"load-quan",idi: district.val()},
					success: function(result){
						$('#district_nhan').html(result);
						
					}
				});
			}else{
				name2.val('');
				address2.val('');
				city2.val('');
				district2.val('');
				dienthoai2.val('');
			}
		
		})

    });
</script>