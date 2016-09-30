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
        <h2>ข้อมูลการสมัครของน้อง <?php echo $row["nick_name"]; ?></h2>
        อายุ : <?php echo $row["age"]; ?><br/>
        เบอร์โทรศัพท์ : <?php echo $row["telephone"]; ?><br/>
        E-Mail : <?php echo $row["email"]; ?><br/>
        Facebook : <?php echo $row["facebook"]; ?><br/>
        <font color="#F00">สถานะการสมัคร : 
        <?php
        switch ($row["reg_type"]) {
            case 1:
                echo "สมัครอบรมเชิงปฏิบัติการ Mini admin อย่างเดียว";
                break;
            case 2:
                echo "สมัครเข้าเป็นสมาชิก CSAG อย่างเดียว";
                break;
            default:
                echo "สมัครอบรมเชิงปฏิบัติการ Mini admin และ สมัครเข้าเป็นสมาชิก CSAG";
        }
        ?></font><br/>
        ** หากข้อมูลไม่ถูกต้อง แจ้งมาที่ aikkew@kmi.tl จะได้ติดต่อกลับน้องๆได้ถูกต้อง ^_^
        <br/><br/>
        <?php if ($id == "csag") { ?>
            <a href="<?php echo base_url("member/data"); ?>" class="btn btn-info btn-large">ดูข้อมูลน้อง</a>
            <br/><br/>
        <?php } ?>
        <?php $total = $row["score1"] + $row["score2"] + $row["score3"]; ?>
        ผลการสอบคัดเลือกสมาชิก CSAG ประจำปีการศึกษา 2555 (รุ่นที่ 6) : <br/>
        <table class="table table-bordered">
            <tr>
                <td>Part I : System (50)</td>
                <td>Part II : Network (45.5)</td>
                <td>Part III : Web applications (50)</td>
                <td>Total (145.5)</td>
            </tr>
            <tr>
                <td><?php echo $row["score1"]; ?></td>
                <td><?php echo $row["score2"]; ?></td>
                <td><?php echo $row["score3"]; ?></td>
                <td><?php echo $row["score1"] + $row["score2"] + $row["score3"]; ?></td>
            </tr>
        </table>
        <br/>
        การสัมภาษณ์
        <table class="table table-bordered">
            <tr>
                <td>เข้าสัมภาษณ์</td>
                <td>ครั้งที่ 1 วัน/เวลา</td>
                <td>ครั้งที่ 2 วัน/เวลา</td>
            </tr>
            <tr>
                <td><?php
        if ($row["interview"] == "1") {
            echo "ยินดีด้วยครับ! น้องมีสิทธิ์เข้าสัมภาษณ์";
        } else {
            echo "ไม่มีสิทธิ์เข้าสัมภาษณ์";
        }
        ?></td>
                <td><?php
                    if ($row["interview"] == "1") {
                        echo $row["interview_time1"];
                    } else {
                        echo "-";
                    }
        ?></td>
                <td><?php
                    if ($row["interview"] == "1") {
                        echo $row["interview_time2"];
                    } else {
                        echo "-";
                    }
        ?></td>
            </tr>
        </table>
        <h2>ข้อปฏิบัติในการเข้าสัมภาษณ์</h2>
        <ol>
            <li>เตรียมบัตรนักศึกษา หรือบัตรที่หน่วยงานราชการออกให้ หากไม่มีหลักฐานดังกล่าว ให้ติดต่อกับทาง CSAG ล่วงหน้าอย่างน้อย 1 วัน</li>
            <li>มาเข้าสัมภาษณ์ให้ตรงเวลาเนื่องจากได้จัดเวลาแต่ละคนให้แล้ว หากไม่สะดวกให้แจ้งให้ CSAG ทราบอย่างน้อย 2 วัน (ส่งอีเมล์แจ้งมาที่ csag@kmi.tl)</li>
            <?php if ($row["interview"] == '1') { ?>
                <li>เข้าไปตอบคำถามก่อนเข้าการเข้าสัมภาษณ์ครั้งแรก <a href="<?php echo base_url("quiz/personal"); ?>" target="_self">โดยคลิกที่นี่</a> (ควรจะเข้าไปทำให้ครบและส่ง)</li>
            <?php } ?>
        </ol>
        <?php if (0) { ?>
            <?php if ($row["reg_type"] == "1" || $row["reg_type"] == "3") : ?>
                <h2>ข้อปฏิบัติในการเข้าอบรม</h2>
                <ol>
                    <li>เตรียมบัตรนักศึกษา หรือบัตรที่หน่วยงานราชการออกให้ เพื่อใช้เป็นหลักฐานในการเข้าใช้ห้องที่สำนักบริการคอมพิวเตอร์ หากไม่มีหลักฐานดังกล่าว ให้ติดต่อกับทาง CSAG ล่วงหน้าอย่างน้อย 1 วัน</li>
                    <li>เตรียมปากกา สมุด เพื่อใช้จดบันทึกระหว่างการอบรม</li>
                    <li>แต่งกายสุภาพเรียบร้อย กางเกงขายาว รองเท้าหุ้มส้น</li>
                    <li>มาให้ตรงเวลา เพื่อที่จะได้รับประโยชน์จากการอบรมอย่างเต็มที่</li>
                </ol>
                <?php
            endif;
            if ($row["reg_type"] == "2" || $row["reg_type"] == "3") :
                ?>
                <h2>ข้อปฏิบัติในการเข้าสอบ</h2>
                <ol>
                    <li>เตรียมบัตรนักศึกษา หรือบัตรที่หน่วยงานราชการออกให้ เพื่อใช้เป็นหลักฐานในการเข้าสอบ หากไม่มีหลักฐานดังกล่าว ให้ติดต่อกับทาง CSAG ล่วงหน้าอย่างน้อย 1 วัน</li>
                    <li>แต่งกายสุภาพเรียบร้อย กางเกงขายาว รองเท้าหุ้มส้น</li>
                    <li>อนุญาตให้ผู้เข้าสอบนำเอา ปากกา ดินสอ ยางลบ ไม้บรรทัด ปากกาลบคำผิด ที่ลบคำผิด วงเวียน ครึ่งวงกลม ดินสอสี สีเทียน สีไม้ระบายน้ำ ดินน้ำมัน เข้าห้องสอบได้</li>
                    <li>ไม่อนุญาตให้ผู้เข้าสอบนำอุปกรณ์อิเล็คทรอนิกส์ เข้าห้องสอบ อาทิ เครื่องคอมพิวเตอร์ เครื่องคอมพิวเตอร์ขนาดพกพา ยกเว้น เครื่องคิดเลข</li>
                    <li>ไม่อนุญาตให้ผู้เข้าสอบใช้เครื่องมือสื่อสารทุกชนิด หรือการติดต่อ/เชื่อมต่อ ที่ผ่านโพรโตคอลใดๆ/พอร์ตใดๆ</li>
                    <li>ไม่อนุญาตให้ผู้เข้าสอบนำข้อสอบ หรือกระดาษคำตอบ ไม่ว่าส่วนใดๆ ออกจากห้องสอบ</li>
                    <li>หากผู้เข้าสอบมาสอบช้า จะไม่มีการชดเชยเวลามาช้าให้</li>
                    <li>ห้ามเปิดข้อสอบจนกว่าจะบอกให้เปิด</li>
                    <li>ทางผู้จัดสอบข้อสงวนสิทธิ์ในการติดสิน ไม่ว่าในกรณีใดๆ โดยไม่จำเป็นต้องแจ้งให้ทราบล่วงหน้า</li>
                </ol>
            <?php endif; ?>
        <?php } ?>
        <?php if(1) { ?>
                <br/>
                <h2>ประกาศผลผู้ที่รับการคัดเลือกเข้าเป็นสมาชิก CSAG รุ่นที่ 6 (ปีการศึกษา 2555)</h2>
                <div class="well">
                    ก่อนที่น้องจะดูผล<br/>
                    เมื่อผลออกมาแล้ว ไม่ว่าน้องจะติดหรือไม่ติด ทาง CSAG Community ภายใต้การนำของ CSAG<br/>
                    ก็ยินดีต้อนรับน้องเข้ามา พูดคุยแลกเปลี่ยน และร่วมกิจกรรมกับทาง CSAG Community เสมอนะ<br/>
                    ชวนเพื่อนๆ พี่ๆ น้องๆ เข้ามาด้วยยิ่งดี ^^<br/>
                    อย่าได้ถือเป็นอคติไป ความจริงพี่อยากรับทุกๆคนมาก ทุกคนมีความตั้งใจ สนใจกับทาง CSAG<br/>
                    ซึ่งพวกพี่ๆดีใจและประทับใจเป็นอย่างยิ่งเลย<br/>
                    <a href="<?php echo base_url("member/result"); ?>" class="btn btn-large btn-danger">ดูประกาศผล</a>
                </div>
        <?php } ?>
        ---<br/>
        CSAG
    </div>
</div>