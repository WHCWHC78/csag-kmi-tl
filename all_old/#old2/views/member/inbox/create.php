<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript">
    //<![CDATA[
    bkLib.onDomLoaded(function() {
        nicEditors.allTextAreas({buttonList : ['fontSize','bold','italic','underline','strikethrough','hr','indent','outdent','forecolor','bgcolor','removeformat','link','unlink']});
    });
    //]]>
    Cufon.replace('.qfont');
</script>
<h1 class="qfont"><?php echo lang("member.inbox.createMSG"); ?></h1>
<form method="post" accept-charset="utf-8" action="<?php echo site_url("member/inbox/send"); ?>" class="form-horizontal" id="createMsgForm">
    <?php echo lang("member.inbox.sendTo"); ?> : <input type="text" value="csag" name="sendTo" /> <?php echo lang("member.inbox.sendTo.hint"); ?><br/>
    <?php echo lang("member.inbox.subject"); ?> : <input type="text" value="" name="subject" /><br/>
    <textarea name="bodyMSG" class="span8">
    </textarea>
    <input type="submit" value="<?php echo lang("member.inbox.sendTo.submit.btn"); ?>" class="btn btn-primary" />
</form>

