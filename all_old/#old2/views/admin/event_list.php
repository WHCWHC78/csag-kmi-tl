<script type="text/javascript">
    $(document).ready(function(){
        // Apply font
        Cufon.replace('.qfont');
        $('#myModal').modal({
            show:false
        });
        $(".BTN-LoadMember").click(function(){
            $('.modal-body').html("Loading!");
            $('.modal-body').load('<?php echo site_url("admin/event_memberList/"); ?>/'+($(this).attr('data-id')));
        });
    });
</script>
<h1 class="qfont">Event management</h1>
<a href="<?php echo site_url("admin/event_create"); ?>" class="btn btn-info">Create new event</a><br/><br/>
<table class="table table-bordered">
    <tr>
        <th class="span3"><i style="padding-left: 55px;">Event name</i></th>
        <th class="span1">Total of Joiner</th>
    </tr>
    <?php
    foreach ($event_list as $ev) {
        $s = "ename_" . getLang();
        ?>
        <tr>
            <td>
                <a href="<?php echo site_url("admin/event_delete/" . $ev->eid); ?>"><i class="icon-trash"></i></a>
                &nbsp;
                <a href="<?php echo site_url("admin/event_edit/" . $ev->eid); ?>"><i class="icon-pencil"></i></a>
                &nbsp;&nbsp;
                <a href="<?php echo site_url("event/detail/$ev->eid/" . $ev->$s); ?>"><?php echo $ev->ename_th; ?></a>
            </td>
            <td>
                <a href="#" data-toggle="modal" data-target="#myModal" data-id="<?php echo $ev->eid; ?>" class="BTN-LoadMember"><i class="icon-search"></i></a>&nbsp; <?php echo event_joiner_count($ev->eid); ?>
            </td>
        </tr>
    <?php } ?>
</table>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Joiner list</h3>
    </div>
    <div class="modal-body">
        <p>Loading…</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>