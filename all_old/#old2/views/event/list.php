<script type="text/javascript">
    $(document).ready(function(){
        // Apply font
        Cufon.replace('.qfont');
        
        // Filter
        // Dev By Q
        $('#filter-none').click(function() {
            $('.filter-btn').removeClass("btn-primary");
            $(this).addClass("btn-primary");
            $('.event-item').show("normal");
        });
        $('#filter-not-expire').click(function() {
            $('.filter-btn').removeClass("btn-primary");
            $(this).addClass("btn-primary");
            $('.event-not-expire').show();
            $('.event-item:not(.event-not-expire)').hide("normal");
        });
        $('#filter-not-full').click(function() {
            $('.filter-btn').removeClass("btn-primary");
            $(this).addClass("btn-primary");
            $('.event-not-full').show();
            $('.event-item:not(.event-not-full)').hide("normal");
        });
        $('#filter-none').click();
    });
</script>

	<div class="alert alert-block">
		<span style="font-size:150%;">ขณะนี้เว็บไซต์กำลังทำการปรับปรุง จะเปิดรับสมัครในเร็วๆนี้ </span>
	</div>

<h2 class="qfont"><?php echo lang("event.list.filter.header"); ?></h2>
<div class="row">
    <div class="span3">
        <div class="well">
            <?php echo lang("event.list.filter"); ?>:<br/>
            <button class="btn filter-btn" id="filter-none" style="width:80%;"><?php echo lang("event.list.filter.all"); ?></button><br/>
            <button class="btn filter-btn" id="filter-not-expire" style="width:80%;"><?php echo lang("event.list.filter.not-expire"); ?></button><br/>
            <button class="btn filter-btn" id="filter-not-full" style="width:80%;"><?php echo lang("event.list.filter.not-full"); ?></button><br/>
        </div>
    </div>
    <div class="span8" data-step="2" data-intro="เลือกว่าจะเข้าร่วมกิจกรรมอะไร"><?php
            $count = 0;
            foreach ($event_list as $row) {
                $count++
                ?>
            <div class="row event-item<?php
        $this->load->helper('event');
        if (event_is_not_expire($row->eapply_type, $row->eapply_start, $row->eapply_finnish))
            echo " event-not-expire";
        if (event_is_not_full($row->eid, $row->limit_joiner))
            echo " event-not-full";
                ?>" style="margin: 10px 10px 30px 10px;">
                <div class="span2">
                    <img src="<?php echo $row->url_logo; ?>" width="128" height="128" class="img-polaroid" />
                </div>
                <div class="span5">
                    <h2 class="qfont">
                        <?php
                        $s = "ename_" . getLang();
                        echo $row->$s;
                        ?>
                    </h2>
                    <?php echo '<a href="' . site_url("event/detail/" . $row->eid . '/' . $row->$s) . '" class="btn btn-danger">' . lang("event.list.join") . '</a>'; ?>
                </div>
            </div>        
        <?php } ?>
    </div>
</div>
<br/>