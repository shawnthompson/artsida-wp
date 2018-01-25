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
		<?php
			$cutoff_date = '2019-09-20';
			$args = array(
				'cat' => 2,
				'orderby'  => 'meta_value',
				'meta_key' => 'firstname',
				'order' => 'ASC',
				'paged' => $paged,
				'date_query' => array( 'after' => $cutoff_date ),
				'posts_per_page' => 24
			);
			$counter = 0;
			query_posts( $args );
		?>
		<?php if (have_posts() ) { ?>
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
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail('full', array('class' => 'img-responsive' )); ?>
						</a>
					<?php endif; ?>
					<h2><?php echo get_post_meta($post -> ID, 'firstname', true );?> <?php echo get_post_meta($post -> ID, 'lastname', true );?><br />
					<small><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></small></h2>
			        </section>
                <?php
	                if ($counter==2) { echo '<div class="visible-sm clearfix"></div>';}
	                if ($counter==3) { echo '<div class="visible-md visible-lg clearfix"></div>';} ?>
		 				<?php endwhile; ?>
						<div class="clearfix"></div>
						<p class="mrgn-tp-lg text-center well well-sm"><a href="/<?php _e('[:en]en[:][:fr]fr[:]'); ?>/artwork/table/"><?php _e('[:en]Click here to consult a page with the estimated market value of all the pieces in the Artsida 7 collection.[:][:fr]Cliquez ici pour consulter la page comprenant la juste valeur au marché pour toutes les pièces de la collection Artsida 7.[:]'); ?></a></p>
						<?php bittersweet_pagination() ?>
	            <?php else : ?>
	            	<p><?php _e('[:en]Selection process in the Fall. <a href="mailto:artsida@accmontreal.org">Contact us</a> for more details.[:][:fr]Processus de sélection en automne. <a href="mailto:artsida@accmontreal.org">Contactez-nous</a> pour plus de détails.[:]'); ?></p>
				<?php endif; ?>
			</div>
		</div>
<?php wp_reset_query(); get_footer(); ?>
