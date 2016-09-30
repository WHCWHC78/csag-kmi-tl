<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        Cufon.replace('.nfont');
        $("[name='reg_type']").click(function() {
            $(".grt").hide();
            switch ($(this).val()) {
                case "Student":
                    $(".grtStudent").show();
                    break;
                case "Inside":
                    $(".grtInside").show();
                    break;
                case "Outside":
                    $(".grtOutside").show();
                    break;
            }
        });
        $("[name='reg_type']:checked").click();
    });
</script>
<?php
if ($this->auth->is_member()) {
    redirect("");
} else {
    ?>
    <h1 class="nfont"><?php echo lang("signup.header"); ?></h1>
    <p><?php echo lang("signup.explan"); ?></p><br/>
    <form method="post" accept-charset="utf-8" action="<?php echo site_url("regis/signup"); ?>" class="form-horizontal" id="regForm">
        <?php echo (validation_errors() != "") ? '<div class="well">' . validation_errors() . '</div>' : ""; ?>
        <fieldset>
            <div class="control-group<?php echo (form_error('firstname') != "") ? " error" : ""; ?>">
                <label class="control-label" for="firstname"><?php echo lang("signup.firstname"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('firstname'); ?>" maxlength="50" placeholder="<?php echo lang("signup.ph.firstname"); ?>" id="firstname" name="firstname" type="text" />
                </div>
            </div>
            <div class="control-group<?php echo (form_error('lastname') != "") ? " error" : ""; ?>">
                <label class="control-label" for="lastname"><?php echo lang("signup.lastname"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('lastname'); ?>" maxlength="50" placeholder="<?php echo lang("signup.ph.lastname"); ?>" id="lastname" name="lastname" type="text" />
                </div>
            </div>
            <div class="control-group<?php echo (form_error('nickname') != "") ? " error" : ""; ?>">
                <label class="control-label" for="nickname"><?php echo lang("signup.nickname"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('nickname'); ?>" maxlength="20" placeholder="<?php echo lang("signup.ph.nickname"); ?>" id="nickname" name="nickname" type="text" class="span2" />
                </div>
            </div>
            <div class="control-group<?php echo (form_error('birth_year') != "") ? " error" : ""; ?>">
                <label class="control-label" for="birth_year"><?php echo lang("signup.birth_year"); ?></label>
                <div class="controls">
                    <select name="birth_year" >
                        <?php
                        $start = date('Y') - 10;
                        ?>
                        <?php for ($year = $start; $year >= $start - 120; $year--) {
                            ?>
                            <option value="<?php echo $year; ?>" <?php echo set_select('birth_year', $year, ($year == $start) ? true : false); ?>><?php echo (getLang() == "th") ? $year + 543 : $year; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="control-group<?php echo (form_error('gender') != "") ? " error" : ""; ?>">
                <label class="control-label" for="gender"><?php echo lang("signup.gender"); ?></label>
                <div class="controls">
                    <input type="radio" id="genderM" name="gender" value="M" <?php echo set_checkbox('gender', 'M', TRUE); ?> /> <?php echo lang("signup.gender.M"); ?>
                    <input type="radio" id="genderF" name="gender" value="F" <?php echo set_checkbox('gender', 'F'); ?> /> <?php echo lang("signup.gender.F"); ?>
                </div>
            </div>
            <div class="control-group<?php echo (form_error('telephone') != "") ? " error" : ""; ?>">
                <label class="control-label" for="telephone"><?php echo lang("signup.telephone"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('telephone'); ?>" maxlength="12" placeholder="<?php echo lang("signup.ph.telephone"); ?>" id="telephone" name="telephone" type="text" class="span2" />
                    <font style="color:silver;""> 08xxxxxxxx </font>
                </div>
            </div>
            <div class="control-group<?php echo (form_error('email') != "") ? " error" : ""; ?>">
                <label class="control-label" for="email"><?php echo lang("signup.email"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('email'); ?>" maxlength="100" placeholder="<?php echo lang("signup.ph.email"); ?>" id="email" name="email" type="text" />
                </div>
            </div>
            <div class="control-group<?php echo (form_error('facebook') != "") ? " error" : ""; ?>">
                <label class="control-label" for="facebook"><?php echo lang("signup.facebook"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('facebook'); ?>" maxlength="255" placeholder="<?php echo lang("signup.ph.facebook"); ?>" id="facebook" name="facebook" type="text" />
                    <font style="color:silver;""> ex. http://www.facebook.com/csag.kmitl </font>
                </div>
            </div>

            <hr/>
            <?php /*
              <div class="control-group<?php echo (form_error('reg_type') != "") ? " error" : ""; ?>">
              <label class="control-label"><?php echo lang("signup.reg_type"); ?></label>
              <div class="controls">
              <input type="radio" id="rtStudent" name="reg_type" value="Student" <?php echo set_radio('reg_type', 'Student', TRUE); ?> /> <?php echo lang("signup.rt.student"); ?>
              <input type="radio" id="rtInside" name="reg_type" value="Inside" <?php echo set_radio('reg_type', 'Inside'); ?> /> <?php echo lang("signup.rt.inside"); ?>
              <input type="radio" id="rtOutside" name="reg_type" value="Outside" <?php echo set_radio('reg_type', 'Outside'); ?> /> <?php echo lang("signup.rt.outside"); ?>
              </div>
              </div>
             */ ?>
            <?php
            $rt = $this->input->post('reg_type');
            $rt1 = "";
            $rt2 = "";
            $rt3 = "";
            switch ($rt) {

                case "Inside":
                    $rt2 = 'checked="checked"';
                    break;
                case "Outside":
                    $rt3 = 'checked="checked"';
                    break;
                case "Student" :
                default:
                    $rt1 = 'checked="checked"';
                    break;
            }
            ?>
            <div class="control-group<?php echo (form_error('reg_type') != "") ? " error" : ""; ?>">
                <label class="control-label"><?php echo lang("signup.reg_type"); ?></label>
                <div class="controls">
                    <input type="radio" id="rtStudent" name="reg_type" value="Student" <?php echo $rt1 ?> /> <?php echo lang("signup.rt.Student"); ?>
                    <input type="radio" id="rtInside" name="reg_type" value="Inside" <?php echo $rt2 ?> /> <?php echo lang("signup.rt.Inside"); ?>
                    <input type="radio" id="rtOutside" name="reg_type" value="Outside" <?php echo $rt3 ?> /> <?php echo lang("signup.rt.Outside"); ?>
                </div>
            </div>
            <div class="control-group<?php echo (form_error('faculty') != "") ? " error" : ""; ?> grt grtStudent">
                <label class="control-label" for="faculty"><?php echo lang("signup.faculty"); ?></label>
                <div class="controls">
                    <select name="faculty" >
                        <option value="วิศวกรรมศาสตร์" <?php echo set_select('faculty', 'วิศวกรรมศาสตร์', TRUE); ?>><?php echo lang("signup.faculty.engineer"); ?></option>
                        <option value="วิทยาศาสตร์" <?php echo set_select('faculty', 'วิทยาศาสตร์'); ?>><?php echo lang("signup.faculty.science"); ?></option>
                        <option value="เทคโนโลยีสารสนเทศ" <?php echo set_select('faculty', 'เทคโนโลยีสารสนเทศ'); ?>><?php echo lang("signup.faculty.it"); ?></option>
                        <option value="สถาปัตยกรรมศาสตร์" <?php echo set_select('faculty', 'สถาปัตยกรรมศาสตร์'); ?>><?php echo lang("signup.faculty.arch"); ?></option>
                        <option value="ครุศาสตร์อุตสาหกรรม" <?php echo set_select('faculty', 'ครุศาสตร์อุตสาหกรรม'); ?>><?php echo lang("signup.faculty.inded"); ?></option>
                        <option value="เทคโนโลยีการเกษตร" <?php echo set_select('faculty', 'เทคโนโลยีการเกษตร'); ?>><?php echo lang("signup.faculty.agritech"); ?></option>
                        <option value="อุตสาหกรรมเกษตร" <?php echo set_select('faculty', 'อุตสาหกรรมเกษตร'); ?>><?php echo lang("signup.faculty.agroind"); ?></option>
                        <option value="วิทยาลัยนาโนเทคโนโลยี" <?php echo set_select('faculty', 'วิทยาลัยนาโนเทคโนโลยี'); ?>><?php echo lang("signup.faculty.nano"); ?></option>
                        <option value="วิทยาลัยการบริหารและจัดการ" <?php echo set_select('faculty', 'วิทยาลัยการบริหารและจัดการ'); ?>><?php echo lang("signup.faculty.amc"); ?></option>
                        <option value="วิทยาลัยนวัตกรรมการจัดการข้อมูล" <?php echo set_select('faculty', 'วิทยาลัยนวัตกรรมการจัดการข้อมูล'); ?>><?php echo lang("signup.faculty.dsta"); ?></option>
                        <option value="วิทยาลัยนานาชาติ" <?php echo set_select('faculty', 'วิทยาลัยนานาชาติ'); ?>><?php echo lang("signup.faculty.inter"); ?></option>
                    </select>
                </div>
            </div>
            <div class="control-group<?php echo (form_error('department') != "") ? " error" : ""; ?> grt grtStudent">
                <label class="control-label" for="department"><?php echo lang("signup.department"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('department'); ?>" maxlength="100" placeholder="<?php echo lang("signup.ph.department"); ?>" id="department" name="department" type="text" />
                </div>
            </div>
            <div class="control-group<?php echo (form_error('studentid') != "") ? " error" : ""; ?> grt grtStudent">
                <label class="control-label" for="studentid"><?php echo lang("signup.studentid"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('studentid'); ?>" maxlength="8" placeholder="<?php echo lang("signup.ph.studentid"); ?>" id="studentid" name="studentid" type="text" class="span2" />

                </div>
            </div>
            <div class="control-group<?php echo (form_error('division') != "") ? " error" : ""; ?> grt grtInside">
                <label class="control-label" for="division"><?php echo lang("signup.division"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('division'); ?>" maxlength="100" placeholder="<?php echo lang("signup.ph.division"); ?>" id="division" name="division" type="text" />
                </div>
            </div>
            <div class="control-group<?php echo (form_error('subdivision') != "") ? " error" : ""; ?> grt grtInside">
                <label class="control-label" for="subdivision"><?php echo lang("signup.subdivision"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('subdivision'); ?>" maxlength="100" placeholder="<?php echo lang("signup.ph.subdivision"); ?>" id="subdivision" name="subdivision" type="text" />
                </div>
            </div>
            <div class="control-group<?php echo (form_error('ldap') != "") ? " error" : ""; ?> grt grtStudent grtInside">
                <label class="control-label" for="ldap"><?php echo lang("signup.ldap"); ?></label>
                <div class="controls">
                    <div class="input-prepend input-append">
                        <input value="<?php echo set_value('ldap'); ?>" maxlength="13" placeholder="<?php echo lang("signup.ph.ldap"); ?>" id="ldap" name="ldap" type="text" class="span2" />
                        <span class="add-on">@kmitl.ac.th</span>
                    </div>
                </div>
            </div>
            <div class="control-group<?php echo (form_error('occupation') != "") ? " error" : ""; ?> grt grtOutside">
                <label class="control-label" for="occupation"><?php echo lang("signup.occupation"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('occupation'); ?>" maxlength="50" placeholder="<?php echo lang("signup.ph.occupation"); ?>" id="occupation" name="occupation" type="text" />
                </div>
            </div>
            <div class="control-group<?php echo (form_error('company') != "") ? " error" : ""; ?> grt grtOutside">
                <label class="control-label" for="company"><?php echo lang("signup.company"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('company'); ?>" maxlength="100" placeholder="<?php echo lang("signup.ph.company"); ?>" id="company" name="company" type="text" />
                </div>
            </div>
            <div class="control-group<?php echo (form_error('pin') != "") ? " error" : ""; ?> grt grtOutside">
                <label class="control-label" for="pin"><?php echo lang("signup.pin"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('pin'); ?>" maxlength="13" placeholder="<?php echo lang("signup.ph.pin"); ?>" id="pin" name="pin" type="text" class="span2" />
                </div>
            </div>

            <hr/>

            <div class="control-group">
                <label class="control-label" for="username"><?php echo lang("signup.join_event"); ?></label>
                <div class="controls">
                    <?php
                    $query = $this->db->get_where('events', array('public' => 'Y'));
                    if ($query->num_rows() <= 0) {
                        lang("signup.no_event");
                    } else {
                        foreach ($query->result() as $row) {
                            ?>
                            <label class="checkbox">
                                <input type="checkbox" name="event<?php echo $row->eid; ?>" value="JOIN" checked="checked">
                                <?php
                                $s = "ename_" . getLang();
                                echo $row->$s;
                                ?>
                            </label>
                        <?php }
                    }
                    ?>
                </div>
            </div>

            <hr/>

            <div class="control-group<?php echo (form_error('username') != "") ? " error" : ""; ?>">
                <label class="control-label" for="username"><?php echo lang("signup.username"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('username'); ?>" maxlength="15" placeholder="<?php echo lang("signup.ph.username"); ?>" id="studentid" name="username" type="text" class="span2" />
                    <?php echo lang("signup.hint.username"); ?>
                </div>
            </div>
            <div class="control-group<?php echo (form_error('password') != "") ? " error" : ""; ?>">
                <label class="control-label" for="password"><?php echo lang("signup.password"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('password'); ?>" placeholder="<?php echo lang("signup.ph.password"); ?>" id="password" name="password" type="password" class="span2" />
                </div>
            </div>
            <div class="control-group<?php echo (form_error('confirmpassword') != "") ? " error" : ""; ?>">
                <label class="control-label" for="confirmpassword"><?php echo lang("signup.confirmpassword"); ?></label>
                <div class="controls">
                    <input value="<?php echo set_value('confirmpassword'); ?>" maxlength="32" placeholder="<?php echo lang("signup.ph.confirmpassword"); ?>" id="confirmpassword" name="confirmpassword" type="password" class="span2" />
                </div>
            </div>
            <div class="offset1<?php echo (form_error('recaptcha') != "") ? " alert alert-error" : ""; ?>">
                <script type="text/javascript">
                    var RecaptchaOptions = {
                        theme: 'white'
                    };
                </script>
                <script type="text/javascript" src="http://api.recaptcha.net/challenge?k=6Lc6K8cSAAAAAG0l4j_4fIT6HzbcTPVO3oPVCItk"></script>
                <noscript>
                <iframe src="http://api.recaptcha.net/noscript?k=6Lc6K8cSAAAAAG0l4j_4fIT6HzbcTPVO3oPVCItk" height="300" width="500" frameborder="0"></iframe><br/>
                <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                <input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
                </noscript>
            </div>
        </fieldset>
        <hr/>
        <div class="control-group">
            <label class="control-label" for="agreement"><?php echo lang("signup.agreement"); ?></label>
            <div class="controls">
                <div style="height: 100px; overflow: auto;">
                    <?php
                    $this->load->helper('file');
                    echo read_file('resources/data/agreement_' . getLang() . '.txt');
                    ?>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-large offset2"><?php echo lang("signup.btn.submit"); ?></button>
    </form>
<?php } ?>