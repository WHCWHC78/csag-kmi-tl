<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Computer System Administrator Group </title>
        <link rel="stylesheet" href="<?php echo site_url("resources/css/regis.css"); ?>" />
        <style type="text/css">
        </style>
        <meta name="title" content="CSAG Computer System Administrator Group" />

        <meta name="description" content="ขณะนี้ทางกลุ่ม CSAG ทำการเปิดรับสมาชิกเพิ่มเพื่อเข้าร่วมการทำงานร่วมกับทีมของสำนักบริการคอมพิวเตอร์ นักศึกษาที่ได้เข้าร่วมโครงการนี้มีสิทธิ์ในการใช้อุปกรณ์ และมีโอกาสได้รับความรู้เพิ่มเติมจากการเรียนรู้ในมหาวิทยาลัยมากกว่าคนอื่น<br />
              We are here, open for new period in gathering the people who interested in our projects and our ways. Don't be hasitate. Join us today and you will get more facilities than others for 4 years. " />
        <link rel="image_src" href="resources/images/logo.png" />
        <link type="image/x-icon" href="resources/images/favicon.png" rel="shortcut icon" />
        <script language="javascript" type="text/javascript" src="<?php echo site_url("resources/js/jquery.js"); ?>"></script>
        <script>
			$(document).ready(function(){
				<?php if (empty($error)&&$this->session->userdata('id')=="")
				echo '$(".login").hide();'; ?>
				$("#loginB").click(function(){
					$(".login").show('slow');
				});
			});
		</script>
        <script type="text/javascript">
			  var _gaq = _gaq || [];
			  _gaq.push(['_setAccount', 'UA-25360189-1']);
			  _gaq.push(['_trackPageview']);
			  (function() {
				  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			  })();
		</script>
    </head>

    <body>
        <div class="head">
            <div class="logo"><a href="http://csag.kmi.tl" target="_self"><img src="<?php echo site_url("resources/images/logocsag.png"); ?>" width="100%" height="100%" /></a></div>
        </div>

        <div class="nav">
            <div class="innav">
                <div class="innav_tab <?php if($this->uri->segment(1)=="home") echo "innav_tab_focus" ?>" >
                    <a href="<?php echo site_url("home"); ?>" title="Home" style="color:#FFF">หน้าแรก</a>
                </div>
<div class="innav_tab <?php if($this->uri->segment(1)=="train") echo "innav_tab_focus" ?>">
                    <a href="<?php echo site_url("train"); ?>" title="Register to train" style="color:#FFF">โครงการอบรมเชิงปฏิบัติการ</a>
                </div>
<div class="innav_tab <?php if($this->uri->segment(1)=="csag") echo "innav_tab_focus" ?>">
                    <a href="<?php echo site_url("csag"); ?>" title="Register to csag" style="color:#FFF">สมัครเข้าเป็นสมาชิก CSAG</a>
                </div>
                <?php if(0){ ?>
                <div class="innav_tab <?php if($this->uri->segment(1)=="lists") echo "innav_tab_focus" ?>">
                    <a href="<?php echo site_url("lists"); ?>" title="List of csag registered" style="color:#FFF">รายชื่อผู้ลงทะเบียน</a>
                </div>
                <?php } ?>
                <?php if(0){ ?>
                <div class="innav_tab <?php if($this->uri->segment(1)=="calendar") echo "innav_tab_focus" ?>">
                    <a href="<?php echo site_url("calendar"); ?>" title="CSAG Calendar Event" style="color:#FFF">ปฏิทิน กิจกรรม</a>
                </div>
                <div class="innav_tab <?php if($this->uri->segment(1)=="map") echo "innav_tab_focus" ?>">
                    <a href="<?php echo site_url("map"); ?>" title="KMITL Map" style="color:#FFF">แผนที่</a>
                </div>
                <?php } ?>
                <div class="innav_tab ">
                    <a href="http://csag.kmi.tl/contact" title="CSAG Website" style="color:#FFF" target="_blank">ติดต่อเรา</a>
                </div>
                <?php if($this->session->userdata('id')==""){ ?>
                <div class="innav_tab">
                	<a href="#" title="Member login" style="color:#FFF" id="loginB">เข้าสู่ระบบ</a>
                </div>
                <?php }else{ ?>
                <div class="innav_tab">
                	<a href="<?php echo site_url("account/logout"); ?>" title="Member logout" style="color:#FFF" id="loginB">ออกจากระบบ</a>
                </div>
                <?php } ?>
            </div>
        </div>
<div class="page">
            <div id="content">
            	<div class="login" align="right">
                        <form action="<?php echo site_url("account/login"); ?>" method="post" target="_self" id="loginForm">
						<?php if($this->session->userdata('id')==""){
                        if (!empty($error))
							echo '<font color="red">' . $errormsg . '</font> ---'; ?>
                            [สำหรับผู้สมัครเข้าสู่ระบบ] :
                            รหัสนักศึกษา <input name="id" type="text" size="12" maxlength="8" id="id" />
                            รหัสผ่าน <input name="pwd" type="password" size="12" id="pwd" />
                            <input type="submit" name="submit" id="submit" value="เข้าสู่ระบบ" class="buttonq" />
                        <?php }else{
							$query = @$this->db->get_where('members', array('student_id' => $this->session->userdata('id')));
							if($query->num_rows()==0) echo "Error on trying to connect data [by csag]"; else{ $r = $query->row_array();?>
                        <div>สวัสดี N' <?php echo $r['nick_name']; ?>
                        [<a href="<?php echo site_url("home/recommend"); ?>" target="_self">ข้อปฏิบัติ</a>] 
                        [<a href="#" title="<?php echo $r['private_msg']; ?>" onclick="alert('<?php echo $r['private_msg']; ?>');">ข้อความถึงคุณ</a>] 
                        [<a href="<?php echo site_url("account"); ?>" target="_self">ข้อมูลส่วนบุคคล</a>] 
                        || <a href="<?php echo site_url("account/logout"); ?>" target="_self">ออกจากระบบ</a>
                        </div><?php }}?></form><br />
                </div>
                <?php echo $content ?>
            </div>

            <div class="footer">
                <div class="foottop"><a href="<?php echo site_url("home"); ?>" >หน้าแรก</a></div>
                <div class="foottop"><a href="<?php echo site_url("regis"); ?>" >ลงทะเบียน</a></div>
                <div class="foottop"><a href="<?php echo site_url("home/recommend"); ?>" >ข้อปฏิบัติ</a></div>
                <?php if(0){ ?><div class="foottop"><a href="<?php echo site_url("lists"); ?>" >รายชื่อผู้ลงทะเบียน</a></div><?php } ?>
                <div class="foottop"><a href="<?php echo site_url("calendar"); ?>" >ปฏิทิน กิจกรรม</a></div>
                <div class="foottop"><a href="<?php echo site_url("map"); ?>" >แผนที่</a></div>
                <div class="foottop4">©2011 CSAG</div>
            </div>
        </div>
    </body>
</html>