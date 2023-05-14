<div class="control_frm" style="margin-top:25px;">
   
</div>
<form name="f" id="f" method="post">
<div class="control_frm" style="margin-top:0;">
  	<div style="float:left;">
    	<input type="button" class="blueB" value="Thêm" onclick="location.href='default.php?com=product&act=add_color&idc=<?= $_REQUEST['idc']; ?>'" />
    </div>
	
</div>

<div class="widget">
	<div class="title">
		<span class="titleIcon">
			<input type="checkbox" id="titleCheck" name="titleCheck" />
		</span>
		<h6>Danh sách các bài viết hiện có</h6>
	</div>
	<table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
		<thead>
			<tr>
				<td></td>
				<td class="tb_data_small"><a href="#" class="tipS" style="margin: 5px;">Thứ tự</a></td>
				<td class="sortCol"><div>Tên màu<span></span></div></td>
				<td class="sortCol"><div>Color<span></span></div></td>
				<td class="tb_data_small">Ẩn/Hiện</td>
				<td width="200">Thao tác</td>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0, $count=count($items); $i<$count; $i++){?>
			<tr>
				<td>
					<input type="checkbox" name="iddel[]" value="<?=$items[$i]['id']?>" id="check<?=$i?>" />
				</td>
				<td align="center">
					<input type="text" value="<?=$items[$i]['stt']?>" name="ordering[]" onkeypress="return OnlyNumber(event)" class="tipS smallText" original-title="Nhập số thứ tự sản phẩm" id="number<?=$items[$i]['id']?>" onchange="return updateNumber('product_color', '<?=$items[$i]['id']?>')" />
					<div id="ajaxloader"><img class="numloader" id="ajaxloader<?=$items[$i]['id']?>" src="images/loader.gif" alt="loader" /></div>
				</td> 
				<td class="title_name_data" align="center">
					<a href="default.php?com=product&act=edit_color&idc=<?= $_REQUEST['idc'] ?>&id=<?= $items[$i]['id'] ?>" class="tipS SC_bold">
						<?=$items[$i]["ten"]?>
					</a>
				</td>
				<td align="center">
					<div style="margin:auto; background:<?=$items[$i]['color'] ?>; width: 15px; height: 15px;"></div>
				</td>
		   
				<td align="center">
					<input type="checkbox" data-com="hienthi" data-table="product_color" data-id="<?=$items[$i]['id']?>" <?php if($items[$i]['hienthi']==1) echo "checked";?> name="hienthi" value="<?=$items[$i]['id']?>" class="check_box" />
				</td>
				<td class="actBtns">
					<a href="default.php?com=product&act=edit_color&idc=<?= $_REQUEST['idc'] ?>&id=<?= $items[$i]['id'] ?>" title="" class="smallButton tipS" original-title="Sửa sản phẩm"><img src="./images/icons/dark/pencil.png" alt=""></a>
					<a style="cursor:pointer" onclick="CheckDelete('default.php?com=product&act=delete_color&idc=<?= $_REQUEST['idc'] ?>&id=<?= $items[$i]['id'] ?>'); return false;" title="" class="smallButton tipS" original-title="Xóa sản phẩm"><img src="./images/icons/dark/close.png" alt=""></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="10"><div class="pagination paging"><?= $paging['paging'] ?></div></td>
			</tr>
		</tfoot>
	</table>
</div>
</form>
<script type="text/javascript">
	
	function CheckDelete(l){
		if(confirm('Bạn có chắc muốn xoá bài viết này?'))
		{
			location.href = l;	
		}
	}	
	function ChangeAction(str){
		if(confirm("Bạn có chắc chắn?"))
		{
			document.f.action = str;
			document.f.submit();
		}
	}
</script>