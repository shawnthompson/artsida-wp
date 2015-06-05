<?php get_header(); the_post(); ?>
		<div class="cell purple">
			<div class="col-sm-2 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>
			<div class="col-sm-7 purple"><h1><?php the_title(); ?></h1></div>
		</div>
		<div class="col-sm-12 text">
			<div class="col-sm-4 hidden-xs">
			<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				    add_filter( 'post_thumbnail_html', 'remove_img_attr' ); // removes the size attributes
					the_post_thumbnail('full', array('class' => 'img-responsive' ));
				}
			?>
			</div>
			<div class="col-sm-6">

	<?php the_content(); ?>

			</div>
		</div>
<?php get_footer(); ?>
