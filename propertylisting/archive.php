<?php include('../siteadmin/runtime.php');
  perch_layout('blog.header', array(
    'title'=>'Property Listing &#124; WDB Property - Williamson Dace Brown',
    'desc'=>'We provide a wide range of holistic, reliable and expert advice.',
)); ?>
<section class="banner grey-banner">
	<div class="container">
		<h1>Property Listings</h1>
    <ol class="breadcrumb">
      <li><a href="../index.php">Home</a> <i class="fa fa-chevron-right"></i></li>
      <li class="active">Property Listing</li>
    </ol>
	</div>
</section>
<section class="banner white-banner">
	<div class="container">
		<div class="row">
		    <div class="col-sm-8">

		    <?php
		        // defaults for all modes
		        $posts_per_page = 10;
		        $template 		= 'archive_post_in_list.html';
		        $sort_order		= 'DESC';
		        $sort_by		= 'postDateTime';

		        // Have we displayed any posts yet?
		        $posts_displayed = false;

		        /*
		        	perch_get() is used to get options from the URL.

					e.g. for the URL
						/blog/archive.php?cat=news

					perch_get('cat') would return 'news' because cat=news.


					The code below looks for different options in the URL, and then displays different types of listings based on it.
		        */


		        /* --------------------------- POSTS BY CATEGORY --------------------------- */
		        if (perch_get('cat')) {
		            echo '<h1>All '.perch_blog_category(perch_get('cat'), true).' Properties</h1>';

		            perch_blog_custom(array(
							'category'   => perch_get('cat'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }

						?>

						<?php

		        /* --------------------------- POSTS BY TAG --------------------------- */
		        if (perch_get('tag')) {
		            echo '<h1>All Properties Tagged  '.perch_blog_tag(perch_get('tag'), true).'</h1>';

		            perch_blog_custom(array(
							'tag'   	 => perch_get('tag'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }



		        /* --------------------------- POSTS BY DATE RANGE --------------------------- */
		        if (perch_get('year')) {

					$year              = intval(perch_get('year'));
					$date_from         = $year.'-01-01 00:00:00';
					$date_to           = $year.'-12-31 23:59:59';
					$title_date_format = '%Y';


		            // Month and Year?
		            if (perch_get('month')) {
						$month             = intval(perch_get('month'));
						$date_from         = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-01 00:00:00';
						$date_to           = $year.'-'.str_pad($month, 2, '0', STR_PAD_LEFT).'-31 23:59:59';
						$title_date_format = '%B, %Y';
		            }

		            echo '<h1>All Properties from  '.strftime($title_date_format, strtotime($date_from)).'</h1>';

		            perch_blog_custom(array(
							'filter'     => 'postDateTime',
							'match'      => 'eqbetween',
							'value'      => $date_from.','.$date_to,
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }



		        /* --------------------------- POSTS BY AUTHOR --------------------------- */
		        if (perch_get('author')) {

		        	echo '<h1>Properties by '.perch_blog_author(perch_get('author'), array(
		        											'template' => 'author_name.html',
		        											), true).'</h1>';


		        	perch_blog_custom(array(
							'author'   	 => perch_get('author'),
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		            $posts_displayed = true;
		        }


		      	/* --------------------------- DEFAULT: ALL POSTS --------------------------- */

		      	if ($posts_displayed == false) {

		      		// No other options have been used; no posts have been displayed yet.
		      		// So display all posts.

		      		echo '<h1>Archive</h1>';

		      		perch_blog_custom(array(
							'template'   => $template,
							'count'      => $posts_per_page,
							'sort'       => $sort_by,
							'sort-order' => $sort_order,
		                    ));

		      	}

		    ?>
	    </div>
			<div class="col-sm-3 col-sm-offset-1 sidebar">
		    <?php perch_layout('blog.sidebar'); ?>
		  </div>
		</div>
	</div>
</section>
	<?php perch_layout('global.footer');?>
