<script type="text/javascript">
    $(document).ready(function(){
        // Apply font
        Cufon.replace('.qfont');
    });
</script>

<h2 class="qfont"><?php echo lang("member.inbox.yourInboxList"); ?></h2>
<a href="<?php echo site_url("member/inbox"); ?>" class="btn"><?php echo lang("member.inbox.detail.back"); ?></a>
<br/><br/>
<table class="table table-bordered">
    <tr>
        <th class="span2"><?php echo lang("member.inbox.subject"); ?></th>
        <td><?php echo $message->subject; ?></td>
    </tr>
    <tr>
        <th class="span2"><?php echo lang("member.inbox.from"); ?></th>
        <td><?php echo $from; ?></td>
    </tr>
    <tr>
        <th class="span2"><?php echo lang("member.inbox.sendDate"); ?></th>
        <td><?php echo $message->when; ?></td>
    </tr>
    <tr>
        <td colspan="2"><?php echo lang("member.inbox.body") . " : <br/>" . $message->body; ?><br/></td>
    </tr>
</table>
