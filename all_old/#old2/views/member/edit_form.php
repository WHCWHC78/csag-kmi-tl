<script type="text/javascript" language="javascript">
    $(document).ready(function(){
        Cufon.replace('.nfont');
    });
</script>
<?php
if ($admin == true)
    echo '<div class="alert alert-error">You are enter with admin mode. You can see member data but can\'t edit</div>';
if ($row->first_name == null || $row->firstname = "")
    echo '<div class="alert alert-error">ตอนนี้ทางทีมงานได้ซีเช็ตข้อมูลบางส่วนออก โปรดกรอกใหม่อีกครั้ง<br/>ขออภัยในความไม่สะดวกมา ณ โอกาสนี้</div>';
?>
<h1 class="nfont"><?php echo lang("signup.header.edit"); ?></h1>
<p><?php echo lang("signup.explan"); ?></p><br/>
<form method="post" accept-charset="utf-8" action="<?php echo site_url("member/editData"); ?><?php if ($admin == true) echo '/admin'; ?>" class="form-horizontal" id="editForm">
    <?php echo (validation_errors() != "") ? '<div class="well">' . validation_errors() . '</div>' : ""; ?>
    <fieldset>
        <div class="control-group<?php echo (form_error('firstname') != "") ? " error" : ""; ?>">
            <label class="control-label" for="firstname"><?php echo lang("signup.firstname"); ?></label>
            <div class="controls">
                <input value="<?php echo set_value('firstname', $row->first_name); ?>" maxlength="50" placeholder="<?php echo lang("signup.ph.firstname"); ?>" id="firstname" name="firstname" type="text" />
            </div>
        </div>
        <div class="control-group<?php echo (form_error('lastname') != "") ? " error" : ""; ?>">
            <label class="control-label" for="lastname"><?php echo lang("signup.lastname"); ?></label>
            <div class="controls">
                <input value="<?php echo set_value('lastname', $row->last_name); ?>" maxlength="50" placeholder="<?php echo lang("signup.ph.lastname"); ?>" id="lastname" name="lastname" type="text" />
            </div>
        </div>
        <div class="control-group<?php echo (form_error('nickname') != "") ? " error" : ""; ?>">
            <label class="control-label" for="nickname"><?php echo lang("signup.nickname"); ?></label>
            <div class="controls">
                <input value="<?php echo set_value('nickname', $row->nick_name); ?>" maxlength="20" placeholder="<?php echo lang("signup.ph.nickname"); ?>" id="nickname" name="nickname" type="text" class="span2" />
            </div>
        </div>
        <div class="control-group<?php echo (form_error('birth_year') != "") ? " error" : ""; ?>">
            <label class="control-label" for="birth_year"><?php echo lang("signup.birth_year"); ?></label>
            <div class="controls">
                <?php echo $row->birth_year; ?>
            </div>
        </div>
        <div class="control-group<?php echo (form_error('gender') != "") ? " error" : ""; ?>">
            <label class="control-label" for="gender"><?php echo lang("signup.gender"); ?></label>
            <div class="controls">
                <?php echo lang("signup.gender." . $row->gender); ?>
            </div>
        </div>
        <div class="control-group<?php echo (form_error('telephone') != "") ? " error" : ""; ?>">
            <label class="control-label" for="telephone"><?php echo lang("signup.telephone"); ?></label>
            <div class="controls">
                <input value="<?php echo set_value('telephone', $row->telephone); ?>" maxlength="12" placeholder="<?php echo lang("signup.ph.telephone"); ?>" id="telephone" name="telephone" type="text" class="span2" />
                <font style="color:silver;""> 08xxxxxxxx </font>
            </div>
        </div>
        <div class="control-group<?php echo (form_error('email') != "") ? " error" : ""; ?>">
            <label class="control-label" for="email"><?php echo lang("signup.email"); ?></label>
            <div class="controls">
                <input value="<?php echo set_value('email', $row->email); ?>" maxlength="100" placeholder="<?php echo lang("signup.ph.email"); ?>" id="email" name="email" type="text" />
            </div>
        </div>
        <div class="control-group<?php echo (form_error('facebook') != "") ? " error" : ""; ?>">
            <label class="control-label" for="facebook"><?php echo lang("signup.facebook"); ?></label>
            <div class="controls">
                <input value="<?php echo set_value('facebook', $row->facebook); ?>" maxlength="255" placeholder="<?php echo lang("signup.ph.facebook"); ?>" id="facebook" name="facebook" type="text" />
                <font style="color:silver;""> ex. http://www.facebook.com/csag.kmitl </font>
            </div>
        </div>

        <hr/>
        <div class="control-group<?php echo (form_error('reg_type') != "") ? " error" : ""; ?>">
            <label class="control-label"><?php echo lang("signup.reg_type"); ?></label>
            <div class="controls">
                <?php echo lang("signup.rt." . $row->reg_type); ?>
            </div>
        </div>
        <?php if ($row->reg_type == "Student") { ?>
            <div class="control-group<?php echo (form_error('faculty') != "") ? " error" : ""; ?> grt grtStudent">
                <label class="control-label" for="faculty"><?php echo lang("signup.faculty"); ?></label>
                <div class="controls">
                    <?php echo $row->faculty; ?>
                </div>
            </div>
            <div class="control-group<?php echo (form_error('department') != "") ? " error" : ""; ?> grt grtStudent">
                <label class="control-label" for="department"><?php echo lang("signup.department"); ?></label>
                <div class="controls">
                    <?php echo $row->department; ?>
                </div>
            </div>
            <div class="control-group<?php echo (form_error('studentid') != "") ? " error" : ""; ?> grt grtStudent">
                <label class="control-label" for="studentid"><?php echo lang("signup.studentid"); ?></label>
                <div class="controls">
                    <?php echo $row->student_id; ?>
                </div>
            </div>
        <?php } else if ($row->reg_type == "Inside") { ?>
            <div class="control-group<?php echo (form_error('division') != "") ? " error" : ""; ?> grt grtInside">
                <label class="control-label" for="division"><?php echo lang("signup.division"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('division', $row->division); ?>" maxlength="100" placeholder="<?php echo lang("signup.ph.division"); ?>" id="division" name="division" type="text" />
                </div>
            </div>
            <div class="control-group<?php echo (form_error('subdivision') != "") ? " error" : ""; ?> grt grtInside">
                <label class="control-label" for="subdivision"><?php echo lang("signup.subdivision"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('subdivision', $row->subdivision); ?>" maxlength="100" placeholder="<?php echo lang("signup.ph.subdivision"); ?>" id="subdivision" name="subdivision" type="text" />
                </div>
            </div>
        <?php } ?>
        <?php if ($row->reg_type == "Student" || $row->reg_type == "Inside") { ?>
            <div class="control-group<?php echo (form_error('ldap') != "") ? " error" : ""; ?> grt grtStudent grtInside">
                <label class="control-label" for="ldap"><?php echo lang("signup.ldap"); ?></label>
                <div class="controls">
                    <div class="input-prepend input-append">
                        <input value="<?php echo set_value('ldap', $row->ldap); ?>" maxlength="13" placeholder="<?php echo lang("signup.ph.ldap"); ?>" id="ldap" name="ldap" type="text" class="span2" disabled="disabled" />
                        <span class="add-on">@kmitl.ac.th</span>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="control-group<?php echo (form_error('occupation') != "") ? " error" : ""; ?> grt grtOutside">
            <label class="control-label" for="occupation"><?php echo lang("signup.occupation"); ?></label>
            <div class="controls">
                <input value="<?php echo set_value('occupation', $row->occupation); ?>" maxlength="50" placeholder="<?php echo lang("signup.ph.occupation"); ?>" id="occupation" name="occupation" type="text" />
            </div>
        </div>
        <div class="control-group<?php echo (form_error('company') != "") ? " error" : ""; ?> grt grtOutside">
            <label class="control-label" for="company"><?php echo lang("signup.company"); ?></label>
            <div class="controls">
                <input value="<?php echo set_value('company', $row->company); ?>" maxlength="100" placeholder="<?php echo lang("signup.ph.company"); ?>" id="company" name="company" type="text" />
            </div>
        </div>
        <div class="control-group<?php echo (form_error('pin') != "") ? " error" : ""; ?> grt grtOutside">
            <label class="control-label" for="pin"><?php echo lang("signup.pin"); ?></label>
            <div class="controls">
                <?php if ($row->pin == null) { ?>
                    <input value="<?php echo set_value('pin', $row->pin); ?>" maxlength="13" placeholder="<?php echo lang("signup.ph.pin"); ?>" id="pin" name="pin" type="text" class="span2" />
                    <?php
                } else {
                    echo $row->pin;
                }
                ?>
            </div>
        </div>

        <hr/>
        <div class="control-group<?php echo (form_error('username') != "") ? " error" : ""; ?>">
            <label class="control-label" for="username"><?php echo lang("signup.username"); ?></label>
            <div class="controls">
                <?php echo $row->username; ?>
            </div>
        </div>
        <div class="control-group<?php echo (form_error('newpassword') != "") ? " error" : ""; ?>">
            <label class="control-label" for="newpassword"><?php echo lang("signup.newpassword"); ?></label>
            <div class="controls">
                <input value="<?php echo set_value('newpassword'); ?>" placeholder="<?php echo lang("signup.ph.newpassword"); ?>" id="newpassword" name="newpassword" type="password" class="span2" /> <?php echo lang("signup.hint.password.edit"); ?>
            </div>
        </div>
        <div class="control-group<?php echo (form_error('confirmnewpassword') != "") ? " error" : ""; ?>">
            <label class="control-label" for="confirmnewpassword"><?php echo lang("signup.confirmnewpassword"); ?></label>
            <div class="controls">
                <input value="<?php echo set_value('confirmnewpassword'); ?>" maxlength="32" placeholder="<?php echo lang("signup.ph.confirmnewpassword"); ?>" id="confirmnewpassword" name="confirmnewpassword" type="password" class="span2" /> <?php echo lang("signup.hint.password.edit"); ?>
            </div>
        </div>

        <hr/>
        <?php echo lang("signup.hint.password.require"); ?>
        <div class="control-group<?php echo (form_error('currentpassword') != "") ? " error" : ""; ?>">
            <label class="control-label" for="currentpassword"><?php echo lang("signup.currentpassword"); ?></label>
            <div class="controls">
                <input value="<?php echo set_value('currentpassword'); ?>" placeholder="<?php echo lang("signup.ph.currentpassword"); ?>" id="password" name="currentpassword" type="password" class="span2" />
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-large offset2"><?php echo lang("signup.btn.edit"); ?></button>
    </fieldset>
</form>