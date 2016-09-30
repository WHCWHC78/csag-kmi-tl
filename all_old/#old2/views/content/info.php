<div class="alert<?php echo $type; ?>">
    <!--<button type="button" class="close" data-dismiss="alert">&times;</button> -->
    <?php echo $message; ?>
    <?php if ($time != -1) { ?>
        <META HTTP-EQUIV="Refresh" CONTENT="<?php echo $time; ?>;URL=<?php echo $redirect_page; ?>">
    <?php } ?>
    <br/><br/><a href="<?php echo $redirect_page; ?>" class="btn"><?php echo lang("info.click"); ?></a>
</div>