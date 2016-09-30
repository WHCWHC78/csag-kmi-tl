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
                <li><a href="<?php echo site_url("portfolio/production"); ?>">Product/Services</a></li>
                <li class="active"><a href="<?php echo site_url("portfolio/year/2555"); ?>">2555</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="span12">
        <ul class="nav nav-tabs" id="menuTab">
            <li class="active"><a href="#webserv3" data-toggle="tab"><?php echo lang("portfolio.2555.webserv.update.1.title"); ?></a></li>
            <li><a href="#miniadmin" data-toggle="tab"><?php echo lang("portfolio.2555.miniadmin.2.title"); ?></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="webserv3">
                <h1 class="nfont"><?php echo lang("portfolio.2555.webserv.update.1.title"); ?></h1>
                <div class="well">
                    <?php echo lang("portfolio.2555.webserv.update.1.description"); ?>
                    <p>
                    <ul class="thumbnails">
                        <li class="span3">
                            WebServ
                            <a href="http://webserv.kmitl.ac.th" target="_blank" class="thumbnail">
                                <img src="<?php echo base_url("resources/img/product_webserv.png"); ?>" alt="">
                            </a>
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="tab-pane" id="miniadmin">
                <h1 class="nfont"><?php echo lang("portfolio.2555.miniadmin.2.title"); ?></h1>
                <div class="well">
                    <?php echo lang("portfolio.2555.miniadmin.2.description"); ?>
                </div>
            </div>

        </div>
    </div>
</div>