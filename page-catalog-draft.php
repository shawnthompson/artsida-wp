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
			$post_date = strtotime( the_date( 'Y-m-d', '', '', false ) );
			$cutoff_date = strtotime( '2014-12-31' );
			$args = array(
				'cat' => 2,
				'orderby'  => 'meta_value',
				'meta_key' => 'firstname',
				'order' => 'ASC',
				'paged' => $paged,
				'posts_per_page' => 12
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
					if ( have_posts() && $post_date > $cutoff_date ) :
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
	            <?php else : ?>
	            	<p><?php _e('[:en]Once the Artsida 6 collection has been selected, photos of the selected artwork and artist biographies will be available here. A downloadable and printable colour catalog will also be available.[:][:fr]Une fois la sélection pour Artsida 6 effectuée, cette section présentera une photo des œuvres choisies et la biographie des artistes. Un catalogue couleur pourra aussi être téléchargé et imprimé.[:]'); ?></p>
				<?php endif; ?>
			<div class="clearfix"></div>
			<p class="mrgn-tp-lg text-center well well-sm"><a href="<?php bloginfo('template_url'); ?>/img/marketValue.pdf"><?php _e('[:en]Click here to consult a PDF with the estimated market value of all the pieces in the Artsida 6 collection.[:][:fr]Cliquez ici pour consulter le document PDF comprenant la juste valeur au marché pour toutes les pièces de la collection Artsida 6.[:]'); ?></a></p>
			<?php bittersweet_pagination() ?>
			</div>
		</div>
<?php wp_reset_query(); get_footer(); ?>
