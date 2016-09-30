<script type="text/javascript">
    $(document).ready(function(){
        Cufon.replace('.qfont');
        $('.tt').popover({
            'trigger':'hover',
            'html':true
        });
    });
</script>
<div class="alert">Caution!, Admin mode don't have form validation, Please fill with carefully.</div>
<h1 class="qfont">Edit event</h1>
<form method="post" accept-charset="utf-8" action="<?php echo site_url("admin/event_edit/" . $event->eid); ?>" class="form-horizontal" id="eventForm">
    <div class="control-group">
        <label class="control-label" for="ename_th">Event name (TH)</label>
        <div class="controls">
            <input maxlength="150" name="ename_th" type="text" class="span5" value="<?php echo $event->ename_th; ?>" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="ename_en">Event name (EN)</label>
        <div class="controls">
            <input maxlength="150" name="ename_en" type="text" class="span5" value="<?php echo $event->ename_en; ?>" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="eapply_start">Apply start date</label>
        <div class="controls">
            <input maxlength="150" name="eapply_start" type="datetime-local" class="span3" value="<?php echo date('Y-m-d', strtotime($event->eapply_start)) . "T" . date('H:i:s', strtotime($event->eapply_start)); ?>" />MM/DD/YYYY HH:II (AM/PM)
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="eapply_finnish">Apply finish date</label>
        <div class="controls">
            <input maxlength="150" name="eapply_finnish" type="datetime-local" class="span3" value="<?php echo date('Y-m-d', strtotime($event->eapply_finnish)) . "T" . date('H:i:s', strtotime($event->eapply_finnish)); ?>" />MM/DD/YYYY HH:II (AM/PM)
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="eapply_type">Show apply type</label>
        <div class="controls">
            <select name="eapply_type" class="span5">
                <option value="Auto"<?php echo ($event->eapply_type == "Auto") ? ' selected' : ''; ?>>Auto - Auto Open/Close follow start - finish date</option>
                <option value="Open"<?php echo ($event->eapply_type == "Open") ? ' selected' : ''; ?>>Open - Always open</option>
                <option value="Close"<?php echo ($event->eapply_type == "Close") ? ' selected' : ''; ?>>Close - Always close</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="rules">Joiner restrict rule</label>
        <div class="controls">
            <input maxlength="150" name="rules" type="text" class="span3" value="<?php echo $event->restrict_rules; ?>" />
            <i data-toggle="tooltip" title="Input guide" data-content="#any mean all of member can join<br/>#Student mean only KMITL student member can join<br/>#Inside mean only KMITL person (not include student) can join<br/>#KMITL mean only KMITL people (#Student,#Inside Type) can join<br/>#Outsite mean only other people don't in KMITL can join<br/><hr/>Ohter specific mean Regular expression pattern for check KMITL ID (LDAP ID) ex. /s6[0-9]{6}/" class="tt icon-plus"></i>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="limit_joiner">Limit joiner</label>
        <div class="controls">
            <input name="limit_joiner" type="number" class="span1"  value="<?php echo $event->limit_joiner; ?>" min="-1" />
            <i data-toggle="tooltip" title="Input guide" data-content="-1 mean unlimit but show member should quickly join<br/>0 mean unlimit and show member unlimit joiner<br/>Other number mean limit joiner(s) as specific" class="tt icon-plus"></i>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="can_leave">Joiner can leave</label>
        <div class="controls">
            <label class="radio inline">
                <input type="radio" name="can_leave" value="Y"<?php echo ($event->can_leave == "Y") ? ' checked' : ''; ?>/>Yes
            </label>
            <label class="radio inline">
                <input type="radio" name="can_leave" value="N"<?php echo ($event->can_leave == "N") ? ' checked' : ''; ?>/>No
            </label>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="show_count_registered">Show joiner counter</label>
        <div class="controls">
            <label class="radio inline">
                <input type="radio" name="show_count_registered" value="Y"<?php echo ($event->show_count_registered == "Y") ? ' checked' : ''; ?>/>Yes
            </label>
            <label class="radio inline">
                <input type="radio" name="show_count_registered" value="N"<?php echo ($event->show_count_registered == "N") ? ' checked' : ''; ?>/>No
            </label>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="public">Public this event</label>
        <div class="controls">
            <label class="radio inline">
                <input type="radio" name="public" value="Y"<?php echo ($event->public == "Y") ? ' checked' : ''; ?>/>Yes
            </label>
            <label class="radio inline">
                <input type="radio" name="public" value="N"<?php echo ($event->public == "N") ? ' checked' : ''; ?>/>No
            </label>
            <i data-toggle="tooltip" title="Input guide" data-content="If yor are using admin mode you can see all event (don't care that event is set to No)" class="tt icon-plus"></i>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="detail_th">Detail of event (TH)</label>
        <div class="controls">
            <textarea name="detail_th" class="span6"><?php echo trim($event->detail_th); ?></textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="detail_en">Detail of event (EN)</label>
        <div class="controls">
            <textarea name="detail_en" class="span6"><?php echo trim($event->detail_en); ?></textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="show_joiner_detail">Show joiner detail</label>
        <div class="controls">
            <label class="radio inline">
                <input type="radio" name="show_joiner_detail" value="Y"<?php echo ($event->show_joiner_detail == "Y") ? ' checked' : ''; ?>/>Yes
            </label>
            <label class="radio inline">
                <input type="radio" name="show_joiner_detail" value="N"<?php echo ($event->show_joiner_detail == "N") ? ' checked' : ''; ?>/>No
            </label>
            <i data-toggle="tooltip" title="Input guide" data-content="Joiner detail is specific informations for joiner only!" class="tt icon-plus"></i>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="joiner_detail_th">Detail of event (TH)</label>
        <div class="controls">
            <textarea name="joiner_detail_th" class="span6"><?php echo trim($event->joiner_detail_th); ?></textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="joiner_detail_en">Detail of event (EN)</label>
        <div class="controls">
            <textarea name="joiner_detail_en" class="span6"><?php echo trim($event->joiner_detail_en); ?></textarea>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="url_logo">URL of event logo</label>
        <div class="controls">
            <input maxlength="255" name="url_logo" type="text" class="span5" value="<?php echo $event->url_logo; ?>" />
        </div>
    </div>
    <input type="hidden" name="EDIT" value="true" />
    <button type="submit" class="btn btn-primary btn-large offset2">Edit</button>
</fieldset>

</form>