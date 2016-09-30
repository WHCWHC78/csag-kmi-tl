<script type="text/javascript">
    $(document).ready(function(){
        // Apply font
        Cufon.replace('.qfont');
    });
</script>
<h1 class="qfont"><?php echo lang("member.yourEventList"); ?></h1>

<!-- canon comment-->
<!--<?php foreach ($join_list as $jl) { ?>
    <?php
    $query2 = $this->db->get_where('events', array('eid' => $jl->eid));
    $row = $query2->row();
    ?>
    <div class="row" style="margin-bottom: 20px;">
        <div class="span2">
            <img src="<?php echo $row->url_logo; ?>" width="128" height="128" />
        </div>
        <div class="span5">
            <h2 class="qfont">
                <?php
                $s = "ename_" . getLang();
                echo $row->$s;
                ?>
            </h2>
            <?php echo '<a href="' . site_url("event/detail/" . $row->eid . '/' . $row->$s) . '" class="btn btn-danger">' . lang("event.list.join") . '</a>'; ?>
            <?php
            if ($row->show_joiner_detail == "Y")
                echo '<a href="' . site_url("event/detail/" . $row->eid . '/' . $row->$s) . '#joiner_only" class="btn btn-info">' . lang("evetn.list.joiner_detail_btn") . '</a>';
            ?>
        </div>
    </div>
<?php } ?>-->
