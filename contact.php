<?php include('site_admin/runtime.php');
  perch_layout('global.header', array(
    'title'=>'Contact &#124; WDB Property - Williamson Dace Brown',
    'desc'=>'Get in touch with us today!',
)); ?>
<section class="banner grey-banner">
  <div class="container">
    <h1>Contact Us</h1>
    <ol class="breadcrumb pull-right">
      <li><a href="index.php">Home</a> <i class="fa fa-chevron-right"></i></li>
      <li class="active">Contact us</li>
    </ol>
  </div>
</section>
<section class="banner">
  <div class="container">
    <?php perch_form('contactform.html'); ?>
  </div>
</section>
<?php perch_layout('global.footer'); ?>
