<link rel="stylesheet" type="text/css" href="assets/css/popup.css"/>

<div class="d-lg-flex d-md-flex justify-content-between mb-5">
	<div class="tcon-left">
		<div class="breadcrumb-arrow"><?=$breakcrumb?></div>
		<div class="text-center text-uppercase td-chung"><?= $title_tcat ?></div>
		<div class="sp-bao">     	         
            <?php
            if (count($tintuc) > 0) {
                for ($i = 0, $count_tintuc = count($tintuc); $i < $count_tintuc; $i++) {
                    ?>
                    <div class="video">     
                        <div class="item_product_menu">
                            <div class="images">
								<a class="xem_video" href="<?= getYoutubeIdFromUrl($tintuc[$i]['link']) ?>">
                                    <img class="img-fluid" style="border:solid 1px #ccc" src="http://img.youtube.com/vi/<?= getYoutubeIdFromUrl($tintuc[$i]['link']) ?>/0.jpg" alt="<?= $tintuc[$i]['ten'] ?>">
                                </a>      
                            </div>
							<div class="name"><?= $tintuc[$i]['ten'] ?></div>
                        </div>
                    </div>

                    <?php
                }
            } else
                echo '<p>Nội dung đang cập nhật, bạn vui lòng xem các chuyên mục khác.</p>';
            ?>            
        </div>                         
        <div class="phantrang" ><?= $paging['paging'] ?></div>
    </div>
    <div class="tcon-right">
		<?php include _template . "layout/left.php"; ?>
	</div>
</div>