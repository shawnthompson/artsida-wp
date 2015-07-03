<?php get_header(); ?>
		<header class="cell purple">
			<div class="col-sm-2 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>
			<div class="col-sm-7 purple">
				<h1><small>Search Results for</small> <?php echo wp_specialchars($s); ?></h1>
			</div>
			<div class="clearfix"></div>
		</header>
		<div class="col-sm-12 text">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>


<div class="row mrgn-bttm-lg">
  <div class="col-sm-4">
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
  </div>
  <div class="col-sm-8">
    <h2 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="name"><?php _e('[:en]by[:][:fr]par[:]'); ?>: <?php echo get_post_meta($post -> ID, 'firstname', true );?> <?php echo get_post_meta($post -> ID, 'lastname', true );?></p>
    <?php the_excerpt(); ?>
  </div>
</div>
<div class="clearfix"></div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

		</div>
<?php get_footer(); ?>
