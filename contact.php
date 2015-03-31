<?php include('siteadmin/runtime.php');
  perch_layout('global.header', array(
    'title'=>'Contact &#124; WDB Property - Williamson Dace Brown',
    'desc'=>'Get in touch with us today!',
)); ?>
<section class="banner grey-banner">
  <div class="container">
    <h1>Contact Us</h1>
    <ol class="breadcrumb">
      <li><a href="index.php">Home</a> <i class="fa fa-chevron-right"></i></li>
      <li class="active">Contact us</li>
    </ol>
  </div>
</section>
<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 sidebar">
        <h3>Use our form:</h3>
        <?php perch_form('contactform.html'); ?>
      </div>
      <div class="col-sm-6 col-sm-offset-1">
        <h3>By another method:</h3>
        <ul class="contact-info">
          <li><a href="mailto:info@wdbproperty.com"><i class="fa fa-envelope"></i> mail@wdbproperty.com</a></li>
          <li><i class="fa fa-phone"></i> 020 8886 4407</li>
          <li><i class="fa fa-home"></i> 22 Cannon Hill, Southgate, London N14 6BY</li>
          <br>
        </ul>
        <div class="iframewrapper">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2476.9687009109216!2d-0.1230312999999609!3d51.6237825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761914693b232f%3A0x955735ebd19860c7!2sWilliamson+%26+Dace!5e0!3m2!1sen!2suk!4v1427291407198" width="100%" height="auto" frameborder="0" style="border:0"></iframe>
        </div>
      </div>
  </div>
</section>
<?php perch_layout('global.footer'); ?>
