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
            fieldset {
                margin-bottom: 40px;
            }
        </style>
        <h1>เอกสารประกอบการอบรม/โปรแกรม</h1>
        
        <fieldset>
            <legend>Part I : System</legend>
            --> Unix system by P'Man<br/>
            <a href="<?php echo base_url("downloads/Introduction_to_Linux_System.pdf"); ?>" target="_blank">download</a> | [Power point] Introduction to Linux System<br/>
            <a href="http://www.ubuntu.com/" target="_blank">download</a> | [Program] Ubuntu<br/>
            <a href="https://www.virtualbox.org/wiki/Downloads" target="_blank">download</a> | [Program] Virtual box<br/>
            <br/>--> Database by P'Fax<br/>
            <a href="<?php echo base_url("downloads/Introduction_to_Database_System.ppsx"); ?>" target="_blank">download</a> | [Power point] Introduction to Database System<br/>
            <a href="<?php echo base_url("downloads/Console-2.00b148-Beta_32bit"); ?>" target="_blank">download</a> | [Program] Console-2.00b148-Beta_32bit<br/>
            <a href="<?php echo base_url("downloads/world.sql");?>" target="_blank">download</a> | [File] SQL Sample data<br/>
            <a href="http://xenon.kmitl.net/IntroDB" target="_blank">download</a> | [Web] Database E-Learning<br/>
        </fieldset>
        
        <fieldset>
            <legend>Part II : Network</legend>
             --> OSI Model by P'C-Ew<br/>
            <a href="<?php echo base_url("downloads/OSI_MODEL.pptx"); ?>" target="_blank">download</a> | [Power point] OSI Moel<br/>
             <br/>--> Network device and topology by P'Bua<br/>
            <a href="<?php echo base_url("downloads/Device_and_Topology.pptx"); ?>" target="_blank">download</a> | [Power point] Device and Topology<br/>
             <br/>--> Mac address, IP Address by P'Bell<br/>
            <a href="<?php echo base_url("downloads/IP.pptx"); ?>" target="_blank">download</a> | [Power point] IP<br/>
            <a href="<?php echo base_url("downloads/IP_EX.docx"); ?>" target="_blank">download</a> | [Word] IP Exercise<br/>
            <br/>-->Routing by P'Wai<br/>
            <a href="<?php echo base_url("downloads/PacketTracer533_setup_no_tutorials.exe"); ?>" target="_blank">download</a> | [Program] Cisco Packet Tracer 5.33<br/>
        </fieldset>
        
        <fieldset>
            <legend>Part III : Web Application</legend>
             --> Basic web application by P'Q<br/>
            <a href="<?php echo "http://www.appservnetwork.com/index.php?newlang=thai"; ?>" target="_blank">download</a> | [Program] Appserv<br/>
             <br/>--> Web CMS by P'Farm<br/>
            <a href="<?php echo base_url("downloads/wordpress-3.3.2-th.zip"); ?>" target="_blank">download</a> | [Program] Wordpress<br/>
            <a href="<?php echo base_url("downloads/phpBB-3.0.10-th.zip"); ?>" target="_blank">download</a> | [Program] PHPBB<br/>
            <a href="<?php echo base_url("downloads/prosilver_se_1.0.8.zip"); ?>" target="_blank">download</a> | [Program] PHPBB-Theme<br/>
        </fieldset>
        
    </div>
</div>