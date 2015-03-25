<?php include('site_admin/runtime.php');
  perch_layout('global.header', array(
    'title'=>'Property Listing &#124; WDB Property - Williamson Dace Brown',
    'desc'=>'We provide a wide range of holistic, reliable and expert advice.',
)); ?>

<section class="banner grey-banner">
  <div class="container">
    <h1>Commercial Property</h1>
    <ol class="breadcrumb pull-right">
      <li><a href="index.php">Home</a> <i class="fa fa-chevron-right"></i></li>
      <li class="active">Property Listing</li>
    </ol>
  </div>
</section>
<section class="banner property-list">
  <div class="container">
    <div class="row">
    <div class="col-sm-8">
    <?php
      perch_blog_custom(array(
        'sort'=>'postDateTime',
        'sort-order'=>'DESC',
        'template'=>'home_post_in_list.html',
        'count'=>10
    )); ?>
    </div>
  <div class="col-sm-3 col-sm-offset-1 sidebar">
    <?php perch_layout('blog.sidebar'); ?>
  </div>
</div>
</section>
<?php perch_layout('global.footer'); ?>
