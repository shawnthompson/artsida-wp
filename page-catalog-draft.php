<?php
	/*
		Template Name: Catalog DRAFTS Page
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
		<?php
			$args = array(
				'cat' => 3,
				'paged' => $paged,
				'post_status' => 'draft',
				'posts_per_page' => 10
			);
			$counter = 0;
			query_posts( $args ); 
		?>
		<?php if (have_posts()) { ?>
		<div class="pull-right"><?php get_search_form(); ?></div>
		<?php } ?>
			<div class="hidden-xs col-sm-4 mrgn-bttm-lg">
			<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				    add_filter( 'post_thumbnail_html', 'remove_img_attr' ); // removes the size attributes
					the_post_thumbnail('full', array('class' => 'img-responsive' ));
				}
			?>
			</div>
			<div class="col-sm-8">
			<?php 	
					if ( have_posts() ) :
					while ( have_posts() ) : the_post();
					$counter++;
					if ($counter == 4){ $counter = 1; }
					?>
		  			<section class="col-sm-6 col-md-4 artwork">
				<?php
	    	 		if ( has_post_thumbnail() ) {
				    add_filter( 'post_thumbnail_html', 'remove_img_attr' ); // removes the size attributes
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
					echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" class="fancybox">';
						the_post_thumbnail('full', array('class' => 'img-responsive' ));
						echo '
						</a>';
		            }
				?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php _e('[:en]by[:][:fr]par[:]'); ?>: <?php echo get_post_meta($post -> ID, 'firstname', true );?> <?php echo get_post_meta($post -> ID, 'lastname', true );?></p>
			        </section>
                <?php
	                if ($counter==2) { echo '<div class="visible-sm clearfix"></div>';}
	                if ($counter==3) { echo '<div class="visible-md visible-lg clearfix"></div>';} ?>
 				<?php endwhile; ?>
	            <?php else : ?>
	            	<p><?php _e('[:en]There are no DRAFT artwork at this time.[:][:fr]Il n\'y a pas d\'œuvre ÉBAUCHE en ce moment.[:]'); ?></p>
				<?php endif; ?>
			<div class="clearfix"></div>
			<?php bittersweet_pagination() ?>
			</div>
		</div>
<?php wp_reset_query(); get_footer(); ?>
