<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/ico/apple-touch-icon.png">
  <link rel="icon" href="/assets/ico/favicon.ico" />
  <title><?php perch_layout_var('title'); ?></title>
  <meta name="description" content="<?php perch_layout_var('desc'); ?>">
  <?php perch_get_css(); ?>
  <?php perch_get_javascript(); ?>
  <!--[if lt IE 10]>
  <style type="text/css">
    #animation {
      background-image: url("http://wdbproperty.co.uk/assets/img/wdb-home-gif.png");
      background-size: 100%;
      height: 279px;
      background-repeat: no-repeat;
    }
  </style>
  <![endif]-->
</head>
<body>
<section class="preheader">
  <div class="container">
    <div class="phone">
      Established since 1962 &nbsp; <i class="fa fa-phone"></i> 020 8886 4407
    </div>
  </div>
</section>
<header>
  <nav class="navbar">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="../index.php"><img src="/assets/img/wdb-logo.png" alt="WDB Property: Williamson, Dace and Brown"></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span>Toggle navigation&nbsp;<i class="fa fa-bars"></i></span>
        </button>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="../index.php">Home</a></li>
          <li><a href="../about.php">About</a></li>
          <li><a href="../services.php">Services</a></li>
          <li class="dropdown">
            <a href="../propertylisting/index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Property Listings<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../propertylisting/archive.php?cat=commercial">Commercial Listings</a></li>
                <li><a href="../propertylisting/archive.php?cat=residential">Residential Listings</a></li>
              </ul>
          </li>
          <li><a href="../contact.php">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
</header>
