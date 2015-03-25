<?php include('../perch/runtime.php');
perch_layout('blog.header'); ?>
<div class="container">
  <section class="post col-md-8">
  	<?php perch_blog_post(perch_get('s')); ?>
  	<?php perch_blog_author_for_post(perch_get('s')); ?>
  	<div class="meta">
        <div class="cats">
            <?php perch_blog_post_categories(perch_get('s')); ?>
        </div>
        <div class="tags">
            <?php perch_blog_post_tags(perch_get('s')); ?>
        </div>
      </div>
  </section>
	<section class="sidebar col-md-4">
		<nav>
		  <h2>Sectors</h2>
		  <?php perch_blog_categories(); ?>
		</nav>
	</section>
</div>
<?php perch_layout('global.footer'); ?>
