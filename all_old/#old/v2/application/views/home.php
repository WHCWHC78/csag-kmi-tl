<script type="text/javascript">
    $(document).ready(function(){
        $('#mainSlide').carousel({
            interval: 4000
        });
        Cufon.replace('.qfont');
    });
</script>
<div id="mainSlide" class="carousel slide">
    <div class="carousel-inner">
        <!--<div class="active item hero-unit" style="min-height: 200px; text-align: center;">
            <h1 class="qfont">CSAG เปิดรับสมัครสมาชิกใหม่ และจัดอบรมเชิงปฏิบัติการ</h1>
            <p>
                ดูรายละเอียดและสมัคร
            </p>
            -----#>> <a class="btn btn-danger btn-large" href="<?php echo base_url("regis"); ?>">คลิกที่นี่ได้เลย!</a> <<#-----
        </div> -->
        <div class="active item well" style="min-height: 295px;">
            <div class="row">
                <div class="span6" style="text-align: center; padding-left: 40px; padding-top: 15px;">
                    <iframe width="450" height="253" src="http://www.youtube.com/embed/1A2S2RsINvY" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="span5 qfont" style="padding-top: 5px;">
                    <h1 style="font-size: 48px;">Join us!</h1>
                    <p>&nbsp;</p>
                    <h2 style="font-size: 48px;">CSAG Community</h2>
                    <p>&nbsp;</p>
                    <h2 style="font-size: 48px;"><a href="http://kmi.tl/csaggroup" target="_blank">kmi.tl/csaggroup</a></h2>
                </div>
            </div>
        </div>
        <div class="item well" style="min-height: 295px;">
            <div align="center">
                <h1 class="qfont">ร่วมเป็นส่วนหนึ่งการนำเสนอเว็บบอร์ดสถาบันรูปแบบใหม่</h1>
                <p>โดยส่งความคิดเห้นเข้ามาได้ที่อีเมล์ csag แอด kmi.tl (ระบุหัวข้อว่า "ความเห็นเว็บบอร์ด")</p>
                <p>เรากำลังรอท่านอยู่</p>
                <p>&nbsp;</p>
                <h1 class="qfont">^_^</h1>
                <p><br/><br/><br/></p>
                <p><a href="http://webboard.crsc.kmitl.ac.th">http://webboard.crsc.kmitl.ac.th</a></p>
            </div>
        </div>
    </div>
    <a class="carousel-control left" href="#mainSlide" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#mainSlide" data-slide="next">&rsaquo;</a>
</div>

<hr/>
<div class="row" style="margin-left:0px; margin-bottom: -10px;">
    <div class="spanW box1 first">
        <div class="borderR"><h2>Freedom</h2>
            <p>อิสระในการเลือกที่จะคิด ทำ และสร้างสรรค์สิ่งใหม่ๆ</p>
            <a class="btn btn-small" data-toggle="modal" href="#m_freedom" >More</a>
        </div>
    </div>
    <div class="spanW box1">
        <div class="borderR"><h2>Friends</h2>
            <p>คำแนะนำจากเจ้าหน้าที่ พี่ๆ เพื่อนๆ อย่างเป็นกันเอง และแลกเปลี่ยนเรียนรู้ โดยไม่ทิ้งการเรียน</p>
            <a class="btn btn-small" data-toggle="modal" href="#m_friends" >More</a>
        </div>
    </div>
    <div class="spanW box1">
        <div class="borderR"><h2>Features</h2>
            <p>ทรัพยากรที่พร้อมสรรพ และห้องทำงานที่มีการสนับสนุนอุปกรณ์ เกี่ยวกับระบบสารสนเทศด้านต่างๆ</p>
            <a class="btn btn-small" data-toggle="modal" href="#m_features" >More</a>
        </div>
    </div>
    <div class="spanW box1">
        <h2>Fun</h2>
        <p>ทำงานจริง เล่นจริง ประสบการณ์จริง</p>
        <a class="btn btn-small" data-toggle="modal" href="#m_fun" >More</a>
    </div>
</div>

<div class="modal hide" id="m_freedom">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Freedom - Choose your own way</h3>
    </div>
    <div class="modal-body">
        <p><img src="<?php echo base_url("resources/img/m_freedom.jpg"); ?>" /></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>
<div class="modal hide" id="m_friends">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Friends - Together we share!</h3>
    </div>
    <div class="modal-body">
        <p><img src="<?php echo base_url("resources/img/m_friends.png"); ?>" /></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>
<div class="modal hide" id="m_features">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Features - With our resources your imagine can be real</h3>
    </div>
    <div class="modal-body">
        <p>Server - ตัวอย่างทรัพยากร เพื่อใช้ในการสร้างสรรค์และพัฒนาบริการทางด้านสารสนเทศ</p>
        <p><img src="<?php echo base_url("resources/img/m_features.png"); ?>" width="250" /></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>
<div class="modal hide" id="m_fun">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Fun - Work hard play harder</h3>
    </div>
    <div class="modal-body">
        <p><img src="<?php echo base_url("resources/img/m_fun.jpg"); ?>" /></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
    </div>
</div>

<hr/>
<div class="row">
    <div class="span12">
        <h1>Our products</h1>
        <div style="padding-top: 15px;"></div>
        <ul class="thumbnails">
            <li class="span3">
                WebServ
                <a href="http://webserv.kmitl.ac.th" target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/product_webserv.png"); ?>" alt="">
                </a>
            </li>
            <li class="span3">
                Webboard
                <a href="http://webboard.crsc.kmitl.ac.th" target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/product_webboard.png"); ?>" alt="">
                </a>
            </li>
            <li class="span3">
                KMI.TL
                <a href="http://kmi.tl" target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/product_kmi.tl.png"); ?>" alt="">
                </a>
            </li>
            <li class="span3">
                E-Mail@KMI.TL
                <a href="http://www.hotmail.com" target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/product_email.png"); ?>" alt="">
                </a>
            </li>
        </ul>
    </div>
</div>