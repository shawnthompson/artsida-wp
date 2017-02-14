<?php
	/*
		Template Name: Table Page
	*/
get_header(); the_post();
?>
		<div class="cell purple">
			<div class="col-sm-2 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>
			<div class="col-sm-7 purple"><h1><?php the_title(); ?></h1></div>
		</div>
		<div class="col-sm-12 text">
			<?php the_content(); ?>
		</div>
<?php get_footer(); ?>
