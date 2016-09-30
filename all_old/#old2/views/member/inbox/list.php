<script type="text/javascript">
    $(document).ready(function(){
        // Apply font
        Cufon.replace('.qfont');
    });
</script>
<h1 class="qfont"><?php echo lang("member.inbox.yourInboxList"); ?></h1>
<a href="<?php echo site_url("member/inbox/create"); ?>" class="btn btn-info"><?php echo lang("member.inbox.createMSG.btn"); ?></a><br/><br/>
<table class="table table-bordered">
    <tr>
        <th><i style="padding-left: 25px;">Subject</i></th>
        <th class="span3">Date</th>
    </tr>
    <?php foreach ($message as $m) { ?>
        <tr>
            <td><a href="<?php echo site_url("member/inbox/delete/" . $m->iid); ?>"><i class="icon-trash"></i></a><a href="<?php echo site_url("member/inbox/read/" . $m->iid); ?>" style="padding-left: 10px;"><?php echo $m->subject; ?></a></td>
            <td><?php echo $m->when ?></td>
        </tr>
    <?php } ?>
</table>
