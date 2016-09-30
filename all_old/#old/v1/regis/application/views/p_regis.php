<?php
if($this->session->userdata('id')!=""){
	echo "<h1>คุณกำลังอยู่ในระบบ ไม่สามารถลงทะเบียนได้</h1><br />โปรดคลิก \"ออกจากระบบ\" ก่อน";
}else{ ?><script type="text/javascript" language="javascript">
    $(document).ready(function(){
        $("#know").attr('disabled',true);
        $("[name='choice']").click(function(){
            $("#know").attr('value',$(this).val());
            if($(this).val()==""){
                $("#know").attr('disabled',false);
                $("#know").focus();
            }else{
                $("#know").attr('disabled',true);
            }
        });
        $("#regis_form").submit(function(){
            $("#know").attr('disabled',false);
        });
    });
</script>
<form method="post" action="<?php echo site_url("regis/submit"); ?>" target="_self" id="regis_form">
    <h1 class="regis_head">ลงทะเบียน</h1>
    <table class="page_regis">
        <?php
        $field = array("first_name", "last_name", "nick_name", "age", "gender", "telephone", "email", "student_id", "faculty", "department", "know","pwd","pwd2");
        foreach ($field as $i => $d) {
            if (empty($$d))
                $$d = "";
        }
        if (!empty($error))
            echo '<tr><td colspan="2" bgcolor="#DDDDDD" align="center"><font color="red">' . $errormsg . '</font></td></tr>';
        ?>
        <tr>
            <td align="right">ชื่อ :</td> <td><input type="text" name="first_name"  size="28" maxlength="50" value="<?php echo $first_name; ?>" />
      (ไม่ต้องใส่คำนำหน้า)</td></tr>
        <tr>
            <td align="right">นามสกุล :</td><td><input type="text" name="last_name" size="28" maxlength="50" value="<?php echo $last_name; ?>" /></td></tr>
        <tr>
            <td align="right">ชื่อเล่น : </td> <td><input type="text" name="nick_name" size="19" maxlength="20" value="<?php echo $nick_name; ?>" /></td></tr>
        <tr>
            <td align="right">อายุ : </td><td>
                <input type="radio" name="age" value="17" <?php if ($age == 17) echo "checked" ?>/> 17
                <input type="radio" name="age" value="18" <?php if ($age == 18) echo "checked" ?>/> 18
                <input type="radio" name="age" value="19" <?php if ($age == 19) echo "checked" ?>/> 19
                    <input type="radio" name="age" value="20" <?php if ($age == 20) echo "checked" ?>/> 20
                    </td>
                </tr>
                <tr>
                    <td align="right">เพศ : </td><td>
                        <input type="radio" name="gender" value="M" <?php if ($gender == 'M') echo "checked" ?>/> ชาย
                            <input type="radio" name="gender" value="F" <?php if ($gender == 'F') echo "checked" ?>/> หญิง
                            </td>
                        </tr>
                <tr>
                    <td align="right">โทรศัพท์มือถือ :</td><td> <input type="text" name="telephone" maxlength="10" size="17" value="<?php echo $telephone; ?>" style="float:left;" /><p style="color:silver; float: left;" class="regis_left"> 08xxxxxxxx </p></td>
                  </tr>
                        <tr>
                            <td align="right">E-mail :</td><td> <input type="text" name="email"  size="36" class="regis_mail" value="<?php echo $email; ?>" /></td>
                        </tr>
                        <tr>
                            <td align="right">คณะ : </td>
                            <td>
                                <select name="faculty" >
                                    <option value="วิศวกรรมศาสตร์">วิศวกรรมศาสตร์</option>
                                    <option value="สถาปัตยกรรมศาสตร์">สถาปัตยกรรมศาสตร์</option>
                                    <option value="ครุศาสตร์อุตสาหกรรม">ครุศาสตร์อุตสาหกรรม</option>
                                    <option value="วิทยาศาสตร์">วิทยาศาสตร์</option>
                                    <option value="เทคโนโลยีการเกษตร">เทคโนโลยีการเกษตร</option>
                                    <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
                                    <option value="อุตสาหกรรมเกษตร">อุตสาหกรรมเกษตร</option>
                                    <option value="วิทยาลัยนาโนเทคโนโลยี">วิทยาลัยนาโนเทคโนโลยี</option>
                                    <option value="วิทยาลัยการจัดการ">วิทยาลัยการจัดการ</option>
                                    <option value="วิทยาลัยนานาชาติ">วิทยาลัยนานาชาติ</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">ภาควิชา : </td><td><input type="text" name="department"  size="36" maxlength="100" value="<?php echo $department; ?>" /></td>
                        </tr>
                        <tr>
                          <td align="right">รหัสนักศึกษา : </td>
                          <td>54
                            <input type="text" name="student_id" maxlength="6" size="17" value="<?php echo $student_id; ?>" /></td>
                        </tr>
                        <tr>
                          <td align="right">รหัสผ่าน :</td>
                          <td><input name="pwd" type="password" id="pwd" value="<?php echo $pwd; ?>"  size="20" />
                          (สำหรับเข้าสู่ระบบ)</td>
                        </tr>
                        <tr>
                          <td align="right">ใส่รหัสผ่านอีกครั้ง :</td>
                          <td><input name="pwd2" type="password" id="pwd2" value="<?php echo $pwd2; ?>"  size="20" /></td>
                        </tr>
                        <tr>
                            <td align="right">รู้จัก CSAG โดย : </td>
                            <td>
                                <input type="radio" name="choice" value="โปสเตอร์" />โปสเตอร์
                                <input type="radio" name="choice" value="ใบปลิว" />ใบปลิว
                                <input type="radio" name="choice" value="คนรู้จัก" />คนรู้จัก
                                <input type="radio" name="choice" value="Facebook" />Facebook<br/>
                                <input type="radio" name="choice" value="" />อื่นๆ (โปรดระบุ)
                                <input type="text" id="know" name="know" value="<?php echo $know; ?>" size="20" />
            </td>
        </tr>
                        <tr>
                          <td align="right">ต้องการลงทะเบียน :</td>
                          <td>                          <p>
                            <label>
                              <input type="radio" name="regis_type" value="1" />
                              สมัครเข้าร่วมการอบรมเชิงปฏิบัติการ </label>
                            Mini Admin<br />
                            <label>
                              <input type="radio" name="regis_type" value="2" />
                              สมัครสอบเข้าร่วมการเป็นสมาชิกของ CSAG</label>
                            <br />
                            <label>
                              <input type="radio" name="regis_type" value="3" />
                              สมัครทั้งสองอย่าง</label>
                            <br />
                          </p></td>
                        </tr>
        <tr>
            <td colspan="2">
                <script type="text/javascript" src="http://api.recaptcha.net/challenge?k=6Lc6K8cSAAAAAG0l4j_4fIT6HzbcTPVO3oPVCItk"></script>
                <noscript>
                    <iframe src="http://api.recaptcha.net/noscript?k=	6Lc6K8cSAAAAAG0l4j_4fIT6HzbcTPVO3oPVCItk" height="300" width="500" frameborder="0"></iframe><br/>
                    <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                    <input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
                </noscript>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td><td><input type="submit" name="submit" value="ลงทะเบียน" class="button"/></td>
        </tr>
    </table>
</form>
<?php } ?>