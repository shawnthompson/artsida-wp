<?php
	/*
		Template Name: Catalog Page
	*/
?>
<?php get_header(); the_post(); ?>
		<header class="cell purple">
			<div class="col-sm-2 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>
			<div class="col-sm-7 purple">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="clearfix"></div>
		</header>
		<div class="col-sm-12 text">
			<div class="col-sm-4 mrgn-bttm-lg">
			<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				    add_filter( 'post_thumbnail_html', 'remove_img_attr' ); // removes the size attributes
					the_post_thumbnail('full', array('class' => 'img-responsive' ));
				}
			?>
			</div>
			<div class="col-sm-8">
			<?php
				query_posts( 'cat=art' ); while (have_posts()) { the_post(); ?>
		  			<div class="col-md-3">
		  			<ul class="list-inline">
		                <li>
			<?php
	    	 		if ( has_post_thumbnail() ) {
				    add_filter( 'post_thumbnail_html', 'remove_img_attr' ); // removes the size attributes
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
					echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" class="fancybox">';
						the_post_thumbnail('thumbnail', array('class' => 'img-responsive thumbnail' ));
						echo '
						</a>';
			?>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p>by: <?php echo get_post_meta($post -> ID, 'artist_firstname', true );?> <?php echo get_post_meta($post -> ID, 'artist_lastname', true );?></p>
						</li>
		  			</ul>
			        </div>
	                <?php
		            }
	            }
	        ?>
			</div>
		</div>
<?php get_footer(); ?>
