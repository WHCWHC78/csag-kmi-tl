<script type="text/javascript">
    $(document).ready(function(){
        $('#mainSlide').carousel({
            interval: 4000
        });
        Cufon.replace('.qfont');
    });
</script>
<h1 class="qfont">What's CSAG?</h1>
<div id="mainSlide" class="carousel slide span5">
    <ol class="carousel-indicators">
        <li data-target="#mainSlide" data-slide-to="0" class="active"></li>
        <li data-target="#mainSlide" data-slide-to="1"></li>
        <li data-target="#mainSlide" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active" style="min-height: 300px;">
            <img src="<?php echo base_url("resources/img/m_freedom.jpg"); ?>" />
            <h1 class="qfont">Freedom</h1>
            <p><?php echo lang("home.freedom.description"); ?></p>
            <a class="btn btn-small" data-toggle="modal" href="#m_freedom" >More</a>
        </div>
        <div class="item" style="min-height: 300px;">
            <img src="<?php echo base_url("resources/img/m_freedom.jpg"); ?>" />
            <h1 class="qfont">FreedomX</h1>
            <p><?php echo lang("home.freedom.description"); ?></p>
            <a class="btn btn-small" data-toggle="modal" href="#m_freedom" >More</a>
        </div>
    </div>
</div>
<div class="span6">
    TEST
</div>

<hr/>
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