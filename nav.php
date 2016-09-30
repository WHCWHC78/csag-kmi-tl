<!-- Navbar -->
<nav class="navbar navbar-primary navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php">

                <img src="https://files.slack.com/files-pri/T1V5STT9N-F2797SHBR/logo_small.png" style="height: 60px;"
                     alt="Computer System Administrator Group" title="Computer System Administrator Group">

            </a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-index">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php">
                        หน้าแรก
                    </a>
                </li>

                <li>
                    <a href="product.php">
                        ผลงาน
                    </a>
                </li>
                <li>
                    <a href="about.php">
                        เกี่ยวกับเรา
                    </a>
                </li>

                <?php
                if (isset($_SESSION['member'])) {
                    ?>
                    <li class="dropdown">
                        <a href="#" title="<?= $_SESSION['member'] ?>" class="dropdown-toggle" data-toggle="dropdown">
                            <?= $_SESSION['fullname'] ?>
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="member.php"><span class="glyphicon glyphicon-user"></span>
                                    บัญชี</a></li>
                            <li class="divider"></li>
                            <li><a href="process/logout.php"><span class="glyphicon glyphicon-log-out"></span>
                                    ออกจากระบบ</a></li>
                        </ul>
                    </li>

                <?php } else { ?>
                    <li>
                        <a href="javascript:void(0)" onclick="openLoginModal();">
                            เข้าสู่ระบบ
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-rose btn-raised btn-round" href="javascript:void(0)"
                           onclick="openRegisterModal();">
                            ลงทะเบียน
                        </a>
                    </li>

                <?php } ?>


            </ul>
        </div>
    </div>
</nav>
<div class="modal fade login" id="loginModal">
    <div class="modal-dialog modal-md login animated">
        <div class="modal-content">
            <div class="modal-header visible-xs">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                        style="font-size: 35px;">&times;</button>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">
                        <div class="form loginBox">
                            <form method="post" action="process/login.php" accept-charset="UTF-8" role="form">
                                <div class="form-group label-floating">
                                    <label class="control-label">อีเมล</label>
                                    <input type="email" name="email" class="form-control"
                                           required>
                                    <span class="material-input"></span>
                                </div>
                                <div class="form-group label-floating">
                                    <label class="control-label">รหัสผ่าน</label>
                                    <input type="password" name="password"
                                           class="form-control" required>
                                    <span class="material-input"></span>
                                </div>
                                <!-- <div class="checkbox">
                                     <label>
                                         <input type="checkbox" name="remember"><span class="checkbox-material">
                                             จำฉันไว้ในระบบ</span>
                                     </label>
                                 </div>-->
                                <button class="btn btn-info btn-block btn-login" type="submit">
                                    เข้าสู่ระบบ
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="content registerBox" style="display:none;">
                        <div class="form">
                            <form method="post" action="process/register.php" accept-charset="UTF-8" role="form">
                                <div class="form-group label-floating ">
                                    <label class="control-label">ชื่อและนามสกุล</label>
                                    <input class="form-control" type="text"
                                           name="name" required>
                                    <span class="material-input"></span></div>
                                <div class="form-group label-floating ">
                                    <label class="control-label">เบอร์โทร</label>
                                    <input class="form-control" type="tel"
                                           name="tel" required>
                                    <span class="material-input"></span></div>


                                <div class="form-group label-floating ">
                                    <label class="control-label">อีเมล</label>
                                    <input class="form-control" type="text"
                                           name="email" required>
                                    <span class="material-input"></span></div>


                                <div class="form-group label-floating ">
                                    <label class="control-label">รหัสผ่าน</label>
                                    <input class="form-control" type="password" name="password"
                                           required>
                                    <span class="material-input"></span>
                                    <span class="material-input"></span></div>


                                <div class="form-group label-floating">
                                    <label class="control-label">ยืนยันรหัสผ่าน</label>
                                    <input class="form-control" type="password" name="repassword"
                                           required>
                                    <span class="material-input"></span>
                                    <span class="material-input"></span></div>
                                <select class="form-control" name="faculty">
                                    <option value="0">กรุณาเลือกคณะ</option>
                                    <option value="วิศวกรรมศาสตร์">วิศวกรรมศาสตร์</option>
                                    <option value="วิทยาศาสตร์">วิทยาศาสตร์</option>
                                    <option value="เทคโนโลยีสารสรเทศ">เทคโนโลยีสารสรเทศ</option>
                                    <option value="สถาปัตยกรรมศาสตร์">สถาปัตยกรรมศาสตร์</option>
                                    <option value="ครุศาสตร์อุตสาหกรรม">ครุศาสตร์อุตสาหกรรม</option>
                                    <option value="เทคโนโลยีการเกษตร">เทคโนโลยีการเกษตร</option>
                                    <option value="อุตสาหกรรมเกษตร">อุตสาหกรรมเกษตร</option>
                                    <option value="วิทยาลัยนานาชาติ">วิทยาลัยนานาชาติ</option>
                                    <option value="วิทยาลัยนาโนเทคโนโลยีพระจอมเกล้าลาดกระบัง">
                                        วิทยาลัยนาโนเทคโนโลยีพระจอมเกล้าลาดกระบัง
                                    </option>
                                    <option value="วิทยาลัยนวัตกรรมการผลิตขั้นสูง">วิทยาลัยนวัตกรรมการผลิตขั้นสูง
                                    </option>
                                    <option value="การบริหารและจัดการ">การบริหารและจัดการ</option>
                                    <option value="วิทยาลัยอุตสาหกรรมการบินนานาชาติ">วิทยาลัยอุตสาหกรรมการบินนานาชาติ
                                    </option>
                                </select>
                                <div class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" value="male" checked>
                                        ชาย
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" value="female">
                                        หญิง
                                    </label>

                                </div>


                                <button class="btn btn-info btn-block btn-register" type="submit"
                                        style="margin-top: 20px">ลงทะบียน
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="padding-bottom: 20px">
                <div class="forgot login-footer text-center">
                    <span>ยังไม่มีบัญชี?
                        <a href="javascript: showRegisterForm();">ลงทะเบียน</a>
                    </span>
                </div>
                <div class="forgot register-footer text-center" style="display:none">
                    <span>เป็นสมาชิกอยู่แล้ว?</span>
                    <a href="javascript: showLoginForm();">เข้าสู่ระบบ</a>
                </div>
            </div>
        </div>
    </div>
</div>
