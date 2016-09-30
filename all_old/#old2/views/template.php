<?php
// Change default to thai language
if ($this->session->userdata('lang') == "" || $this->session->userdata('lang') == null) {
    $this->session->set_userdata('lang', 'th');
    redirect(base_url("th"));
} else {
    $this->session->set_userdata('lang', getLang());
}

// User id < 22 must enter new information (because previous system have bug (bug on editing data))
$qmid = $this->auth->get_member_id();
if (!($qmid == null || $qmid == "")) {
    $qdata = $this->auth->get_member_info($qmid);
    if ($qdata->first_name == null || $qdata->first_name == "") {
        if (!($this->uri->segment(1) == "member" && $this->uri->segment(2) == "editForm")) {
            redirect("member/editForm");
        }
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Computer System Administrator Group (CSAG)</title>
        <meta charset="utf-8" />
        <link href="<?php echo base_url("resources/css/bootstrap.min_old.css"); ?>" rel="stylesheet" />
        <link href="<?php echo base_url("resources/css/csag.css"); ?>" rel="stylesheet" />
        <link href="<?php echo base_url("resources/css/introjs.css"); ?>" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo base_url("resources/js/intro.js"); ?>"></script>
        <script src="<?php echo base_url("resources/js/cufon-yui.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("resources/js/font.js"); ?>" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url("resources/js/jquery-1.7.2.min.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("resources/js/superfish.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("resources/js/bootstrap.min.js"); ?>"></script>
        <link type="image/x-icon" href="<?php echo base_url("resources/img/favicon.png"); ?>" rel="shortcut icon" />
        <base href="<?php echo base_url(""); ?>">
    </head>
    <body style="background-color: #e2e2e2;">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <div class="nav-collapse">
                        <ul class="nav">
                            <!--<li><?php echo language_menu(24, "", true); ?></li>-->
                            <li<?php echo ($this->uri->segment(1) == "" || uri_string() == "home") ? ' class="active"' : ''; ?>><a href="<?php echo site_url("home"); ?>"><?php echo lang("menu.top.home"); ?></a></li>
                            <li<?php echo ($this->uri->segment(1) == "event") ? ' class="active"' : ''; ?>><a href="<?php echo site_url("event"); ?>"><?php echo lang("menu.top.event"); ?></a></li>
                            <?php if (0) { ?><li<?php echo (uri_string() == "content/calendar") ? ' class="active"' : ''; ?>><a href="<?php echo site_url("content/calendar"); ?>"><?php echo lang("menu.top.calendar"); ?></a></li><?php } ?>
                            <li<?php echo ($this->uri->segment(1) == "portfolio") ? ' class="active"' : ''; ?>><a href="<?php echo site_url("portfolio"); ?>"><?php echo lang("menu.top.portfolio"); ?></a></li>
                            <li<?php echo (uri_string() == "content/about") ? ' class="active"' : ''; ?>><a href="<?php echo site_url("content/about"); ?>"><?php echo lang("menu.top.aboutus"); ?></a></li>
                        </ul>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-danger" href="http://kmi.tl/csaggroup" target="_blank"><i class="icon-plus icon-white"></i> Join CSAG Community</a>
                        <a class="btn btn-info" href="http://kmi.tl/csagpage" target="_blank"><i class="icon-thumbs-up icon-white"></i> Like us on Facebook</a>
                        <?php echo language_menu(24, "", true); ?>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #fff;">
            <div class="container" style="padding-top: 50px;">
                <div style="float: left;">
                    <a href="<?php echo site_url(""); ?>"><img src="<?php echo base_url("/resources/img/logo.png"); ?>" width="150" /></a>
                </div>
                <div style="text-align: right; margin-top: -10px;">
                    &nbsp;
                    <?php
                    if ($this->auth->is_member()) :
                        $query = $this->db->get_where('members', array('mid' => $this->auth->get_member_id()));
                        $row = $query->row_array();
                        ?>
                        <form method="post" accept-charset="utf-8" action="#" class="form-inline">
                            <?php echo lang("menu.top.member.hello"); ?> <?php echo $row['nick_name']; ?> | 
                            <a href="<?php echo site_url("member"); ?>" target="_self"><?php echo lang("menu.top.member.menu"); ?></a> | 
                            <a href="<?php echo site_url("regis/logout"); ?>" target="_self"><?php echo lang("menu.top.member.logout"); ?></a>
                        </form>
                    <?php else: ?>
                        <form method="post" accept-charset="utf-8" action="<?php echo site_url("regis/login"); ?>" class="form-inline" data-step="1" data-intro="สมัครเป็นสมาชิก และทำการเข้าสู่ระบบ">
                            <input type="text" class="input-small" placeholder="<?php echo lang("menu.top.member.username"); ?>" name="username" maxlength="20">
                            <input type="password" class="input-small" placeholder="<?php echo lang("menu.top.member.password"); ?>" name="password" maxlength="32">
                            <button type="submit" class="btn"><?php echo lang("menu.top.member.login"); ?></button>
                            <a href="<?php echo site_url("regis/form"); ?>" class="btn btn-warning"><?php echo lang("menu.top.member.register"); ?></a>
                        </form>
                    <?php endif; ?>
                    <form method="post" accept-charset="utf-8" action="<?php echo site_url("subscribe"); ?>">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" class="span2" placeholder="<?php echo lang("menu.top.subscribe.placeholder"); ?>" name="email" maxlength="255">
                            <button type="submit" value="subscribe" class="btn"><?php echo lang("menu.top.subscribe.btn"); ?></button>
                        </div>
                    </form>
                </div>
                <!--<hr/>-->
                <div id="content_main">
                    <?php if (getLang() == "en") { ?>
                        <div class="span11 alert alert-info" align="center">
                            Sorry for unconvenient. English version is under development.
                        </div>
                    <?php } ?>
                    <?php if ($this->uri->segment(1) == "member") { ?>
                        <?php echo $sub_content; ?>
                        <div class="row">
                            <div class="span3 well">
                                <ul class="nav nav-list">
                                    <li class="nav-header">
                                        <?php echo lang("menu.member.header"); ?>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("member"); ?>"><i class="icon-home"></i><?php echo lang("menu.member.home"); ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("member/editForm"); ?>"><i class="icon-edit"></i><?php echo lang("menu.member.editProfile"); ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("member/inbox"); ?>"><i class="icon-folder-open"></i><?php echo lang("menu.member.inbox"); ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("member/joinEventList"); ?>"><i class="icon-ok"></i><?php echo lang("menu.member.joinEventList"); ?></a>
                                    </li>
                                    <?php if ($this->auth->is_admin()) { ?>
                                        <li>
                                            <a href="<?php echo site_url("admin"); ?>"><i class="icon-wrench"></i><?php echo lang("menu.member.admin"); ?></a>
                                        </li>
                                    <?php } ?>
                                    <li>
                                        <a href="<?php echo site_url("regis/logout"); ?>"><i class="icon-off"></i><?php echo lang("menu.member.logout"); ?></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="span8">
                                <?php echo $content; ?>
                            </div>
                        </div>
                    <?php } else if ($this->uri->segment(1) == "admin") { ?>
                        <?php echo $sub_content; ?>
                        <div class="row">
                            <div class="span3 well">
                                <ul class="nav nav-list">
                                    <li class="nav-header">
                                        Admin menu
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("member"); ?>"><i class="icon-user"></i>Back to member menu</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("admin/index"); ?>"><i class="icon-home"></i>Main page</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("admin/event"); ?>"><i class="icon-globe"></i>Event management</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("admin/message"); ?>"><i class="icon-envelope"></i>Message center</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("admin/viewAsUser"); ?>"><i class="icon-eye-open"></i>View as user</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url("regis/logout"); ?>"><i class="icon-off"></i>Log out</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="span8">
                                <?php if (getLang() != "en") echo '<div class="alert alert-error">Sorry, Admin menu have english language only!</div>'; ?>
                                <?php echo $content; ?>
                            </div>
                        </div><?php
                        } else {
                            echo $content;
                        }
                            ?>
                </div>
            </div>
        </div>
        <div style="width:100%; height: 120px;">
            <div class="container">
                <div class="row">
                    <div class="span2">
                        <a href="<?php echo site_url(""); ?>"><img src="<?php echo base_url("/resources/img/logo.png"); ?>" height="100" /></a>
                    </div>
                    <div class="span2">
                        <a href="http://kmi.tl/csaggroup"><img src="<?php echo base_url("/resources/img/logo_community.png"); ?>" height="100" /></a>
                    </div>
                    <div class="span8" style="text-align: center; padding-top: 25px;">
                        <p>&copy; 2012 Computer System Administrator Group (CSAG)</p>
                        <p>Computer Service Center, KMITL</p>
                        <p style="font-size: 10px;">System version 2.1.2 powered by <a href="http://csag.kmi.tl">CSAG</a></p>
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

	//Google Analytic
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53919875-1', 'auto');
  ga('send', 'pageview');


        </script>
    </body>
</html>
