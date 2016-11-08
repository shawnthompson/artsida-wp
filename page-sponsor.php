<?php
	/*
		Template Name: Sponsor Page
	*/
?>
<?php get_header(); the_post(); ?>
		<div class="cell purple">
			<div class="col-sm-2 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>
			<div class="col-sm-7 purple">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-sm-12 text">
			<div class="hidden-xs col-sm-4 mrgn-bttm-lg">
			<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				    add_filter( 'post_thumbnail_html', 'remove_img_attr' ); // removes the size attributes
					the_post_thumbnail('full', array('class' => 'img-responsive' ));
				}
			?>
			</div>
			<div class="col-sm-8">
			<?php the_content(); ?>
			<h2><?php _e('[:en]Partner Sponsors[:][:fr]Commanditaires partenaires[:]'); ?></h2>
			<ul class="list-unstyled sponsor-list">
<?php
				query_posts( 'cat=3' . '&order=ASC'); while (have_posts()) { the_post(); ?>
			<?php
	    	 		if ( has_post_thumbnail() ) {
				    add_filter( 'post_thumbnail_html', 'remove_img_attr' ); // removes the size attributes
					echo '<li><a href="' . get_post_meta($post -> ID, 'sponsor_link', true ) . '" target="_blank">';
					the_post_thumbnail('full', array('class' => 'img-responsive' ));
					echo '</a></li>';
			?>

	                <?php
		            }
	            }
	        ?>
			</ul>
			</div>
		</div>
<?php wp_reset_query(); get_footer(); ?>
