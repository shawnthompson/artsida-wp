<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<div class="cell">
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

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>
		</div>


		<?php endwhile; endif; ?>


<?php get_footer(); ?>
