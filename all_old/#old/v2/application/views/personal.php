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
        <div align="center"><h2>คำถามการตัดสินใจ</h2></div>
        * ทำได้เพียงครั้งเดียวเท่านั้น<br/><br/>
        <?php
        if ($row["result"] != null) {
            echo "<br/>คุณได้ทำเรียบร้อยแล้ว";
        } else {
            ?>
            <script type="text/javascript">
                $(document).ready(function(){
                    $(".question").hide();
                    $(".question:first").fadeIn(300);
                    $(".ans").click(function(){
                        $(this).parents('.question').fadeOut(300, function(){
                            $(this).next().fadeIn(300)
                        });
                    });
                });
            </script>
            <form action="<?php echo base_url("quiz/personalSave"); ?>" method="POST">
                <?php
                $i = 1;
                foreach ($q as $a) {
                    ?>
                    <div class="question">
                        <?php echo $i . "/32<br/>"; ?>
                        <h3><?php echo $i . ". " . $a[0]; ?></h3>
                        <input type="radio" name="ans<?php echo $i; ?>" value="a" class="ans" />ก. <?php echo $a[1]; ?><br/>
                        
                        <input type="radio" name="ans<?php echo $i; ?>" value="b" class="ans" />ข. <?php echo $a[2]; ?>
                    </div>
                    <?php
                    $i++;
                }
                ?>
                <div class="question">
                    <input type="submit" value="ส่ง" class="btn btn-info btn-large" />
                </div>
            </form>
        <?php } ?>
    </div>
</div>