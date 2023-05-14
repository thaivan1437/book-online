<script src="assets/js/jquery.slim.min.js" ></script>
<link rel="stylesheet" type="text/css" href="assets/js/sweet-alert/sweet-alert.css"/>
<script type="text/javascript" src="assets/js/sweet-alert/sweet-alert.js" defer></script>

<?php
if ($_REQUEST['command'] == 'delete' && $_REQUEST['pid'] > 0) {
    remove_product($_REQUEST['pid'], $_REQUEST['size']);
} else if ($_REQUEST['command'] == 'clear') {
    unset($_SESSION['cart']);
} else if ($_REQUEST['command'] == 'update') {
    $max = count($_SESSION['cart']);
    for ($i = 0; $i < $max; $i++) {
        $pid = $_SESSION['cart'][$i]['productid'];
        $q = intval($_REQUEST['product' . $pid]);
        if ($q > 0 && $q <= 999) {
            $_SESSION['cart'][$i]['qty'] = $q;
        } else {
            $msg = 'Some proudcts not updated!, quantity must be a number between 1 and 999';
        }
    }
}
?>
<script language="javascript">
    function del(pid, obj) {
        swal({
            title: "<?=_thongbao?>",
            text: "<?=_bancoxoa?>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "<?=_dongy?>",
            cancelButtonText: "<?=_khongdongy?>",
            closeOnConfirm: false,
            closeOnCancel: false},
			function (isConfirm) {
            if (isConfirm) {
                $.ajax({
					url: "ajax/cart.php?type=remove_order",
					data: { id: pid},
					type: "post",
					success: function (data) {
                        //var myObj = JSON.parse(data);
						$("#"+obj).remove();
                        $("#"+pid).remove();
						updatePrice();
						updateCartNum();
					}

				})
                swal("Deleted!", "<?=_daxoathanhcong?>", "success");
            } else {
                swal("Cancelled", "<?=_dahuyxoa?>", "error");
            }
        });
		
    }
    function clear_cart() {
        if (confirm('This will empty your shopping cart, continue?')) {
            document.form1.command.value = 'clear';
            document.form1.submit();
        }
    }
    function update_cart() {
        document.form1.command.value = 'update';
        document.form1.submit();
    }
</script>
<div class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="box_content">
    <div class="content">

        <form name="form1" method="post">
            <input type="hidden" name="pid" />
            <input type="hidden" name="command" /> 
			<?php if(is_array($_SESSION['cart'])){?>
            <div class="cart">
                <div class="text-uppercase info-cart-td"><?=_giohang?></div>
                <div class="an-pc2"><span class="luu-y">* <?=_luotngangxemgiohang?></span></div>
                <div class="scroll-right-bao">
                    <div class="ghang-bao">
                        <div class="ghang-head">
                            <div class="ghang-head1"><?=_sanpham?></div>
                            <div class="ghang-head2"></div>
                            <div class="ghang-head3"><?=_gia?></div>
                            <div class="ghang-head4"><?=_soluong?></div>
                            <div class="ghang-head5"></div>
                        </div>
                        <div class="ghang-body">
                            <?php
                            $max=count($_SESSION['cart']);
                            for($i=0;$i<$max;$i++){ 
                                $pid=$_SESSION['cart'][$i]['productid'];
                                $size=$_SESSION['cart'][$i]['size'];
                                $color=$_SESSION['cart'][$i]['color'];
                                if($size!='') {$psize=get_size_name($size);}
                                else{ $psize=0;}
                                if($color!='') {
                                    $pcolor=get_color_name($color);
                                    $pMaMau = get_color_code($color);
                                } else{ $pcolor=0;}
                                $q=$_SESSION['cart'][$i]['qty'];
                                $pname=get_product_name($pid);
                                if($q==0) continue; ?>
                                <div id="<?=md5($pid)?>" class="ghang-box">
                                    <div class="ghang-box1">
                                        <img src="<?= _upload_product_l . get_product_image($pid) ?>" alt="<?= $pname ?>" class="img-fluid img-100">
                                    </div>
                                    <div class="ghang-box2">
                                        <?php if(!empty(get_product_code($pid))) { ?>
                                        <div class="ghang-masp"><span><?=get_product_code($pid)?></span></div>
                                        <?php } ?>
                                        <div class="font-weight-bold"><?=$pname?></div>
                                    </div>
                                    <div class="ghang-box3">
                                        <div class="gia-km"><?=number_format(get_price($pid),"0",",",".")?> đ</div>
                                    </div>
                                    <div class="ghang-box4">
                                        <input type="number" data-id="<?= $pid ?>" data-price="<?= (get_price($pid)) ? get_price($pid) : 0 ?>"name="product<?= $pid ?>" value="<?= $q ?>" class="change_qty" maxlength="3" size="2" style="text-align:center; border:1px solid #F0F0F0;width:40px" />
                                    </div>
                                    <div class="ghang-box5">
                                        <img style="cursor:pointer" src="assets/images/icon_del.png" onclick="del(<?=$pid?>, '<?=md5($pid)?>');">
                                    </div>
                                    <div style="display:none" class="price_tt"><?= number_format(get_price($pid) * $q, 0, ',', '.') ?> VNĐ</div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="total-order">
                    <div class=""><?=_tongcong?></div>
                    <div style="color:black;font-size:20px"><span class="last_tt"><?= number_format(get_order_total(), 0, ',', '.') ?>&nbsp;đ</span></div>
                </div>   
            </div>
            <div class="info_cart">
                <div class="info_detail">
                    <div class="tit"><?=_tongdonhang?></div>
                    <div class="info-cart-body">
                        <div class="prive_sc">
                            <div><?=_tongcong?></div>
                            <div style="font-weight:bold;font-size:18px" class="last_tt"><?= number_format(get_order_total(), 0, ',', '.') ?>&nbsp;đ</div>
                        </div>
                        <p>(<?=_chuabaogomvat?>)</p>
                        <div class="themhang"><a href="san-pham.html"><?=_tieptucmuahang?></a></div>
                        <div class="tienhangdathang"><a href="thanh-toan.html"><?=_thanhtoan?></a></div>
                    </div>
                </div>
            </div>

            <div class="clear" style="height:30px;"></div>
            <?
            }
            else{
            echo _nocart."!";
            }
            ?>

        </form>
    </div>
	<div class="content">
		<?=$row_setting["luuy1"]?>
	</div>
</div>
<script type="text/javascript">
    
    function updatePrice() {
        $tt = 0;
        $(".price_tt").each(function () {
            $h = $(this).html().replace(/\./g, "");
            $tt += parseInt($h);

        })

        $(".last_tt").html(numberFormat($tt));


    }
    function price($val) {
        return parseInt($val.replace(/\./g, ""));
    }

    $(".change_qty").change(function () {
        $val = parseInt($(this).val());
        $id = $(this).data("id");
        if (parseInt($val) < 1) {
            $(this).val(1);
            $val = 1;
        }
        $root = $(this).parents("div.ghang-box");
        $price = parseInt($(this).data("price"));
        $root.find("div.price_tt").html(numberFormat(parseInt($val * $price)));
        $.ajax({
            url: "ajax/cart.php?type=update_qty",
            data: {"qty": $val, id: $id},
            type: "post",
            success: function (data) {
                updatePrice();
                updateCartNum();
            }

        })



    });
</script>