<script type="text/javascript" language="javascript">
    $(document).ready(function(){
        Cufon.replace('.nfont');
    });
</script>
<div class="row">
    <div class="navbar">
        <div class="navbar-inner">
            <a class="brand" href="#">Portfolio</a>
            <ul class="nav">
                <li class="active"><a href="<?php echo site_url("portfolio/producttion"); ?>">Product/Services</a></li>
                <li><a href="<?php echo site_url("portfolio/year/2555"); ?>">2555</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="span12">
        <h1>Product/Services</h1>
        <div style="padding-top: 15px;"></div>
        <ul class="thumbnails">
            <li class="span3">
                WebServ
                <a href="http://webserv.kmitl.ac.th" target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/product_webserv.png"); ?>" alt="">
                </a>
            </li>
            <li class="span9">
                <?php echo lang("portfolio.product.webserv"); ?>
            </li>
        </ul>
        <ul class="thumbnails">
            <li class="span3">
                Webboard
                <a href="http://webboard.crsc.kmitl.ac.th" target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/product_webboard.png"); ?>" alt="">
                </a>
            </li>
            <li class="span9">
                <?php echo lang("portfolio.product.webboard"); ?>
            </li>
        </ul>
        <ul class="thumbnails">
            <li class="span3">
                KMI.TL
                <a href="http://kmi.tl" target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/product_kmi.tl.png"); ?>" alt="">
                </a>
            </li>
            <li class="span9">
                <?php echo lang("portfolio.product.kmi.tl"); ?>
            </li>
        </ul>
        <ul class="thumbnails">
            <li class="span3">
                E-Mail@KMI.TL
                <a href="http://www.hotmail.com" target="_blank" class="thumbnail">
                    <img src="<?php echo base_url("resources/img/product_email.png"); ?>" alt="">
                </a>
            </li>
            <li class="span9">
                <?php echo lang("portfolio.product.email@kmi.tl"); ?>
            </li>
        </ul>
    </div>
</div>