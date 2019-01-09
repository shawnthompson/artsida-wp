<?php get_header(); the_post(); ?>
		<header class="cell purple">
			<div class="col-sm-2 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>
			<div class="col-sm-7 purple">
				<h1><?php echo get_post_meta($post -> ID, 'firstname', true );?> <?php echo get_post_meta($post -> ID, 'lastname', true );?><br />
				<small><?php the_title(); ?></small></h1>

			</div>
			<div class="clearfix"></div>
		</header>
		<div class="col-sm-12 text">
			<div class="col-sm-4 mrgn-bttm-lg">
			<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				    add_filter( 'post_thumbnail_html', 'remove_img_attr' ); // removes the size attributes
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
					echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '" class="fancybox">';
				the_post_thumbnail('full', array('class' => 'img-responsive' ));
				echo '
				</a>';
				}
			?>
			</div>
			<div class="col-sm-6">
				<?php the_content(); ?>
				<?php
					$width = get_post_meta($post -> ID, 'width', true );
					$height = get_post_meta($post -> ID, 'height', true );
					$year = get_post_meta($post -> ID, 'year', true );
					$medium = get_post_meta($post -> ID, 'medium', true );
					$estimated_price = get_post_meta($post -> ID, 'estimated_price', true );
					$direct_sale_price = get_post_meta($post -> ID, 'direct_sale_price', true );
				?>
				<h2><?php _e('[:en]Details[:][:fr]Détails[:]'); ?></h2>
				<dl class="dl-horizontal">
				  <dt>Dimensions:</dt>
				  <dd><?php if ( empty( $width || $height) ) : ?><?php _e('[:en]Information unavailable[:][:fr]Information non disponible[:]'); ?>
				<?php else : echo $width . '" X ' . $height . '"';?>
				<?php endif; ?></dd>
				  <dt><?php _e('[:en]Year produced[:][:fr]Année produit[:]'); ?>:</dt>
				  <dd><?php if ( empty ($year)) : ?><?php _e('[:en]Information unavailable[:][:fr]Information non disponible[:]'); ?><?php else : echo $year;?><?php endif; ?></dd>
				  <dt><?php _e('[:en]Medium[:][:fr]Médium[:]'); ?>:</dt>
				  <dd><?php if ( empty ($medium)) : ?><?php _e('[:en]Information unavailable[:][:fr]Information non disponible[:]'); ?><?php else : echo $medium;?><?php endif; ?></dd>
				<?php if( get_field('sale') == 'no' ): ?>
					<?php if ( empty ($estimated_price)) : ?>
					<?php else : ?>
						<dt><?php _e('[:en]Estimated Market Value[:][:fr]Valeur Marchande Estimée[:]'); ?>:</dt>
						<dd><?php _e('[:en]$' . number_format($estimated_price, 2, '.', ',') . ' [:][:fr]'. number_format($estimated_price, 2, '.', ' ') . ' $[:]');?></dd>
					<?php endif; ?>
				<?php endif; ?>
				<?php if( get_field('sale') == 'yes' ): ?>
					<?php if ( empty ($direct_sale_price)) : ?>
					<?php else : ?>
						<dt><?php _e('[:en]Direct Sale Price[:][:fr]Prix Vente Directe[:]'); ?>:</dt>
						<dd><?php _e('[:en]$' . number_format($direct_sale_price, 2, '.', ',') . ' [:][:fr]'. number_format($direct_sale_price, 2, '.', ' ') . ' $[:]');?></dd>
					<?php endif; ?>
				<?php endif; ?>
				</dl>
					<?php if( get_field('sale') == 'yes' ): ?>
						<section class="direct-sale">
							<h2><?php _e('[:en]Direct sale[:][:fr]Vente Directe[:]'); ?></h2>
							<p><?php _e('
								[:en]This piece is for sale exclusively on the night of our January 25<sup>th</sup> <a href="/about/vernissage/">vernissage</a>. Make sure to come early so as not to miss out.[:]
								[:fr]Cette &oelig;uvre sera mise en vente exclusivement lors du <a href="/fr/about/vernissage/">vernissage</a> le 25 janvier. Arrivez tôt afin de ne pas rater votre chance.[:]
								'); ?></p>
						</section>
				<?php endif; ?>
				<p class="text-center"><a href="/catalog/" class="btn btn-primary">Back to Catalog</a></p>
			</div>
		</div>
<?php wp_reset_query(); get_footer(); ?>
