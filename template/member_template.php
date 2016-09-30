<div class="about-us">
    <div class="page-header header-filter" data-parallax="active"
         style="background-image: url('https://files.slack.com/files-pri/T1V5STT9N-F27MB8H1N/logobg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1>บัญชี</h1>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised" style="margin-bottom: 50px">
    <div class="container" style="padding-top: 60px;padding-bottom: 50px">
        <?php
        $result = $mysql->queryAndFetch("SELECT * FROM member WHERE id=%n", $_SESSION['id']);
        ?>

        <div class="row">
            <div class="col-md-offset-3 col-md-6 ">
                <form action="process/editAccount.php" method="post">
                    <div class="form-group" style="padding-bottom: 40px">
                        <label class="col-sm-3 control-label text-right">อีเมล</label>

                        <div class="col-sm-9">
                            <input name="email" type="email" class="form-control"
                                   value="<?= $result['email'] ?>" disabled
                                   placeholder="อีเมล">
                        </div>
                    </div>
                    <div class="form-group" style="padding-bottom: 40px">
                        <label class="col-sm-3 control-label text-right">ชื่อและนามสกุล</label>

                        <div class="col-sm-9">
                            <input name="fullname" type="text" class="form-control" required
                                   value="<?= $result['fullname'] ?>"
                                   placeholder="ชื่อละนามสกุล">
                        </div>
                    </div>

                    <div class="form-group" style="padding-bottom: 40px">
                        <label class="col-sm-3 control-label text-right">เบอร์โทร</label>

                        <div class="col-sm-9">
                            <input name="tel" type="text" class="form-control" value="<?= $result['tel'] ?>"
                                   required
                                   placeholder="เบอร์โทรศัพท์">
                        </div>
                    </div>


                    <div class="form-group" style="padding-bottom: 40px">
                        <label class="col-sm-3 control-label text-right">Faculty</label>

                        <div class="col-sm-9">
                            <select class="form-control" name="faculty">
                                <option <?= $result['faculty'] == 'วิศวกรรมศาสตร์' ? 'selected' : '' ?>
                                    value="วิศวกรรมศาสตร์">วิศวกรรมศาสตร์
                                </option>
                                <option
                                    value="วิทยาศาสตร์" <?= $result['faculty'] == 'วิทยาศาสตร์' ? 'selected' : '' ?>>
                                    วิทยาศาสตร์
                                </option>
                                <option
                                    value="เทคโนโลยีสารสรเทศ" <?= $result['faculty'] == 'เทคโนโลยีสารสรเทศ' ? 'selected' : '' ?>>
                                    เทคโนโลยีสารสรเทศ
                                </option>
                                <option
                                    value="สถาปัตยกรรมศาสตร์" <?= $result['faculty'] == 'สถาปัตยกรรมศาสตร์' ? 'selected' : '' ?>>
                                    สถาปัตยกรรมศาสตร์
                                </option>
                                <option
                                    value="ครุศาสตร์อุตสาหกรรม" <?= $result['faculty'] == 'ครุศาสตร์อุตสาหกรรม' ? 'selected' : '' ?>>
                                    ครุศาสตร์อุตสาหกรรม
                                </option>
                                <option
                                    value="เทคโนโลยีการเกษตร" <?= $result['faculty'] == 'เทคโนโลยีการเกษตร' ? 'selected' : '' ?>>
                                    เทคโนโลยีการเกษตร
                                </option>
                                <option
                                    value="อุตสาหกรรมเกษตร" <?= $result['faculty'] == 'อุตสาหกรรมเกษตร' ? 'selected' : '' ?>>
                                    อุตสาหกรรมเกษตร
                                </option>
                                <option
                                    value="วิทยาลัยนานาชาติ" <?= $result['faculty'] == 'วิทยาลัยนานาชาติ' ? 'selected' : '' ?>>
                                    วิทยาลัยนานาชาติ
                                </option>
                                <option
                                    value="วิทยาลัยนาโนเทคโนโลยีพระจอมเกล้าลาดกระบัง" <?= $result['faculty'] == 'วิทยาลัยนาโนเทคโนโลยีพระจอมเกล้าลาดกระบัง' ? 'selected' : '' ?>>
                                    วิทยาลัยนาโนเทคโนโลยีพระจอมเกล้าลาดกระบัง
                                </option>
                                <option
                                    value="วิทยาลัยนวัตกรรมการผลิตขั้นสูง" <?= $result['faculty'] == 'วิทยาลัยนวัตกรรมการผลิตขั้นสูง' ? 'selected' : '' ?>>
                                    วิทยาลัยนวัตกรรมการผลิตขั้นสูง
                                </option>
                                <option
                                    value="การบริหารและจัดการ" <?= $result['faculty'] == 'การบริหารและจัดการ' ? 'selected' : '' ?>>
                                    การบริหารและจัดการ
                                </option>
                                <option
                                    value="วิทยาลัยอุตสาหกรรมการบินนานาชาติ" <?= $result['faculty'] == 'วิทยาลัยอุตสาหกรรมการบินนานาชาติ' ? 'selected' : '' ?>>
                                    วิทยาลัยอุตสาหกรรมการบินนานาชาติ
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="padding-bottom: 40px">
                        <label class="col-sm-3 control-label text-right">เพซ</label>

                        <div class="col-sm-9">
                            <div class="radio">
                                <label class="radio-inline">
                                    <input type="radio" name="sex"
                                           value="male" <?= $result['sex'] == 'male' ? 'checked' : '' ?>>
                                    ชาย
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex"
                                           value="female" <?= $result['sex'] == 'female' ? 'checked' : '' ?>>
                                    หญิง
                                </label>
                            </div>
                        </div>
                    </div>


                    <div align="center" class="form-group" style="padding-bottom: 40px">
                        <button type="submit" class="btn btn-info">แก้ไขบัญชี</button>


                    </div>


                </form>
            </div>
        </div>

    </div>
</div>
