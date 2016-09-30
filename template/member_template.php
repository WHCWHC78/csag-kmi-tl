<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Account</h1>

                <p>Account</p>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Account</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->
<?
$result = $mysql->queryAndFetch("SELECT * FROM member WHERE id=%n", $_SESSION['id']);
?>

<section class="csag-main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">

                <ul class="list-group">
                    <a href="member.php" class="list-group-item "><span class="glyphicon glyphicon-user"></span>
                        ข้อมูลส่วนตัว<span class="pull-right"><i
                                class="glyphicon glyphicon-chevron-right"></i></span></a>

                </ul>

            </div>

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>Account</h4>
                        <hr>
                        <form action="process/editAccount.php" method="post" class="department">
                            <div class="form-group" style="padding-bottom: 40px">
                                <label for="inputEmail3" class="col-sm-2 control-label">Firstname</label>

                                <div class="col-sm-10">
                                    <input name="firstname" type="text" class="form-control" required
                                           value="<?= $result['firstname'] ?>"
                                           placeholder="Firstname (ชื่อจริง)">
                                </div>
                            </div>
                            <div class="form-group" style="padding-bottom: 40px">
                                <label for="inputEmail3" class="col-sm-2 control-label">Lastname</label>

                                <div class="col-sm-10">
                                    <input name="lastname" type="text" class="form-control" required
                                           value="<?= $result['lastname'] ?>"
                                           placeholder="Lastname (นามสกุล)">
                                </div>
                            </div>
                            <div class="form-group" style="padding-bottom: 40px">
                                <label for="inputEmail3" class="col-sm-2 control-label">Nickname</label>

                                <div class="col-sm-10">
                                    <input name="nickname" type="text" class="form-control" required
                                           value="<?= $result['nickname'] ?>"
                                           placeholder="Nickname (ชื่อเล่น)">
                                </div>
                            </div>
                            <div class="form-group" style="padding-bottom: 40px">
                                <label for="inputEmail3" class="col-sm-2 control-label">Tel</label>

                                <div class="col-sm-10">
                                    <input name="tel" type="text" class="form-control" value="<?= $result['tel'] ?>" required
                                           placeholder="Tel. (เบอร์โทรศัพท์)">
                                </div>
                            </div>
                            <div class="form-group" style="padding-bottom: 40px">
                                <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>

                                <div class="col-sm-10">
                                    <input name="email" type="email" class="form-control"
                                           value="<?= $result['email'] ?>" disabled
                                           placeholder="E-mail (อีเมล)">
                                </div>
                            </div>

                            <div class="form-group" style="padding-bottom: 40px">
                                <label for="inputEmail3" class="col-sm-2 control-label">Faculty</label>

                                <div class="col-sm-10">
                                    <input name="faculty" type="text" class="form-control"
                                           value="<?= $result['faculty'] ?>" required
                                           placeholder="Faculty (คณะ)">
                                </div>
                            </div>
                            <div class="form-group" style="padding-bottom: 40px">
                                <label for="inputEmail3" class="col-sm-2 control-label">Department</label>

                                <div class="col-sm-10">
                                    <input name="department" type="text" class="form-control"
                                           value="<?= $result['department'] ?>" required
                                           placeholder="Department (สาขา)">
                                </div>
                            </div>

                            <div align="center" class="form-group" style="padding-bottom: 40px">
                                <button type="submit" class="btn btn-primary">SAVE</button>


                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>