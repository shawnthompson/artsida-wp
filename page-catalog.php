<?php
	/*
		Template Name: Catalog Page
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
			<?php
				query_posts( 'cat=3' ); while (have_posts()) { the_post(); ?>
		  			<section class="col-sm-6 col-md-4 artwork">
			<?php
	    	 		if ( has_post_thumbnail() ) {
				    add_filter( 'post_thumbnail_html', 'remove_img_attr' ); // removes the size attributes
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
					echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" class="fancybox">';
						the_post_thumbnail('thumbnail', array('class' => 'img-responsive' ));
						echo '
						</a>';
			?>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p>by: <?php echo get_post_meta($post -> ID, 'firstname', true );?> <?php echo get_post_meta($post -> ID, 'lastname', true );?></p>
			        </section>
	                <?php
		            }
	            }
	        ?>
			</div>
		</div>
<?php wp_reset_query(); get_footer(); ?>
