<?php
  perch_blog_categories(array(
      'template' => 'sidebar_category_link.html',
  ));
?>
<?php perch_blog_tags(); ?>
<h3>Contact Us</h3>
<?php perch_form('contactform.html'); ?>
