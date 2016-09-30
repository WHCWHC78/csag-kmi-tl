<section id="main-slider" class="no-margin">
    <div class="carousel slide wet-asphalt">

        <div class="carousel-inner">
            <div class="item active" style="background-image: url(images/slider/bg4.jpg)">
                <?
                if (!isset($_SESSION['member'])) {
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="carousel-content centered">
                                    <div class="well well-tran ">
                                        <h4 style="margin-bottom: 20px">Register</h4>

                                        <form action="process/register.php" method="post">

                                            <div class="form-group">
                                                <div class="row">
                                                    <div style="margin-bottom: 0px" class="col-md-6">
                                                        <input name="firstname" type="text" class="form-control"
                                                               placeholder="Firstname (ชื่อจริง)">
                                                    </div>
                                                    <div style="margin-bottom: 0px" class="col-md-6">
                                                        <input name="lastname" type="text" class="form-control"
                                                               placeholder="Lastname (นามสกุล)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div style="margin-bottom: 0px" class="col-md-6">
                                                        <input name="nickname" type="text" class="form-control"
                                                               placeholder="Nickname (ชื่อเล่น)">
                                                    </div>

                                                    <div style="margin-bottom: 0px" class="col-md-6">
                                                        <input name="tel" type="text" class="form-control"
                                                               placeholder="Tel. (เบอร์โทรศัพท์)">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control"
                                                       placeholder="E-mail (อีเมล)">
                                            </div>

                                            <div class="form-group">
                                                <input name="password" type="password" class="form-control"
                                                       placeholder="Password (รหัสผ่าน)">
                                            </div>

                                            <div class="form-group">
                                                <input name="repassword" type="password" class="form-control"
                                                       placeholder="Re-Password (ยืนยันรหัสผ่าน)">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div style="margin-bottom: 0px" class="col-md-6">
                                                        <input name="faculty" type="text" class="form-control"
                                                               placeholder="Faculty (คณะ)">
                                                    </div>


                                                    <div style="margin-bottom: 0px" class="col-md-6">
                                                        <input name="department" type="text" class="form-control"
                                                               placeholder="Department (สาขา)">
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-warning btn-block">Register
                                                </button>


                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? } ?>
            </div>
            <!--/.item-->

        </div>
        <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->

</section><!--/#main-slider-->

<section id="services" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-facebook icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Freedom</h3>

                        <p>อิสระในการเรียนรู้</p>
                    </div>
                </div>
            </div>
            <!--/.col-md-4-->
            <div class="col-md-3 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-facebook icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Friend</h3>

                        <p>เพื่อนและสังคมแห่งการแบ่งปัน</p>
                    </div>
                </div>
            </div>
            <!--/.col-md-4-->
            <div class="col-md-3 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-facebook icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Feature</h3>

                        <p>ทรัพยากรเพื่อการเรียนรู้</p>
                    </div>
                </div>
            </div>
            <!--/.col-md-4-->
            <div class="col-md-3 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-facebook icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Fun</h3>

                        <p>สนุก และ เรียนรู้ไปด้วยกัน</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#services-->

<section id="recent-works">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>Our Product</h3>


                <p class="gap"></p>
            </div>
            <div class="col-md-12">
                <div id="scroller" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/webserv.png" alt="">
                                            <h5>
                                                WebServ 2.0
                                            </h5>

                                            <div class="overlay">
                                                <a class="preview btn btn-danger"
                                                   title="WebServ.KMITL เป็นบริการฟรีพื้นที่ให้บริการเว็บไซต์ (Free hosting) โดยรองรับการประมวลผลโดยใช้ภาษา PHP และรองรับฐานข้อมูล MySQL5 ซึ่งเปิดบริการเฉพาะนักศึกษา, อาจารย์, บุคลากรภายในสถาบันเท่านั้น ทั้งนี้บริการ WebServ.KMITL ได้เปิดให้บริการตั้งแต่เดือนกันยายน พ.ศ. 2545 และมีสถิติการใช้งานอย่างต่อเนื่อง."
                                                   href="images/webserv.png" rel="prettyPhoto"><i
                                                        class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/webboard.png" alt="">
                                            <h5>
                                                Web Board
                                            </h5>

                                            <div class="overlay">
                                                <a class="preview btn btn-danger"
                                                   title="KMITL Webboard เป็นเว็บบอร์ดกลางของสถาบันสำหรับประกาศข่าวสาร เป็นแหล่งพบปะ พูดคุย รวมถึงการตั้งกระทู้ถาม หรือสอบถามข้อมูลในหัวข้อต่างๆ ระหว่างนักศึกษา, อาจารย์, บุคลากรภายในสถาบัน"
                                                   href="images/webboard.png" rel="prettyPhoto"><i
                                                        class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/kmitl.png" alt="">
                                            <h5>
                                                KMI.TL
                                            </h5>

                                            <div class="overlay">
                                                <a class="preview btn btn-danger"
                                                   title="KMI.TL เป็นบริการย่อ URL ให้สั้นลงภายใต้ kmi.tl/... ซึ่งเปิดให้ใช้บริการได้ทั่วไป แต่ห้ามใช้เพื่อก่อให้เกิดหรือมีความผิดต่อกฎหมายเด็ดขาด"
                                                   href="images/kmitl.png" rel="prettyPhoto"><i
                                                        class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="portfolio-item">
                                        <div class="item-inner">
                                            <img class="img-responsive" src="images/email.png" alt="">
                                            <h5>
                                                E-Mail@KMITL
                                            </h5>

                                            <div class="overlay">
                                                <a class="preview btn btn-danger"
                                                   title="E-Mail@KMITL เป็นบริการอีเมล์ภายใต้โดเมน @kmi.tl ซึ่งระบบการจัดการอีเมล์จะอยู่ที่เซิร์ฟเวอร์ของ Microsoft ภายใต้โครงการ Live@EDU ซึ่งสามารถใช้อีเมล์นี้ดาวน์โหลดโปรแกรม ที่ถูกต้องตามลิขสิทธิ์ จาก Microsoft เพื่อใช้ในทางด้านการศึกษาได้"
                                                   href="images/email.png" rel="prettyPhoto"><i
                                                        class="icon-eye-open"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/.row-->
                        </div>

                        <!--/.item-->
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
</section><!--/#recent-works-->

<!--<section id="testimonial" class="alizarin">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="center">-->
<!--                    <h2>What our clients say</h2>-->
<!---->
<!--                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>-->
<!--                </div>-->
<!--                <div class="gap"></div>-->
<!--                <div class="row">-->
<!--                    <div class="col-md-6">-->
<!--                        <blockquote>-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>-->
<!--                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>-->
<!--                        </blockquote>-->
<!--                        <blockquote>-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>-->
<!--                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>-->
<!--                        </blockquote>-->
<!--                    </div>-->
<!--                    <div class="col-md-6">-->
<!--                        <blockquote>-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>-->
<!--                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>-->
<!--                        </blockquote>-->
<!--                        <blockquote>-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>-->
<!--                            <small>Someone famous in <cite title="Source Title">Source Title</cite></small>-->
<!--                        </blockquote>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section><!--/#testimonial-->-->


