<?php
$is_join = false;
if ($this->auth->is_member()) {
    $this->load->helper('event');
    $mid = $this->auth->get_member_id();
    if (event_member_is_join($mid, $event["eid"])) {
        $is_join = true;
    }
}
?><script type="text/javascript" src="<?php echo base_url("resources/js/jquery.sticky.js"); ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        // Apply font
        Cufon.replace('.qfont');
        
      //  $(".sticky").sticky({topSpacing:60});
        
        $(".modal-body-temp").hide();
        $("#BTN-Submit").attr('disabled','disabled');
        $("#BTN-Submit").hide();
        
        $(".BTN-Operation").click(function(){
            $('.modal-body').html("Loading!");
            $('.modal-body').load('<?php echo site_url("event/" . (($is_join) ? 'leave' : 'join') . "/" . $event["eid"] . "/check"); ?>',function(){
                if($('.modal-body').html()=='success!'){
                    $("#BTN-Submit").removeAttr('disabled');
                    $("#BTN-Submit").show();
                    $('.modal-body').html($('.modal-body-temp').html());
                }
            });
        });
        
    });
</script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-e8f6432e-96c8-5034-6086-5d99e494a8f5", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/th_TH/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="row">
    <div class="span2" align="center">
        <div class="span2 sticky">
            <img src="<?php echo $event["url_logo"]; ?>" width="128" height="128" /><br/>
            <?php if ($is_join && $event["can_leave"] != 'Y') { ?>
                <a class="btn btn-danger btn-large disabled"><?php echo ($is_join) ? lang("event.detail.leave") : lang("event.detail.join"); ?></a>
            <?php } else { ?>
                <a href="#" data-toggle="modal" data-target="#EventOperation" class="BTN-Operation btn btn-large btn-primary" style="margin-top:10px; margin-bottom:10px;"><?php echo ($is_join) ? lang("event.detail.leave") : lang("event.detail.join"); ?></a>
            <?php } ?>
            <div class="fb-like" data-href="<?php echo base_url("detail/" . $event["eid"]); ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true"></div>
            <br/>
			<br/>
            <span class='st_facebook_large' displayText='Facebook'></span>
            <span class='st_twitter_large' displayText='Tweet'></span>
            <span class='st_email_large' displayText='Email'></span>
            <?php
            $eas_start = false;
            $eas_finnish = false;
            $eas_status = false;
            switch ($event["eapply_type"]) {
                case "Open" :
                    $eas_status = true;
                    break;
                case "Close" :
                    break;
                default:
                    $this->load->helper('event');
                    $apply_status = event_is_not_expire("Auto", $event["eapply_start"], $event["eapply_finnish"]);
                    if ($apply_status) {
                        $eas_start = true;
                        $eas_finnish = true;
                        $eas_status = true;
                    } else {
                        $eas_start = true;
                        $eas_finnish = true;
                        $eas_status = false;
                    }
            }
            ?>
            <?php if ($eas_start) { ?>
                <b><?php echo lang("event.detail.start"); ?></b><br/>
                <span class="badge"><?php echo $event["eapply_start"]; ?></span><br/>
            <?php } ?>
            <?php if ($eas_finnish) { ?>
                <b><?php echo lang("event.detail.finnish"); ?></b><br/>
                <span class="badge"><?php echo $event["eapply_finnish"]; ?></span><br/>
            <?php } ?>

            <b><?php echo lang("event.detail.status"); ?></b><br/>
            <?php if ($eas_status) { ?>
                <span class="badge badge-success"><?php echo lang("event.detail.open"); ?></span>
            <?php } else { ?>
                <span class="badge badge-important"><?php echo lang("event.detail.close"); ?></span>
            <?php } ?>
            <br/><br/>

            <?php
            if ($event["show_count_registered"] == "Y") {
                $this->load->helper('event');
                echo "<b>" . lang("event.detail.num_joiner") . "</b><br/>";
                echo '<span  class = "badge badge-inverse">';
                echo event_joiner_count($event["eid"]);
                echo '</span><br /  > ';
            }
            ?>
            <b><?php echo lang("event.detail.limit"); ?></b><br/>
            <span class="badge badge-important">
                <?php
                switch ($event["limit_joiner"]) {
                    case -1:
                        echo lang("event.detail.quick");
                        break;
                    case 0:
                        echo lang("event.detail.unlimit");
                        break;
                    default:
                        echo $event["limit_joiner"];
                        break;
                }
                ?>
            </span>
            <br/>
        </div>
    </div>
    <div class = "span9" style = "margin-left: 40px;">
        <h1 class = "qfont">
            <?php
            $s = "ename_" . getLang();
            echo $event[$s];
            ?>
        </h1>
        <?php
        $s = "detail_" . getLang();
        echo $event[$s];
        ?>

        <?php
        if ($event["show_joiner_detail"] == "Y") {
            if ($this->auth->is_member()) {
                $mid = $this->auth->get_member_id();
                if (event_member_is_join($mid, $event["eid"])) {
                    echo '<a name =  "joiner_only"></a>';
                    echo '<img src="' . base_url("resources/img/icon/icon-members.png") . '" style="float:left;" />';
                    echo '<h1 class="qfont" style="float:left; padding-left:10px;">';
                    echo lang("event.detail.joiner_detail");
                    echo '</h1>';
                    $s = "joiner_detail_" . getLang();
                    echo '<div class="clearfix"></div>';
                    echo $event[$s];
                }
            }
        }
        ?>
    </div>
</div>
<br/>

<!-- Modal -->
<form action="<?php echo site_url("event/" . (($is_join) ? "leave" : "join") . '/' . $event["eid"]); ?>" method="POST">
    <div id="EventOperation" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="EventOperationLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="EventOperationLabel"><?php echo ($is_join) ? lang("event.detail.leave") : lang("event.detail.join"); ?></h3>
        </div>
        <div class="modal-body">
            Loading...
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="<?php echo lang("event.detail.modal.confirm"); ?>" id="BTN-Submit" />
            <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo lang("event.detail.modal.close"); ?></button>
        </div>
    </div>
</form>
<div class="modal-body-temp">
    <?php echo lang("event.detail.modal.please"); ?><hr/>
    <?php if (!$is_join) { ?>
        <?php echo lang("event.detail.modal.know"); ?><br/>
        <?php echo lang("event.detail.modal.know.example"); ?><br/>
        <input type="text" name="know" maxlength="50" /><hr/>
    <?php } ?>
    <?php echo ($is_join) ? lang("event.detail.modal.reason.leave") : lang("event.detail.modal.reason.join"); ?><br/>
    <input type="text" name="reason" maxlength="255" class="span6" />
</div>
