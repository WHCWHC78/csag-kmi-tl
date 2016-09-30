<script type="text/javascript" src="http://csag.kmi.tl/resources/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="http://csag.kmi.tl/resources/js/bootstrap-tab.js"></script>
<div style="font-size: 72px; text-align: center;">Confidential</div><br/>

<ul class="nav nav-tabs" id="menuTab">
    <li class="active"><a href="#list" data-toggle="tab">รายชื่อผู้สมัคร</a></li>
    <li><a href="#question" data-toggle="tab">ตอบคำถามออนไลน์</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane active" id="list">
        <table class="table table-bordered table-condensed">
            <colgroup>
                <col class="span1">
                <col class="span2">
                <col class="span1">
                <col class="span2">
                <col class="span2">
                <col class="span1">
            </colgroup>
            <thead>
                <tr>
                    <th>#</th>
                    <th>ชื่อ - สกุล</th>
                    <th>ชื่อเล่น</th>
                    <th>คณะ</th>
                    <th>สาขา</th>
                    <th>Score</th>
                    <th>ลงทะเบียน</th>
                    <th>Essay/Personal</th>
                </tr>
            </thead>
            <tbody><?php foreach ($row as $i => $r): ?>
                <tr>
                    <td><?php echo $i + 1; ?>
                    <td><?php echo $r->first_name . " " . $r->last_name; ?></td>
                    <td><?php echo $r->nick_name; ?></td>
                    <td><?php echo $r->faculty; ?></td>
                    <td><?php echo $r->department; ?></td>
                    <td><?php echo ($r->score1 . "/" . $r->score2 . "/" . $r->score3 . "=" . ($r->score1 + $r->score2 + $r->score3)); ?></td>
                    <td>
                            <?php
                            switch ($r->reg_type) {
                                case 1 :
                                    echo "อบรมอย่างเดียว";
                                    break;
                                case 2 :
                                    echo "สอบอย่างเดียว";
                                    break;
                                case 3 :
                                    echo "ทั้งสองอย่าง";
                                    break;
                                default:
                                    echo "ไม่รู้";
                                    break;
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if ($r->quiz1 != null and $r->quiz2 != null and $r->quiz3 != null and $r->quiz4 != null) {
                                echo "<font color=\"#00FF00\">True</font>";
                            } else {
                                echo "False";
                            }
                            echo "/";
                            if ($r->result != null)
                                echo "<font color=\"#00FF00\">True</font>";
                            else
                                echo "False";
                            ?></td>
                    </tr>
                <?php endforeach;
                ?>
            </tbody>
        </table>

    </div>
    <div class = "tab-pane" id = "question">
        Order by <a href="<?php echo base_url("member/data/id"); ?>">ID</a> | <a href="<?php echo base_url("member/data/update"); ?>">Update</a> | <a href="<?php echo base_url("member/data/score"); ?>">Score</a>
        <?php
        $count = 1;
        if (1) {
            foreach ($row as $i => $r):
                if ($r->quiz1 != "" || $r->quiz2 != "" || $r->quiz3 != "" || $r->quiz4 != "") :
                    ?>
                    <div><?php echo $count++; ?>.น้อง <?php echo $r->nick_name; ?> (<?php echo $r->first_name . " " . $r->last_name; ?>)(<?php echo $r->age; ?> ปี)(<?php echo $r->faculty . " " . $r->department; ?>) (Update on : <?php echo $r->last_edit; ?>) ==> <?php echo $r->score1 . "/" . $r->score2 . "/" . $r->score3 . "=" . ($r->score1 + $r->score2 + $r->score3); ?></div>
                    <div class="offset1"><img src="<?php echo base_url("resources/img/token/".$r->token.".JPG"); ?>" /></div>
                    <div class="offset1">1.ให้น้องแนะนำตัว เล่าประวัติ บอกความสนใจ และประสบการณ์ด้านคอมพิวเตอร์และด้านอื่นๆที่ผ่านมา<br/></div>
                    <div class="well offset1"><?php echo $r->quiz1; ?></div>
                    <div class="offset1">2.บอกเล่าเกี่ยวกับสิ่งที่น้องทำได้ดี<br/></div>
                    <div class="well offset1"><?php echo $r->quiz2; ?></div>
                    <div class="offset1">3.อะไรที่น้องอยากเป็นมากที่สุด เพราะอะไร<br/></div>
                    <div class="well offset1"><?php echo $r->quiz3; ?></div>
                    <div class="offset1">4.มุมมองของน้องเกี่ยวกับ CSAG เป็นอย่างไร<br/></div>
                    <div class="well offset1"><?php echo $r->quiz4; ?></div>
                    <hr/>
                    <?php
                endif;
            endforeach;
        }
        ?>
    </div>
</div>