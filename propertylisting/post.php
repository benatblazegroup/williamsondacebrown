<?php include('../siteadmin/runtime.php');
perch_layout('blog.header'); ?>
<section class="banner grey-banner">
  <div class="container">
    <h1>Property for sale and Lettings</h1>
    <ol class="breadcrumb">
      <li><a href="../index.php">Home</a> <i class="fa fa-chevron-right"></i></li>
      <li class="active">Property for sale and Lettings</li>
    </ol>
  </div>
</section>
<div class="container banner">
  <div class="row">
  <section class="post col-sm-8">
  	<?php perch_blog_post(perch_get('s')); ?>
  </section>
	<section class="sidebar col-sm-3 col-sm-offset-1">
		  <?php perch_layout('blog.sidebar'); ?>
	</section>
</div>
</div>
<script>
  $('.nav-tabs li a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
      CMSMap.UI.refresh();
  });
</script>
<?php perch_layout('global.footer'); ?>
