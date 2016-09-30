<?php
$id = $this->session->userdata('id');
if ($id != "") :
    $query = $this->db->get_where('register', array('student_id' => $id));
    $row = $query->row_array();
else :
    redirect("");
endif;
?><div class="row">
    <div class="span3 well">
        <ul class="nav nav-list">
            <li class="nav-header">
                เมนู
            </li>
            <li>
                <a href="<?php echo base_url("member"); ?>"><i class="icon-home"></i>หน้าแรกสมาชิก</a>
            </li>
            <li>
                <a href="<?php echo base_url("regis"); ?>"><i class="icon-info-sign"></i>รายละเอียดกิจกรรม</a>
            </li>
            <?php if ($row["reg_type"] == "1" || $row["reg_type"] == "3") : ?>
                <li>
                    <a href="<?php echo base_url("member/tech"); ?>"><i class="icon-list-alt"></i>เอกสารประกอบการอบรม</a>
                </li>
            <?php endif; ?>
            <?php if ($row["reg_type"] == "2" || $row["reg_type"] == "3") : ?>
                <li>
                    <a href="<?php echo base_url("quiz"); ?>"><i class="icon-list-alt"></i>ตอบคำถามออนไลน์</a>
                </li>
            <?php endif; ?>
            <li>
                <a href="<?php echo base_url("member/logout"); ?>"><i class="icon-road"></i>ออกจากระบบ</a>
            </li>
        </ul>
    </div>
    <div class="span8">
        <style>
            textarea {
                width: 100%;
            }
            .quiz {
                margin-bottom: 20px;
            }
            .quiz h3 {
                color: #ff7700;
            }
        </style>
        <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
            //<![CDATA[
            bkLib.onDomLoaded(function() {
                nicEditors.allTextAreas({buttonList : ['fontSize','bold','italic','underline','strikethrough','hr','indent','outdent','forecolor','bgcolor','removeformat','link','unlink']});
            });
            //]]>
        </script>
        <?php
        $id = $this->session->userdata('id');
        if ($id != "") {
            $query = $this->db->get_where('register', array('student_id' => $id));
            $row = $query->row_array();
        } else {
            $row = array();
        }
        ?>
        <form method="post" accept-charset="utf-8" action="<?php echo base_url("quiz/save"); ?>">
            <div class="quiz">
                <h3>1.ให้น้องแนะนำตัว เล่าประวัติ บอกความสนใจ และประสบการณ์ด้านคอมพิวเตอร์และด้านอื่นๆที่ผ่านมา</h3>
                <textarea name="quiz1">
                    <?php echo $row["quiz1"]; ?>
                </textarea>
            </div>
            <div class="quiz">
                <h3>2.บอกเล่าเกี่ยวกับสิ่งที่น้องทำได้ดี</h3>
                <textarea name="quiz2">
                    <?php echo $row["quiz2"]; ?>
                </textarea>
            </div>
            <div class="quiz">
                <h3>3.อะไรที่น้องอยากเป็นมากที่สุด เพราะอะไร</h3>
                <textarea name="quiz3">
                    <?php echo $row["quiz3"]; ?>
                </textarea>
            </div>
            <div class="quiz">
                <h3>4.มุมมองของน้องเกี่ยวกับ CSAG เป็นอย่างไร (ไม่มีผลต่อการคัดเลือก)</h3>
                <textarea name="quiz4">
                    <?php echo $row["quiz4"]; ?>
                </textarea>
            </div>
            <div class="form-actions">
                <?php if (1) { ?><button type="submit" class="btn btn-primary">บันทึก</button><?php } else { ?>
                    --[ ปิดการอัพเดท ]--
                <?php } ?>
                <br/>
                * ทุกข้อจำกัดไม่เกิน 2,000 ตัวอักษร
                <br/>
                Last edit : <?php echo $row["last_edit"]; ?>
            </div>
        </form>
    </div>
</div>