<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php perch_blog_post_field(perch_get('s'), 'postTitle'); ?></title>
  <meta name="description" content="<?php perch_content('meta description');?>">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/ico/apple-touch-icon.png">
  <link rel="icon" href="../assets/favicon.ico" />
  <?php perch_get_css(); ?>
</head>
<body>
    <!-- <div class="preheader"></div> -->
  <!-- <section class="title container">
    <nav class="main-nav">
      <?php perch_pages_navigation(array(
          'levels'=>1
        ));
      ?>
    </nav>
  </section> -->
  <section class="preheader">
    <div class="container">
      <div class="phone">
        <i class="fa fa-phone"></i> 020 8886 4407
      </div>
    </div>
  </section>
  <header>
    <nav class="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="/williamsondacebrown/assets/img/wdb-logo.svg"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="residential.php">Residential</a></li>
            <li><a href="commercial.php">Commercial services</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </header>
