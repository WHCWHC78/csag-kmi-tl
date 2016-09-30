<nav class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a style="padding: 0px" class="navbar-brand" href="index.php"><img src="images/logo.png"
                                                                               style="max-height: 70px" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="even.php">Event</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="exp.php">Experiences</a></li>
                <li><a href="about.php">About Us</a></li>

                <?
                if (isset($_SESSION['member'])) {
                    ?>
                    <li class="dropdown">
                        <a href="#" title="<?= $_SESSION['member'] ?>" class="dropdown-toggle" data-toggle="dropdown">
                            <?= $_SESSION['fullname'] ?>
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="member.php"><span class="glyphicon glyphicon-user"></span>
                                    Account</a></li>
                            <li class="divider"></li>
                            <li><a href="process/logout.php"><span class="glyphicon glyphicon-log-out"></span>
                                    Sign Out</a></li>
                        </ul>
                    </li>

                <? } else { ?>
                    <li><a style="padding-right: 0px" title="เข้าสู่ระบบ" href="#" data-toggle="modal"
                           onclick="loadlogintab()"
                           data-target="#loginModal">Sign In</a></li>

                <? } ?>

            </ul>
        </div>
    </div>
</nav><!--/header-->
<div class="modal fade" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <ul class="nav nav-tabs" role="tablist" id="myTab">
                    <li class="active"><a href="#loginTab" role="tab" data-toggle="tab">เข้าสู่ระบบ</a></li>
<!--                    <li><a href="#regTab" role="tab" data-toggle="tab">สมัครสมาชิก</a></li>-->
                </ul>
            </div>

            <div class="modal-body">
                <!-- Nav tabs -->

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="loginTab">
                        <form ACTION="process/login.php" method="post" id="nav_loginform">
                            <div class="omb_login">


                                <div class="row omb_row-sm-offset-3">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-user"></i></span>
                                            <input style="width: 100%" type="text" class="form-control" name="email"
                                                   placeholder="อีเมล">
                                        </div>
                                        <span class="help-block"></span>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-lock"></i></span>
                                            <input style="width: 100%" type="password" class="form-control"
                                                   name="password"
                                                   placeholder="รหัสผ่าน">
                                        </div>
                                        <span style="display: none" class="help-block">Password error</span>
                                        <button style="margin-top: 20px;margin-left: 0px"
                                                class="btn btn-block btn-primary "
                                                type="submit">เข้าสู่ระบบ
                                        </button>
                                    </div>
                                </div>


                            </div>
                        </form>

                    </div>
<!--                    <div class="tab-pane" id="regTab">-->
<!---->
<!--                        <form id="regform" class="form-horizontal" role="form" method="post"-->
<!--                              action="process/register.php">-->
<!--                            <div class="omb_login">-->
<!---->
<!---->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-6">-->
<!--                                        <input style="width: 100%" name="firstname" type="text" class="form-control"-->
<!--                                               placeholder="Firstname (ชื่อจริง)">-->
<!--                                    </div>-->
<!--                                    <div class="col-md-6">-->
<!--                                        <input style="width: 100%" name="lastname" type="text" class="form-control"-->
<!--                                               placeholder="Lastname (นามสกุล)">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <br>-->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-6">-->
<!--                                        <input style="width: 100%" name="nickname" type="text" class="form-control"-->
<!--                                               placeholder="Nickname (ชื่อเล่น)">-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="col-md-6">-->
<!--                                        <input style="width: 100%" name="tel" type="text" class="form-control"-->
<!--                                               placeholder="Tel. (เบอร์โทรศัพท์)">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <br>-->
<!--                                <input style="width: 100%" name="email" type="email" class="form-control"-->
<!--                                       placeholder="E-mail (อีเมล)">-->
<!--                                <br>-->
<!---->
<!--                                <input style="width: 100%" name="password" type="password" class="form-control"-->
<!--                                       placeholder="Password (รหัสผ่าน)">-->
<!--                                <br>-->
<!--                                <input style="width: 100%" name="repassword" type="password" class="form-control"-->
<!--                                       placeholder="Re-Password (ยืนยันรหัสผ่าน)">-->
<!--                                <br>-->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-6">-->
<!--                                        <input style="width: 100%" name="faculty" type="text" class="form-control"-->
<!--                                               placeholder="Faculty (คณะ)">-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                    <div class="col-md-6">-->
<!--                                        <input style="width: 100%" name="department" type="text" class="form-control"-->
<!--                                               placeholder="Department (สาขา)">-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                </div>-->
<!---->
<!--                                <br>-->
<!--                                <button style="margin-left: 0px" type="submit" class="btn btn-warning btn-block">-->
<!--                                    Register-->
<!--                                </button>-->
<!---->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
                </div>

            </div>

        </div>
    </div>
</div>
