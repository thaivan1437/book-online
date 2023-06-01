<?php
	$set_level=$config["subcat"];
	$id_list=$_REQUEST["id_parent"];
	$arr=explode("|",$id_list);

	$idgv=$_REQUEST["id_gv"];

	if($set_level>0){
		function get_main_list(){
			global $rs_menu,$set_level,$d,$arr;
			$d->reset();
			$sql="select * from #_product_list where com='1' and type='".$_REQUEST["type"]."' order by stt, id desc";
			$d->query($sql);
			$rs_menu=$d->result_array();
			
			$str.='<label>Danh mục sản phẩm</label>
				<div class="formRight">
					<div class="selector">
						<select name="id_parent[]" class="form-control input level" data-level="1" id="level1" onchange="load_level($(this))" >';
				$str.="<option>Chọn danh mục cấp 1</option>";
				foreach($rs_menu as $v){
					$str.='<option value="'.$v["id"].'" ';
					if($v["id"]==$arr[0]) $str.='selected'; 
					$str.='>'.$v["ten_vi"].'</option>';
				}
			$str.='</select></div></div></br>';
			$str.='<div class="level_box" id="level2"></div>';
			
			return $str;
		}
	}

	function get_gv_list(){
		global $rs_menu,$set_level,$d,$id_list, $idgv;
		$d->reset();
		$sql="select * from #_product_list where com='1' and  type='giang-vien' order by stt, id desc";
		$d->query($sql);
		$rs_menu=$d->result_array();
		
		$str.='<label>Chọn giảng viên</label>
			<div class="formRight">
				<div class="selector">
				<select name="id_giangvien" class="form-control input level" data-level="1" id="level1" onchange="load_level($(this))" >';
				$str.="<option>Chọn giảng viên</option>";
				foreach($rs_menu as $v){
					$str.='<option value="'.$v["id"].'" ';
					if($v["id"]==$idgv) $str.='selected'; 
					$str.='>'.$v["ten_vi"].'</option>';
				}
		$str.='</select></div></div></br>';
		return $str;
	}
?>
<script type="text/javascript">		
	function TreeFilterChanged2(){		
				$('#validate').submit();		
	}
	
</script>
<div class="control_frm" style="margin-top:25px;">
    <div class="bc">
        <ul id="breadcrumbs" class="breadcrumbs">
        <li><a href="default.php?com=product&act=man&type=<?=$_REQUEST["type"]?>&subcat=<?=$_REQUEST["subcat"]?>"><span>Danh mục sản phẩm</span></a></li>
        <li class="current"><a href="#" onclick="return false;">Thêm</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<form name="supplier" id="validate" class="form" action="default.php?com=product&act=save_list&type=<?=$_REQUEST["type"]?>&subcat=<?=$_REQUEST["subcat"]?>&curPage=<?=$_REQUEST['curPage']?>" method="post" enctype="multipart/form-data">
	<div class="widget">
		<div class="title"><img src="./images/icons/dark/record.png" alt="" class="titleIcon" />
            <h6>Nhập dữ liệu</h6>
        </div>
		<ul class="tabs">
           
			<li>
               <a href="#info">Thông tin chung</a>
			</li>
			<?php foreach ($config['lang'] as $key => $value) { ?>
			<li>
               <a href="#content_lang_<?=$key?>"><?=$value?></a>
			</li>
			<?php } ?>


		</ul>
		<div id="info" class="tab_content">
			<input type="hidden" name="id" id="id_this_product" value="<?=@$item['id']?>" />
            <?php if($_GET["subcat"]>1){?>
			<div class="formRow">
				<?= get_main_list(); ?>
				<div class="clear"></div>
			</div>
			<?php }?>



			<?php if($_GET["subcat"] ==2){?>
				<div class="formRow">
					<?= get_gv_list(); ?>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label>Giá: </label>
					<div class="formRight">
						<input type="text" id="gia" name="gia" value="<?=@$item['gia']?>"  title="Giá" class="tipS" />
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label>Giá sale: </label>
					<div class="formRight">
						<input type="text" id="giakm" name="giakm" value="<?=@$item['giakm']?>"  title="Giá km" class="tipS" />
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label>Hình thức học: </label>
					<div class="formRight">
						<input type="text" id="hinhthuc" name="hinhthuc" value="<?=@$item['hinhthuc']?>"  title="Hình thức học" class="tipS" />
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label>Ngày khai giảng: </label>
					<div class="formRight">
						<input type="text" id="ngaykhaigiang" name="ngaykhaigiang" value="<?=@$item['ngaykhaigiang']?>"  title="Ngày khai giảng" class="tipS" />
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label>Giờ học: </label>
					<div class="formRight">
						<input type="text" id="giohoc" name="giohoc" value="<?=@$item['giohoc']?>"  title="Giờ học" class="tipS" />
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label>Lịch học: </label>
					<div class="formRight">
						<input type="text" id="lichhoc" name="lichhoc" value="<?=@$item['lichhoc']?>"  title="Lịch học" class="tipS" />
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label>Số buổi học: </label>
					<div class="formRight">
						<input type="text" id="sobuoihoc" name="sobuoihoc" value="<?=@$item['sobuoihoc']?>"  title="Số buổi học" class="tipS" />
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label>Địa điểm: </label>
					<div class="formRight">
						<input type="text" id="diadiem" name="diadiem" value="<?=@$item['diadiem']?>"  title="Địa điểm" class="tipS" />
					</div>
					<div class="clear"></div>
				</div>
				
			<?php }?>





			<div class="formRow">
				<label>Thẻ H1: </label>
				<div class="formRight">
					<input type="text" id="h1" name="h1" value="<?=@$item['h1']?>"  title="Nhập thẻ heading 1" class="tipS" />
				</div>
				<div class="clear"></div>
			</div> 
			<div class="formRow">
				<label>Thẻ H2: </label>
				<div class="formRight">
					<input type="text" id="h2" name="h2" value="<?=@$item['h2']?>"  title="Nhập thẻ heading 2" class="tipS" />
				</div>
				<div class="clear"></div>
			</div>
			<div class="formRow">
				<label>Thẻ H3: </label>
				<div class="formRight">
					<input type="text" id="h3" name="h3" value="<?=@$item['h3']?>"  title="Nhập thẻ heading 3" class="tipS" />
				</div>
				<div class="clear"></div>
			</div>
			
			<div class="formRow">
				<label>Hình ảnh đại diện: </label>
				<div class="formRight">
					<?php if ($_REQUEST['act']=='edit_list' && $item['photo']!='' ) { ?>
					<img width="100" src="<?=_upload_product.$item['photo']?>">
					<!--<a title="Xoá ảnh" href="default.php?com=product&act=delete_img&id=<?=@$item['id']?>">Xoá ảnh</a>-->
					<br>
					<?php }?>
					<input type="file" id="file" name="file" /><img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình đại diện cho danh mục sản phẩm (ảnh JPEG, GIF , JPG , PNG)">
				</div>
				<div class="clear"></div>
			</div>
			<div class="formRow">
				<label>Hình ảnh kèm theo: <?=count($ds_photo1)?></label>
				<div class="formRight">
					<a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif"><i class="fa fa-paperclip"></i> Thêm ảnh</a>
					<?php if($act=='edit_list'){?>
						<?php if(count($ds_photo1)!=0){?>       
							<?php for($i=0;$i<count($ds_photo1);$i++){?>
							<div class="item_trich trich<?=$ds_photo1[$i]['id']?>">
								<img class="img_trich" width="100px" height="80px" src="<?=_upload_product.$ds_photo1[$i]['photo']?>" />
								<input type="text" id="stt_trich<?=$ds_photo1[$i]['id']?>" value="<?=$ds_photo1[$i]['stt']?>" onkeypress="return OnlyNumber(event)" class="tipS" onchange="return updateStthinh('hasp', '<?=$ds_photo1[$i]['id']?>')" />
								<a href="javascript:void(0)" class="change_stt" rel="<?=$ds_photo1[$i]['id']?>"><i class="fa fa-trash-o"></i></a>
								<div id="loader<?=$ds_photo1[$i]['id']?>" class="loader_trich"><img src="images/loader.gif" /></div>
							</div>
							<?php }?>
						<?php }?>
					<?php }?>
				</div>
				<div class="clear"></div>
			</div>

			<div class="formRow">
				<label>Tùy chọn: <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Check vào những tùy chọn "> </label>
				<div class="formRight">
					<input type="checkbox" name="is_noindex" id="check2" <?=(!isset($item['is_noindex']) || $item['is_noindex']==1)?'checked="checked"':''?> />
					<label for="check2">Noindex, nofollow <img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Check nếu bạn muốn Google không index sản phẩm này!" style="float:right; margin-top:0;" /></label>
					<input type="checkbox" name="hienthi" id="check1" value="1" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> />
					<label for="check1">Hiển thị</label>           
				</div>
				<div class="clear"></div>
			</div>
			<div class="formRow">
				<label>Số thứ tự: </label>
				<div class="formRight">
					<input type="text" class="tipS" value="<?=isset($item['stt'])?$item['stt']:1?>" name="stt" style="width:20px; text-align:center;" onkeypress="return OnlyNumber(event)" original-title="Số thứ tự của sản phẩm, chỉ nhập số">
				</div>
				<div class="clear"></div>
			</div>
			<div class="formRow">
				<div class="formRight">
					
					<input type="button" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php foreach ($config['lang'] as $key => $value) {?>

		<div id="content_lang_<?=$key?>" class="tab_content">        
            <div class="formRow">
				<label>Tên sản phẩm</label>
				<div class="formRight">
					<input type="text" name="ten_<?=$key?>" title="Nhập tên sản phẩm" id="ten_<?=$key?>" class="tipS" value="<?=@$item['ten_'.$key]?>" />
				</div>
				<div class="clear"></div>
			</div>
			<?php if ($_REQUEST["type"] == 'video-khoa-hoc' || $_REQUEST["type"] == 'khoa-hoc') {?>
				<div class="formRow">
					<label>Mô tả khóa học: <img src="./images/question-button.png" alt="Chọn loại"  class="icon_que" original-title="Viết mô tả ngắn"> </label>
					<div class="formRight">
						<textarea name="mtkh" rows="8" cols="60" class="editor" id="mtkh"><?=@$item['mtkh']?></textarea>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label>Link youtube mô tả khóa học</label>
					<div class="formRight">
						<input type="text" value="<?=@$item['mtkh_video']?>" name="mtkh_video" title="Link youtube mô tả khóa học" class="tipS" />
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label>Chương trình khuyến mãi: <img src="./images/question-button.png" alt="Chọn loại"  class="icon_que tipS" original-title="Viết nội dung chính"> </label>
					<div class="formRight">
						<textarea name="ctkm" rows="8" cols="60" class="editor" id="ctkm"><?=@$item['ctkm']?></textarea>
					</div>
					<div class="clear"></div>
				</div>

				<div class="formRow">
					<label>Kết quả sau khóa học: <img src="./images/question-button.png" alt="Chọn loại"  class="icon_que" original-title="Viết mô tả ngắn"> </label>
					<div class="formRight">
						<textarea name="result_kh" rows="8" cols="60" class="editor" id="result_kh"><?=@$item['result_kh']?></textarea>
					</div>
					<div class="clear"></div>
				</div>
			<?php } else {?>
				<div class="formRow">
					<label>Mô tả ngắn:<img src="./images/question-button.png" alt="Chọn loại"  class="icon_que tipS" original-title="Viết mô tả ở đây"> </label>
					<div class="formRight">
						<textarea name="mota_<?=$key?>" rows="8" cols="60" class="editor" id="mota_<?=$key?>"><?=@$item['mota_'.$key]?></textarea>
					</div>
					<div class="clear"></div>
				</div>  
				<div class="formRow">
					<label>Nội dung: <img src="./images/question-button.png" alt="Chọn loại"  class="icon_que tipS" original-title="Viết nội dung chính"> </label>
					<div class="formRight">
						<textarea name="noidung_<?=$key?>" rows="8" cols="60" class="editor" id="noidung_<?=$key?>"><?=@$item['noidung_'.$key]?></textarea>
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>

			
			<div class="formRow">
				<label>Title</label>
				<div class="formRight">
					<input type="text" value="<?=@$item['title_'.$key]?>" name="title_<?=$key?>" title="Nội dung thẻ meta Title dùng để SEO" class="tipS" />
				</div>
				<div class="clear"></div>
			</div>
        
			<div class="formRow">
				<label>Từ khóa</label>
				<div class="formRight">
					<input type="text" value="<?=@$item['keywords_'.$key]?>" name="keywords_<?=$key?>" title="Từ khóa chính cho sản phẩm" class="tipS" />
				</div>
				<div class="clear"></div>
			</div>
        
			<div class="formRow">
				<label>Description:</label>
				<div class="formRight">
					<textarea rows="8" cols="" title="Nội dung thẻ meta Description dùng để SEO" class="tipS description_input" name="description_<?=$key?>"><?=@$item['description_'.$key]?></textarea>(Tốt nhất là 160 ký tự)</b>
				</div>
				<div class="clear"></div>
			</div>

			<div class="formRow">
				<div class="formRight">
					
					<input type="button" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
				</div>
				<div class="clear"></div>
			</div>

       </div><!-- End content <?=$key?> -->
      
     <?php } ?>
	</div>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		load_level($(".level"));
		$('.file_input').filer({
			showThumbs: true,
			templates: {
					box: '<ul class="jFiler-item-list"></ul>',
					item: '<li class="jFiler-item">\
											<div class="jFiler-item-container">\
													<div class="jFiler-item-inner">\
															<div class="jFiler-item-thumb">\
																	<div class="jFiler-item-status"></div>\
																	<div class="jFiler-item-info">\
																			<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
																	</div>\
																	{{fi-image}}\
															</div>\
															<div class="jFiler-item-assets jFiler-row">\
																	<ul class="list-inline pull-left">\
																			<li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
																	</ul>\
																	<ul class="list-inline pull-right">\
																			<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
																	</ul>\
															</div>\<input type="text" name="stthinh[]" class="stthinh" />\
													</div>\
											</div>\
									</li>',
					itemAppend: '<li class="jFiler-item">\
											<div class="jFiler-item-container">\
													<div class="jFiler-item-inner">\
															<div class="jFiler-item-thumb">\
																	<div class="jFiler-item-status"></div>\
																	<div class="jFiler-item-info">\
																			<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
																	</div>\
																	{{fi-image}}\
															</div>\
															<div class="jFiler-item-assets jFiler-row">\
																	<ul class="list-inline pull-left">\
																			<span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
																	</ul>\
																	<ul class="list-inline pull-right">\
																			<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
																	</ul>\
															</div>\<input type="text" name="stthinh[]" class="stthinh" />\
													</div>\
											</div>\
									</li>',
					progressBar: '<div class="bar"></div>',
					itemAppendToEnd: true,
					removeConfirmation: true,
					_selectors: {
							list: '.jFiler-item-list',
							item: '.jFiler-item',
							progressBar: '.bar',
							remove: '.jFiler-item-trash-action',
					}
			},
			addMore: true
	});
	})
	function load_level($obj){
		$level=$obj.data("level");
		$id=$obj.val();
		if($id!=0){
		$.ajax({
			type:"POST",
			url:"ajax/ajax.php",
			data:{level:$level,id:$id, act: "load_level", id_parent: "<?=$_REQUEST["id_parent"]?>",type:"<?=$_REQUEST["subcat"]?>"},
			success: function(data){
				$("#level"+($level+1)).html(data);
			}
		})
		}
	}
</script>