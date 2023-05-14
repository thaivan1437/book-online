<div class="control_frm" style="margin-top:25px;">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
        	            <li><a href="default.php?com=user&act=man"><span>Thành viên</span></a></li>
                                    <li class="current"><a href="#" onclick="return false;">Tất cả</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<script language="javascript">
	function CheckDelete(l){
		if(confirm('Bạn có chắc muốn xoá thành viên này?'))
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
function select_onchange()
	{
		var a=document.getElementById("id_role");
		window.location ="default.php?com=user&act=man&id_role="+a.value;	
		return true;
	}					
</script>
<form name="f" id="f" method="post">
  <div class="control_frm" style="margin-top:0;">
      <div style="float:left;">
        <input type="button" class="blueB" value="Thêm" onclick="location.href='default.php?com=user&act=add'" />
      </div>  
      <div style="float:right;display:none;">
          <div class="selector">
            <select name="id_role" id="id_role" onchange="select_onchange()">
                  <option value="0">Nhóm thành viên</option>
            </select>
          </div>  
          <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" style="float:right; margin:5px 5px 0 0;" original-title="Dùng cây thư mục để di chuyển nhanh đến thành viên">   
      </div>  
  </div>



  <div class="widget">
    <div class="title"><span class="titleIcon">
      <input type="checkbox" id="titleCheck" name="titleCheck" />
      </span>
      <h6>Danh sách các thành viên hiện có</h6>
    </div>
    <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
      <thead>
        <tr>
          <td></td>
          <td class="sortCol"><div>Username<span></span></div></td>
          <td width="150">Nhóm</td>
          <td class="tb_data_small">Enable/Disable</td>       
          <td width="100">Thao tác</td>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="10"><div class="pagination">  <?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?>     </div></td>
        </tr>
      </tfoot>
      <tbody>
          <?php for($i=0, $count=count($items); $i<$count; $i++){?>
            <tr>
        <td>
              <input type="checkbox" name="iddel[]" value="<?=$items[$i]['id']?>" id="check<?=$i?>" />
          </td>
          
          <td align="center">
            <a href="default.php?com=user&act=edit&id=<?=$items[$i]['id']?>" class="tipS SC_bold"><?=$items[$i]['username']?></a>
          </td>
        
          <td class="title_name_data" align="center">
            <?= ($items[$i]['role']==3) ? "Administrator" : "User" ?>
          </td>
        
          <td align="center">
            <?php if($_SESSION['login']['role']==3) { ?>
            <input type="checkbox" data-com="hienthi" data-table="user" data-id="<?=$items[$i]['id']?>" <?php if($items[$i]['hienthi']==1) echo "checked";?> name="hienthi" value="<?=$items[$i]['id']?>" class="check_box" />
            <?php } ?>
          </td>
          <td class="actBtns">
            <?php if($_SESSION['login']['role']==3) { ?>
            <a href="default.php?com=user&act=edit&id=<?=$items[$i]['id']?>" title="" class="smallButton tipS" original-title="Sửa thành viên"><img src="./images/icons/dark/pencil.png" alt=""></a>
            <a href="" onclick="CheckDelete('default.php?com=user&act=delete&id=<?=$items[$i]['id']?>'); return false;" title="" class="smallButton tipS" original-title="Xóa thành viên"><img src="./images/icons/dark/close.png" alt=""></a> 
            <?php } ?>
          </td>
        </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>
</form>               