<?php include('../siteadmin/runtime.php');
  perch_layout('blog.header', array(
    'title'=>'Property Listing &#124; WDB Property - Williamson Dace Brown',
    'desc'=>'We provide a wide range of holistic, reliable and expert advice.',
)); ?>
<section class="banner grey-banner">
  <div class="container">
    <h1>Property listings</h1>
    <ol class="breadcrumb">
      <li><a href="../index.php">Home</a> <i class="fa fa-chevron-right"></i></li>
      <li class="active">Property listing</li>
    </ol>
  </div>
</section>
<section class="banner property-list">
  <div class="container">
    <div class="row">
    <div class="col-sm-8">
      <h1 class="blog-title">Most recent properties</h1>
      <br>
    <?php
      perch_blog_custom(array(
        'sort'=>'postDateTime',
        'sort-order'=>'DESC',
        'template'=>'archive_post_in_list.html',
        'count'=>10
    )); ?>
    </div>
  <div class="col-sm-3 col-sm-offset-1 sidebar">
    <?php perch_layout('blog.sidebar'); ?>
  </div>
</div>
</div>
</section>
<?php perch_layout('global.footer'); ?>
