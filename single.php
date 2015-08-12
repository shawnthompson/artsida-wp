<?php get_header(); the_post(); ?>
		<header class="cell purple">
			<div class="col-sm-2 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>
			<div class="col-sm-7 purple">
				<h1><?php the_title(); ?></h1>
				<p><?php _e('[:en]by[:][:fr]par[:]'); ?>: <?php echo get_post_meta($post -> ID, 'firstname', true );?> <?php echo get_post_meta($post -> ID, 'lastname', true );?></p>
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
				</dl>
				<nav>
				  <ul class="pager">
				    <li class="previous"><?php previous_post_link('%link', '<i class="fa fa-arrow-circle-o-left fa-2x"></i>', TRUE);?></li>
				    <li class="next"><?php next_post_link('%link', '<i class="fa fa-arrow-circle-o-right fa-2x"></i>', TRUE);?></li>
				  </ul>
				</nav>
			</div>
		</div>
<?php wp_reset_query(); get_footer(); ?>

