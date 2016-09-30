<script type="text/javascript">
    $(document).ready(function(){
        $('#mainSlide').carousel({
            interval: 4000
        });
        Cufon.replace('.qfont');
    });
</script>
<!-- <div id="mainSlide" class="carousel slide">
    <div class="carousel-inner">
        <div class="active item hero-unit" style="min-height: 200px; text-align: center;">
            <h1 class="qfont"><?php echo lang("home.slide.recruit.title"); ?></h1>
            <p>
                <?php echo lang("home.slide.recruit.description"); ?>
            </p>
            <a class="btn btn-danger btn-large" href="<?php echo site_url("event"); ?>"><?php echo lang("home.slide.recruit.clickhere"); ?></a>
        </div>
        <div class="item well" style="min-height: 295px;">
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
        <!--
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
        -->
		
<!--    </div>
    <a class="carousel-control left" href="#mainSlide" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#mainSlide" data-slide="next">&rsaquo;</a>
</div> 
-->



<div class="span10 offset1 well" style="margin-left:8.3%;">
	 <center> <iframe width="675" height="380" src="http://www.youtube.com/embed/UjG4YPct1Wc" frameborder="0" allowfullscreen></iframe></center>
</div>


</hr>
<div class="row" style="margin-left:0px; margin-bottom: -10px;">
    <div class="spanW box1 first">
        <div class="borderR"><h2>Freedom</h2>
            <p><?php echo lang("home.freedom.description"); ?></p>
            <a class="btn btn-small" data-toggle="modal" href="#m_freedom" >More</a>
        </div>
    </div>
    <div class="spanW box1">
        <div class="borderR"><h2>Friends</h2>
            <p><?php echo lang("home.friends.description"); ?></p>
            <a class="btn btn-small" data-toggle="modal" href="#m_friends" >More</a>
        </div>
    </div>
    <div class="spanW box1">
        <div class="borderR"><h2>Features</h2>
            <p><?php echo lang("home.features.description"); ?></p>
            <a class="btn btn-small" data-toggle="modal" href="#m_features" >More</a>
        </div>
    </div>
    <div class="spanW box1">
        <h2>Fun</h2>
        <p><?php echo lang("home.fun.description"); ?></p>
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
            <li class="span3" >
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
<hr/>
<div class="row">
    <div class="span12">
        <h1>Experience</h1>
        <div style="padding-top: 15px;"></div>
        <ul class="thumbnails">
            <li class="span4" style="text-align:center; float:left;" >
                <a href="#eatDModal" data-toggle="modal" target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/eatd_crop.jpg"); ?>" alt="" >
                </a>
				Eat-D
            </li>
            <li class="span4" style="text-align:center; float:left;">
                <a href="#photatoModal" data-toggle="modal" target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/photato.jpg"); ?>" alt="" style="height:180px;">
                </a>
				Photato
            </li>

            <li class="span4" style="text-align:center;">
                <a href="#careerModal" data-toggle="modal" target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/career.png"); ?>" alt="" style="height:180px;">
                </a>
				CE Smart Career 2013
            </li>
        </ul>
    </div>
	<div class="span12">
        <div style="padding-top: 15px;"></div>
        <ul class="thumbnails">
            <li class="span4" style="text-align:center;">
                <a href="#smartCampModal" data-toggle="modal"target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/smartcamp.png"); ?>" alt="" style="height:180px;">
                </a>
				CE Smart Camp #7
            </li>
			<li class="span4" style="text-align:center;">
                <a href="#cdxModal" data-toggle="modal"target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/cdx.jpeg"); ?>" alt="" style="height:180px;">
                </a>
				CDX@NCSC2014
            </li>

            <li class="span4" style="text-align:center;">
                <a href="#tnscModal" data-toggle="modal" target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/tnsc.jpeg"); ?>" alt="" style="height:180px;">
                </a>
				TNSC#8
            </li>
        </ul>
    </div>


    <div id="eatDModal" class="modal hide fade">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Eat-D</h3>
      </div>
      <div class="modal-body">

        <img src="<?php echo base_url("resources/img/eatd.jpg"); ?>" alt="" class="thumbnail" style="height:500px; margin: 0 auto;"><br>
        <p>Android App ที่สมาชิกชั้นปีที่ 3 ของ CSAG พัฒนาขึ้นในการแข่งขัน Health App Challenge และได้รับรางวัลรองชนะเลิศอันดับ 2<br>
            <a href="http://www.hac.in.th" target="_blank">www.hac.in.th</a>
        </p>
      </div>
    </div>


    <div id="photatoModal" class="modal hide fade">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Photato</h3>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url("resources/img/photato.jpg"); ?>" alt="" class="thumbnail" style="height:300px; margin: 0 auto;"><br>
        <p>Application ที่   บีม สมาชิก CSAG พัฒนาในโครงการฝึกงาน Microsoft Inovation Center@CRC Tower Microsoft Thailand.<br><br>
            <a href="http://photato.azurewebsites.net/" target="_blank">photato.azurewebsites.net/</a><br>
            Photato is available now on windowsphone store.
        </p>
      </div>
    </div>

	
    <div id="careerModal" class="modal hide fade">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>CE Smart Career 2013</h3>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url("resources/img/career.png"); ?>" alt="" style=""><br><br>
        <p>Website ของโครงการ CE Smart Career 2013 โดย ไว สมาชิก CSAG ชั้นปีที่ 4
            <br>
            <a href="www.cesmartcamp.com/career" target="_blank">www.cesmartcamp.com/career/</a>
        </p>
      </div>
    </div>


    <div id="smartCampModal" class="modal hide fade">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>CE Smart Camp #7</h3>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url("resources/img/smartcamp.png"); ?>" alt="" style=""><br><br>
        <p>Website ของโครงการ CE Smart Camp ครั้งที่ 7 โดย นัท สมาชิก CSAG ชั้นปีที่ 3
            <a href="www.cesmartcamp.com" target="_blank">www.cesmartcamp.com</a>
        </p>
      </div>
    </div>

    <div id="cdxModal" class="modal hide fade">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>CDX@NCSC2014</h3>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url("resources/img/cdx.jpeg"); ?>" alt="" style=""><br><br>
        <p>บีม และ โน่ สมาชิก CSAG ชั้นปีที่ 3 ได้รับรางวัลรองชนะเลิศอันดับ 2 จากการแข่งขัน Cyber Defense Exercise ซึ่งเป็นการแข่งขันในรูปแบบ CTF(Capture the flag) ในงานสัปดาห์วิชาการความมั่นคง</p>
      </div>
    </div>

    <div id="tnscModal" class="modal hide fade">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>TNSC#8</h3>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url("resources/img/tnsc.jpeg"); ?>" alt="" style=""><br><br>
        <p>บีม และ โน่ สมาชิก CSAG ชั้นปีที่ 3 ได้รับรางวัลชมเชย จากการแข่งขัน Thailand Network Security Contest ครั้งที่ 8</p>
      </div>
    </div>
   
</div>

