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
				  <dt><?php _e('[:en]Estimated Price[:][:fr]Prix ​​Estimé[:]'); ?>:</dt>
				  <dd><?php if ( empty ($estimated_price)) : ?><?php _e('[:en]Information unavailable[:][:fr]Information non disponible[:]'); ?><?php else : _e('[:en]$' . $estimated_price . ' [:][:fr]'. $estimated_price . ' $[:]');?><?php endif; ?></dd>
				</dl>
					<?php if( get_field('sale') == 'yes' ): ?>
						<section class="direct-sale">
							<h2><?php _e('[:en]Direct sale[:][:fr]Vente Directe[:]'); ?></h2>
							<p><?php _e('
								[:en]This piece is for sale exclusively on the night of our March 2<sup>nd</sup> <a href="/about/vernissage/">vernissage</a>. Make sure to come early so as not to miss out.[:]
								[:fr]Cette &oelig;uvre sera mise en vente exclusivement lors du <a href="/fr/about/vernissage/">vernissage</a> le 2 mars. Arrivez tôt afin de ne pas rater votre chance.[:]
								'); ?></p>
						</section>
				<?php endif; ?>
				<?php
				$firstname = get_post_meta($post -> ID, 'firstname', true );
				$args = array(
					'cat' => 2,
					'orderby'  => 'meta_value',
					'meta_key' => 'firstname',
					'order' => 'ASC'
				);
				query_posts( $args );
				?>
			<?php if (have_posts() ) : ?>
				<nav>
				  <ul class="pager">
				    <li class="previous"><?php previous_post_link_plus( array('order_by' => 'custom',  'meta_key' => 'firstname', 'loop' => true, 'in_same_cat' => 'true', 'link' => '<i class="fa fa-arrow-circle-o-left fa-2x"></i>', 'format' => '%link') );?></li>
				    <li class="next"><?php next_post_link_plus( array('order_by' => 'custom',  'meta_key' => 'firstname', 'loop' => true, 'in_same_cat' => 'true', 'link' => '<i class="fa fa-arrow-circle-o-right fa-2x"></i>', 'format' => '%link') );?></li>
				  </ul>
				</nav>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
			</div>
		</div>
<?php wp_reset_query(); get_footer(); ?>
