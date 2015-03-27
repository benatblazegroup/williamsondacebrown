<?php include('../siteadmin/runtime.php');
perch_layout('blog.header'); ?>
<section class="banner grey-banner">
  <div class="container">
    <h1>Commercial Property</h1>
    <ol class="breadcrumb pull-right">
      <li><a href="index.php">Home</a> <i class="fa fa-chevron-right"></i></li>
      <li class="active">Property Listing</li>
    </ol>
  </div>
</section>
<div class="container banner">
  <section class="post col-md-8">
  	<?php perch_blog_post(perch_get('s')); ?>
  </section>
	<section class="sidebar col-md-4">
		  <?php perch_layout('blog.sidebar'); ?>
	</section>
</div>
<?php perch_layout('global.footer'); ?>
