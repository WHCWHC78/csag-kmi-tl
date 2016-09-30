<html>
  <head>
    <title>CSAG - Computer System Admistrator Group</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url("assets/stylesheets/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/stylesheets/Flat-UI-master/dist/css/flat-ui.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/stylesheets/font-awesome.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/stylesheets/header.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/stylesheets/organization-style.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/stylesheets/animations.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/stylesheets/pages/home.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/stylesheets/pages/experiences.css") ?>">
  </head>
  <body>
		<nav class="navbar navbar-static-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?= site_url() ?>">CSAG@KMITL</a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="<?= isset($home_active) && $home_active ? 'active' : '' ?>"><a href="<?= site_url('home') ?>">Home</a></li>
              <li class="dropdown <?= isset($events_active) && $events_active ? 'active' : '' ?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Events
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?= site_url('events/cmat') ?>">Mini Admin Training</a></li>
                </ul>
              </li>
              <li class="dropdown <?= isset($about_active) && $about_active? 'active': ''?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  About Us
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?= site_url('products') ?>">Products</a></li>
                  <li><a href="<?= site_url('experiences') ?>">Experiences</a></li>
                  <li><a href="<?= site_url('about') ?>">Organization</a></li>
                </ul>
              </li>
            </ul>
            <?php if (!$logged_in): ?>
              <?= form_open('sessions/create', array('class' => 'navbar-form navbar-right')); ?>
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
              </form>
            <?php else: ?>
              <ul class="nav navbar-nav navbar-right">
                <li><p class="navbar-text navbar-right">Welcome <?= $this->session->userdata('fullname') ?></p></li>
                <li class="divider-vertical"></li>
                <li><a href="<?= site_url('sessions/destroy') ?>">Log out</a></li>
              </ul>
            <?php endif; ?>
          </div>
        </div>
      </nav>
