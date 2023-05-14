
<div style="padding-top:50px" class="breadcrumb-arrow"><?=$breakcrumb?></div>
<div class="container">
    <?php foreach($tintuc as $v) { ?>
    <div class="event-group">
        <div class="mb-4"><img src="<?= _upload_tintuc_l . $v["photo"] ?>" alt="event" class="img-fluid img-100"></div>
        <div class="event-contain">
            <div class="event-left">
                <div class="event-title"><?=$v['ten']?></div>
                <div class="mb-3"><?=$v['noidung']?></div>
                <div class="event-time"><?=$v['mota']?></div>
            </div>
            <div class="event-right" data-toggle="modal" data-target="#myModal">Để lại thông tin <br> <b>NHẬN QUÀ ƯU ĐÃI</b></div>
        </div>
    </div>
    <?php } ?>
</div>