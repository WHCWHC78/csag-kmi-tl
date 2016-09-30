<!DOCTYPE html>
<html>
    <head>
        <title>Computer System Administrator Group (CSAG)</title>
        <meta charset="utf-8" />
        <link href="<?php echo base_url("resources/css/bootstrap.min.css"); ?>" rel="stylesheet" />
        <link href="<?php echo base_url("resources/css/csag.css"); ?>" rel="stylesheet" />
        <script src="<?php echo base_url("resources/js/cufon-yui.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("resources/js/font.js"); ?>" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url("resources/js/jquery-1.7.2.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("resources/js/superfish.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("resources/js/bootstrap-tab.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("resources/js/bootstrap-modal.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("resources/js/bootstrap-transition.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("resources/js/bootstrap-carousel.js"); ?>"></script>
        <link type="image/x-icon" href="<?php echo base_url("resources/img/favicon.png"); ?>" rel="shortcut icon" />
    </head>
    <body style="background-color: #e2e2e2;">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li<?php echo ($this->uri->segment(1) == "" || uri_string() == "home") ? ' class="active"' : ''; ?>><a href="<?php echo base_url("home"); ?>">หน้าแรก</a></li>
                            <li<?php echo (uri_string() == "content/calendar") ? ' class="active"' : ''; ?>><a href="<?php echo base_url("content/calendar"); ?>">ปฏิทิน</a></li>
                            <li<?php echo ($this->uri->segment(1) == "regis") ? ' class="active"' : ''; ?>><a href="<?php echo base_url("regis"); ?>">เข้าร่วมโครงการ</a></li>
                            <li<?php echo ($this->uri->segment(1) == "portfolio") ? ' class="active"' : ''; ?>><a href="<?php echo base_url("portfolio"); ?>">ผลงาน</a></li>
                            <li<?php echo (uri_string() == "content/about") ? ' class="active"' : ''; ?>><a href="<?php echo base_url("content/about"); ?>">เกี่ยวกับเรา</a></li>
                        </ul>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-danger" href="http://kmi.tl/csaggroup" target="_blank"><i class="icon-plus icon-white"></i> Join CSAG Community Now!</a>
                        <a class="btn btn-info" href="http://kmi.tl/csagpage" target="_blank"><i class="icon-thumbs-up icon-white"></i> Like us on Facebook</a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #fff;">
            <div class="container" style="padding-top: 50px;">
                <div style="float: left;">
                    <img src="<?php echo base_url("/resources/img/logo.png"); ?>" width="150" />
                </div>
                <div style="text-align: right; margin-top: -10px;">
                    &nbsp;
                    <?php
                    $id = $this->session->userdata('id');
                    if ($id != "") :
                        $query = $this->db->get_where('register', array('student_id' => $id));
                        $row = $query->row_array();
                        ?>
                        <form method="post" accept-charset="utf-8" action="#" class="form-inline">
                            สวัสดีน้อง <?php echo $row['nick_name']; ?> | 
                            <a href="<?php echo base_url("member"); ?>" target="_self">เมนูสมาชิก</a> | 
                            <a href="<?php echo base_url("member/logout"); ?>" target="_self">ออกจากระบบ</a>
                        </form>
                    <?php else: ?>
                        <form method="post" accept-charset="utf-8" action="<?php echo base_url("member/login"); ?>" class="form-inline">
                            <input type="text" class="input-small" placeholder="รหัสนักศึกษา" name="studentid" maxlength="8">
                            <input type="password" class="input-small" placeholder="รหัสผ่าน" name="password" maxlength="32">
                            <button type="submit" class="btn">Log in</button>
                        </form>
                    <?php endif; ?>
                    <form method="post" accept-charset="utf-8" action="<?php echo base_url("subscribe"); ?>">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" class="span2" placeholder="Email" name="email" maxlength="255">
                            <button type="submit" class="btn">Subscribe</button>
                        </div>
                    </form>
                </div>
                <hr/>
                <div id="content_main">
                    <?php print $content ?>
                </div>
            </div>
        </div>
        <div style="width:100%; height: 120px;">
            <div class="container">
                <div class="row">
                    <div class="span2">
                        <a href="<?php echo base_url(""); ?>"><img src="<?php echo base_url("/resources/img/logo.png"); ?>" height="100" /></a>
                    </div>
                    <div class="span8" style="text-align: center; padding-top: 25px;">
                        <p>&copy; 2012 Computer System Administrator Group (CSAG)</p>
                        <p>Computer Service Center, KMITL</p>
                        <p>&nbsp;</p>
                    </div>
                    <div class="span2">
                        <a href="http://kmi.tl/csaggroup"><img src="<?php echo base_url("/resources/img/logo_community.png"); ?>" height="100" /></a>
                    </div>
                </div>
            </div>
        </div>
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
    </body>
</html>
