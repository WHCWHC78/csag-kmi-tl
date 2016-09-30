<script type="text/javascript" language="javascript">
    $(document).ready(function(){
        $("#know").attr('readonly',true);
        $("[name='choice']").click(function(){
            $("#know").attr('value',$(this).val());
            if($(this).val()==""){
                $("#know").attr('readonly',false);
                $("#know").focus();
            }else{
                $("#know").attr('readonly',true);
            }
        });
        $("#regis_form").submit(function(){
            $("#know").attr('readonly',false);
        });
<?php echo ($modal) ? "$('#menuTab a:last').tab('show');" : "$('#menuTab a:first').tab('show');"; ?>
        Cufon.replace('.nfont');
    });
</script>
<style>
    h1 {
        margin-top: 5px;
        margin-bottom: 10px;
    }
    .borderP {
        border-right: thin #9a9b9a dashed;
    }
    .property h1, .property div {
        margin-left: 70px;
        margin-right: 30px;
    }
    .property img {
        float: left;
        margin-top: 15px;
    }
    .tableN td,.tableN th {
        text-align: center;
    }
</style>
<div class="row">
    <div class="span12">
        <ul class="nav nav-tabs" id="menuTab">
            <li class="active"><a href="#miniadmin" data-toggle="tab">โครงการอบรมเชิงปฏิบัติการ Mini Admin</a></li>
            <li><a href="#csagmember" data-toggle="tab">เข้าร่วมเป็นสมาชิก CSAG</a></li>
            <li><a href="#regisform" data-toggle="tab">ลงทะเบียน</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="miniadmin">
                <h1 class="nfont">โครงการอบรมเชิงปฏิบัติการ Mini Admin</h1>
                <div class="row">
                    <div class="span8">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp ทาง CSAG ได้จัดโครงการอมรมเชิงปฏิบัติการ Mini Admin ซึ่งมีจุดประสงค์หลัก ในการเผยแพร่ความรู้ และพัฒนาศักยภาพของนักศึกษา ในด้านของระบบเครือข่าย ระบบเว็บไซต์เบื้องต้น โดยการอบรมครั้งนี้ ไม่เสียค่าใช้จ่ายใดๆทั้งสิ้น อีกทั้งเรายังเน้นทั้งการเรียน ทั้งภาคทฤษฎีและลงมือปฏิบัติจริง ตั้งแต่ขั้นตอนแรกจนถึงขั้นตอนสุดท้าย เพื่อให้สามารถนำความรู้ที่ได้ ไปใช้ให้เกิดประโยชน์ และต่อยอดความรู้ต่อไปได้ สำหรับหัวข้อที่อบรม สามารถดูรายละเอียดได้ที่ ตารางกำหนดการ ด้านล่าง
                    </div>
                    <div class="span3 well">
                        <a class="btn btn-danger btn-large" heft="#" onclick="$('#menuTab a:last').tab('show');">ลงทะเบียน</a>
                        * ด่วน! รับจำนวนจำกัด
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <hr/>
                        <div class="span6 property borderP">
                            <img src="<?php echo base_url("resources/img/icon-qualification.png"); ?>" />
                            <h1 class="nfont">คุณสมบัติ</h1>
                            <div>
                                <ol>
                                    <li>มีสถานภาพเป็นนักศึกษาสถาบันพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</li>
                                    <li>กำลังศึกษาอยู่ชั้นปีที่ 1 (รหัส 55)</li>
                                    <li>เป็นนักศึกษาที่สนใจด้าน System, Network หรือ Web Application</li>
                                    <li>เป็นนักศึกษาที่ไม่เสพสิ่งเสพติดทุกชนิด</li>
                                    <li>มีความรับผิดชอบ ตรงต่อเวลา ความกระตือรื้อร้น และ พร้อมเรียนรู้สิ่งใหม่ๆอยู่เสมอ</li>
                                    <li>มีมนุษย์สัมพันธ์ที่ดี สุขภาพจิตปกติ</li>
                                    <li>ไม่เป็นโรคอันร้ายแรงหรือขัดต่อหลัก การอยู่ร่วมกันในสังคม</li>
                                </ol>
                            </div>
                        </div>
                        <div class="span5 property">
                            <img src="<?php echo base_url("resources/img/icon-train.png"); ?>" />
                            <h1 class="nfont">ขั้นตอนการเข้าอบรม</h1>
                            <div>
                                <ol>
                                    <li>ลงทะเบียนออนไลน์ผ่านเว็บไซต์ (<a href="<?php echo base_url("regis"); ?>">http://csag.kmi.tl/regis</a>)</li>
                                    <li>ล็อคอินเข้าสู่ระบบเพื่ออ่านรายละเอียดอื่นๆ ในการเข้าร่วมโครงการ</li>
                                    <li>เข้าอบรมตามวันและเวลาที่กำหนด</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="span9">
                        <h1 class="nfont">กำหนดการอบรม</h1>
                        <table class="table table-bordered table-condensed offset1 tableN">
                            <colgroup>
                                <col class="span4">
                                <col class="span2">
                                <col class="span3">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>หัวข้อ</th>
                                    <th>วันและเวลา</th>
                                    <th>สถานที่</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: left;">
                                        System<br/>
                                        - แนะนำระบบปฏิบัติการประเภท Open source<br/>
                                        - การติดตั้งระบบปฏิบัติการ Ubuntu<br/>
                                        - คำสั่งพื้นฐานและการใช้งานระบบปฏิบัติการ Ubuntu<br/>
                                        - การติดตั้งเว็บเซิร์ฟเวอร์ และฐานข้อมูล แบบกระบวนการ LAMP<br/>
                                        - ระบบฐานข้อมูลเชิงสัมพันธ์เบื้องต้น
                                    </td>
                                    <td>18 สิงหาคม 2555<br/>09.00 - 16.00</td>
                                    <td>ชั้น 1 สำนักบริการคอมพิวเตอร์</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">
                                        Network<br/>
                                        - มาตรฐาน OSI Model<br/>
                                        - อุปกรณ์และรูปแบบการเชื่อมต่อในระบบเครือข่าย<br/>
                                        - ระบบ IP Address, MAC Address, Subnet Mask<br/>
                                        - คำสั่งเบื้องต้นเกี่ยวกับการทำงานด้านเครือข่าย<br/>
                                        - การติดตั้งเซิร์ฟเวอร์ให้บริการไฟล์<br/>
                                        - การสร้างและศึกษาระบบเครือข่ายโดยใช้โปรแกรมจำลอง<br/>
                                    </td>
                                    <td>19 สิงหาคม 2555<br/>09.00 - 16.00</td>
                                    <td>ชั้น 1 สำนักบริการคอมพิวเตอร์</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">
                                        Web application<br/>
                                        - พื้นฐานระบบเว็บไซต์<br/>
                                        - การพัฒนาเว็บด้วยภาษา HTML5, CSS3, Javascript<br/>
                                        - การพัฒนาเว็บด้วยภาษา PHP เบื้องต้น<br/>
                                        - การติดตั้งเว็บสำเร็จรูป หรือ CMS<br/>
                                        - การปรับแต่งและใช้งานเว็บสำเร็จรูป
                                    </td>
                                    <td>25 สิงหาคม 2555<br/>09.00 - 16.00</td>
                                    <td>ชั้น 1 สำนักบริการคอมพิวเตอร์</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div style="text-align: center;">
                    ** กำหนดการอาจเปลี่ยนแปลงได้ตามความเหมาะสม **
                    <br/><br/>
                </div>
            </div>
            <div class="tab-pane" id="csagmember">
                <h1 class="nfont">เข้าร่วมเป็นสมาชิก CSAG</h1>
                <div class="row">
                    <div class="span8">
                        ขณะนี้ CSAG เปิดรับสมาชิกรุ่นใหม่ (รุ่นที่ 6) โดยสิ่งที่จะได้หากผ่านการคัดเลือกเข้าเป็นสมาชิก
                        <ol style="padding-left: 20px;">
                            <li>เป็นนักศึกษาวิจัย / ฝึกงานสังกัดสำนักบริการคอมพิวเตอร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ตั้งแต่ชั้นปีที่1</li>
                            <li>สามารถเข้าใช้ห้องทำงานที่มีการสนับสนุนอุปกรณ์ เกี่ยวกับระบบสารสนเทศทางด้านต่างๆ</li>
                            <li>สามารถเรียนรู้ในสิ่งที่ได้จากนอกห้องเรียน ได้ทดลองเล่น ปฏิบัติจริงกับอุปกรณ์จริง</li>
                            <li>ได้สิทธิ์ในการเป็นแอดมินในส่วนของระบบสารสนเทศที่ ทาง CSAG ควบคุมดูแลอยู่ ตามความสามารถเมื่อขึ้นชั้นปีที่ 2 เป็นต้นไป</li>
                            <li>ประสบการณ์ / ความรู้ตลอด 24 ชม. โดยไม่ทิ้งผลการเรียน</li>
                            <li>เจ้าหน้าที่ รุ่นพี่ และเพื่อนภายในสำนักบริการคอมพิวเตอร์คอยให้คำปรึกษา</li>
                        </ol>
                    </div>
                    <div class="span3 well">
                        <a class="btn btn-danger btn-large" heft="#" onclick="$('#menuTab a:last').tab('show');">ลงทะเบียน</a>
                        * ด่วน! รับจำนวนจำกัด
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <hr/>
                        <div class="span6 property borderP">
                            <img src="<?php echo base_url("resources/img/icon-qualification.png"); ?>" />
                            <h1 class="nfont">คุณสมบัติ</h1>
                            <div>
                                <ol>
                                    <li>มีสถานภาพเป็นนักศึกษาสถาบันพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</li>
                                    <li>กำลังศึกษาอยู่ชั้นปีที่ 1 (รหัส 55)</li>
                                    <li>เป็นนักศึกษาที่สนใจด้าน System, Network หรือ Web Application</li>
                                    <li>เป็นนักศึกษาที่ไม่เสพสิ่งเสพติดทุกชนิด</li>
                                    <li>มีความรับผิดชอบ ตรงต่อเวลา ความกระตือรื้อร้น และ พร้อมเรียนรู้สิ่งใหม่ๆอยู่เสมอ</li>
                                    <li>มีมนุษย์สัมพันธ์ที่ดี สุขภาพจิตปกติ</li>
                                    <li>ไม่เป็นโรคอันร้ายแรงหรือขัดต่อหลัก การอยู่ร่วมกันในสังคม</li>
                                </ol>
                            </div>
                        </div>
                        <div class="span5 property">
                            <img src="<?php echo base_url("resources/img/icon-members.png"); ?>" />
                            <h1 class="nfont">ขั้นตอนการเข้าเป็นสมาชิก</h1>
                            <div>
                                <ol>
                                    <li>ลงทะเบียนออนไลน์ผ่านเว็บไซต์ (<a href="<?php echo base_url("regis"); ?>">http://csag.kmi.tl/regis</a>)</li>
                                    <li>ล็อคอินเข้าสู่ระบบเพื่ออ่านรายละเอียดอื่นๆ ในการเข้าร่วมเป็นสมาชิก</li>
                                    <li>ตอบคำถามออนไลน์ โดยเลือกเมนูตอบคำถามออนไลน์ หรือ <a href="<?php echo base_url("quiz"); ?>" target="_blank">คลิกที่นี่</a> (ตั้งแต่ตอนนี้ ถึง 24 สิงหาคม 2555)</li>
                                    <li>ทดสอบคัดเลือกที่สำนักบริการคอมพิวเตอร์ (จะแจ้งให้ทราบอีกครั้ง)</li>
                                    <li>ประกาศผู้ที่มีสิทธิ์สัมภาษณ์</li>
                                    <li>สัมภาษณ์</li>
                                    <li>ประกาศผลผู้ที่ได้เป็นสมาชิก</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <div style="width:775px; height:175px; background-color:#000; color:#FFF; overflow:hidden; margin-bottom: 20px;" class="offset1">
                    <img src="<?php echo base_url("resources/img/servers.jpg"); ?>" width="775" />
                </div>
            </div>
            <div class="tab-pane" id="regisform">
                <?php if (1) { ?>
                    <div class="well">ปิดการรับสมัคร (สิ้นสุดโครงการแล้ว)</div>
                <?php
                } else {
                    $id = $this->session->userdata('id');
                    if ($id != "") :
                        ?><h1 class="nfont">ลงทะเบียนไม่ได้ เพราะกำลังเข้าสู่ระบบในฐานะผู้ลงทะเบียนแล้ว</h1>
                        <br/>
                        <a class="btn btn-danger btn-large" href="<?php echo base_url("member"); ?>">คลิกที่นี่เพื่อเข้าสู่เมนูสมาชิก</a>
                        <br/><br/>
                    <?php else : ?>
                        <h1 class="nfont">ลงทะเบียน</h1>
                        <form method="post" accept-charset="utf-8" action="<?php echo base_url("member/regis"); ?>" class="form-horizontal">
                            <?php echo (validation_errors() != "") ? '<div class="well">' . validation_errors() . '</div>' : ""; ?>
                            <fieldset>
                                <div class="control-group<?php echo (form_error('firstname') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="firstname">ชื่อจริง</label>
                                    <div class="controls">
                                        <input value="<?php echo set_value('firstname'); ?>" maxlength="50" placeholder="ชื่อจริง" id="firstname" name="firstname" type="text" />
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('lastname') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="lastname">นามสกุล</label>
                                    <div class="controls">
                                        <input value="<?php echo set_value('lastname'); ?>" maxlength="50" placeholder="นามสกุล" id="lastname" name="lastname" type="text" />
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('nickname') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="nickname">ชื่อเล่น</label>
                                    <div class="controls">
                                        <input value="<?php echo set_value('nickname'); ?>" maxlength="20" placeholder="ชื่อเล่น" id="nickname" name="nickname" type="text" class="span2" />
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('age') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="age">อายุ</label>
                                    <div class="controls">
                                        <input type="radio" id="age17" name="age" value="17" <?php echo set_checkbox('age', '17', TRUE); ?> /> 17
                                        <input type="radio" id="age18" name="age" value="18" <?php echo set_checkbox('age', '18'); ?> /> 18
                                        <input type="radio" id="age19" name="age" value="19" <?php echo set_checkbox('age', '19'); ?> /> 19
                                        <input type="radio" id="age20" name="age" value="20" <?php echo set_checkbox('age', '20'); ?> /> 20
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('gender') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="gender">เพศ</label>
                                    <div class="controls">
                                        <input type="radio" id="genderM" name="gender" value="M" <?php echo set_checkbox('gender', 'M', TRUE); ?> /> ชาย
                                        <input type="radio" id="genderF" name="gender" value="F" <?php echo set_checkbox('gender', 'F'); ?> /> หญิง
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('telephone') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="telephone">เบอร์โทรศัพท์</label>
                                    <div class="controls">
                                        <input value="<?php echo set_value('telephone'); ?>" maxlength="12" placeholder="เบอร์โทรศัพท์ที่ติดต่อได้" id="telephone" name="telephone" type="text" class="span2" />
                                        <font style="color:silver;""> 08xxxxxxxx </font>
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('email') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="email">อีเมล์</label>
                                    <div class="controls">
                                        <input value="<?php echo set_value('email'); ?>" maxlength="100" placeholder="อีเมล์" id="email" name="email" type="text" />
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('facebook') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="facebook">Facebook</label>
                                    <div class="controls">
                                        <input value="<?php echo set_value('facebook'); ?>" maxlength="255" placeholder="Facebook" id="facebook" name="facebook" type="text" />
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('faculty') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="faculty">คณะ</label>
                                    <div class="controls">
                                        <select name="faculty" >
                                            <option value="วิศวกรรมศาสตร์" <?php echo set_select('faculty', 'วิศวกรรมศาสตร์', TRUE); ?>>วิศวกรรมศาสตร์</option>
                                            <option value="วิทยาศาสตร์" <?php echo set_select('faculty', 'วิทยาศาสตร์'); ?>>วิทยาศาสตร์</option>
                                            <option value="เทคโนโลยีสารสนเทศ" <?php echo set_select('faculty', 'เทคโนโลยีสารสนเทศ'); ?>>เทคโนโลยีสารสนเทศ</option>
                                            <option value="สถาปัตยกรรมศาสตร์" <?php echo set_select('faculty', 'สถาปัตยกรรมศาสตร์'); ?>>สถาปัตยกรรมศาสตร์</option>
                                            <option value="ครุศาสตร์อุตสาหกรรม" <?php echo set_select('faculty', 'ครุศาสตร์อุตสาหกรรม'); ?>>ครุศาสตร์อุตสาหกรรม</option>
                                            <option value="เทคโนโลยีการเกษตร" <?php echo set_select('faculty', 'เทคโนโลยีการเกษตร'); ?>>เทคโนโลยีการเกษตร</option>
                                            <option value="อุตสาหกรรมเกษตร" <?php echo set_select('faculty', 'อุตสาหกรรมเกษตร'); ?>>อุตสาหกรรมเกษตร</option>
                                            <option value="วิทยาลัยนาโนเทคโนโลยี" <?php echo set_select('faculty', 'วิทยาลัยนาโนเทคโนโลยี'); ?>>วิทยาลัยนาโนเทคโนโลยี</option>
                                            <option value="วิทยาลัยการบริการและจัดการ" <?php echo set_select('faculty', 'วิทยาลัยการบริหารและจัดการ'); ?>>วิทยาลัยการบริหารและจัดการ</option>
                                            <option value="วิทยาลัยนานาชาติ" <?php echo set_select('faculty', 'วิทยาลัยนานาชาติ'); ?>>วิทยาลัยนานาชาติ</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('department') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="department">สาขาวิชา</label>
                                    <div class="controls">
                                        <input value="<?php echo set_value('department'); ?>" maxlength="" placeholder="สาขาวิชา" id="department" name="department" type="text" />
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('studentid') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="studentid">รหัสนักศึกษา</label>
                                    <div class="controls">
                                        <div class="input-prepend">
                                            <span class="add-on">55</span><input value="<?php echo substr(set_value('studentid'), 2); ?>" maxlength="6" placeholder="รหัสนักศึกษา" id="studentid" name="studentid" type="text" class="span1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('password') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="password">รหัสผ่าน</label>
                                    <div class="controls">
                                        <input value="<?php echo set_value('password'); ?>" maxlength="32" placeholder="รหัสผ่าน" id="password" name="password" type="password" class="span2" /> (สำหรับเข้าสู่ระบบ)
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('confirmpassword') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="confirmpassword">ยืนยันรหัสผ่าน</label>
                                    <div class="controls">
                                        <input value="<?php echo set_value('confirmpassword'); ?>" maxlength="32" placeholder="ใส่รหัสผ่านอีกครั้ง" id="confirmpassword" name="confirmpassword" type="password" class="span2" />
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('know') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="know">รู้ข่าวกิจกรรมนี้ผ่านทาง</label>
                                    <div class="controls">
                                        <input type="radio" name="choice" value="กิจกรรมของคณะ" <?php echo set_checkbox('know', 'กิจกรรมของคณะ'); ?> />กิจกรรมของคณะ
                                        <input type="radio" name="choice" value="เพื่อน" <?php echo set_checkbox('know', 'เพื่อน'); ?> />เพื่อน
                                        <input type="radio" name="choice" value="รุ่นพี่" <?php echo set_checkbox('know', 'รุ่นพี่'); ?> />รุ่นพี่
                                        <input type="radio" name="choice" value="รุ่นน้อง" <?php echo set_checkbox('know', 'รุ่นน้อง'); ?> />รุ่นน้อง<br/>
                                        <input type="radio" name="choice" value="โปสเตอร์/ใบปลิว" <?php echo set_checkbox('know', 'โปสเตอร์/ใบปลิว'); ?> />โปสเตอร์/ใบปลิว
                                        <input type="radio" name="choice" value="Facebook" <?php echo set_checkbox('know', 'Facebook'); ?> />Facebook<br/>
                                        <input type="radio" name="choice" value="" />เว็บไซต์/อื่นๆ (โปรดระบุ)
                                        <input type="text" id="know" name="know" value="<?php echo set_value('know'); ?>" maxlength="100" />
                                    </div>
                                </div>
                                <div class="control-group<?php echo (form_error('regis_type') != "") ? " error" : ""; ?>">
                                    <label class="control-label" for="regis_type">ต้องการลงทะเบียน</label>
                                    <div class="controls">
                                        <label>
                                            <input type="radio" name="regis_type" value="1" <?php echo set_checkbox('regis_type', '1'); ?> />
                                            สมัครเข้าร่วมการอบรมเชิงปฏิบัติการ Mini Admin</label>
                                        <label>
                                            <input type="radio" name="regis_type" value="2" <?php echo set_checkbox('regis_type', '2'); ?> />
                                            สมัครสอบเข้าร่วมการเป็นสมาชิกของ CSAG</label>
                                        <label>
                                            <input type="radio" name="regis_type" value="3" <?php echo set_checkbox('regis_type', '3', TRUE); ?> />
                                            สมัครทั้งสองอย่าง</label>
                                    </div>
                                </div>
                                <div class="offset1">
                                    <script type="text/javascript">
                                        var RecaptchaOptions = {
                                            theme : 'white'
                                        };
                                    </script>
                                    <script type="text/javascript" src="http://api.recaptcha.net/challenge?k=6Lc6K8cSAAAAAG0l4j_4fIT6HzbcTPVO3oPVCItk"></script>
                                    <noscript>
                                    <iframe src="http://api.recaptcha.net/noscript?k=6Lc6K8cSAAAAAG0l4j_4fIT6HzbcTPVO3oPVCItk" height="300" width="500" frameborder="0"></iframe><br/>
                                    <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                                    <input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
                                    </noscript>
                                </div>
                                <button type="submit" class="btn btn-primary btn-large offset2">ลงทะเบียน</button>
                            </fieldset>
                        </form>
                    <?php endif;
                }
                ?>
            </div>
        </div>
    </div>
</div>