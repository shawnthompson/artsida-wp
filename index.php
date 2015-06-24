<?php get_header(); ?>


		<h1 class="sr-only">ArtSida 6, September 30, 2015</h1>
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			<?php
			$args = array(
				'orderby'        => 'rand',
				'posts_per_page' => '3',
				'cat' => '3'

			);
			// The Query
			query_posts( $args );
			$dataSlide = 0;
			// The Loop
			while ( have_posts() ) : the_post();
			if ( $dataSlide == 0 ) {
				$activeClass = ' class"active"';
			} else {
				$activeClass = '';
			}
			echo '<li data-target="#carousel" data-slide-to="' . $dataSlide. '"' . $activeClass . '></li>
			';
			$dataSlide ++;

			endwhile; ?>
			</ol>
			<div class="carousel-inner" role="listbox">
			<?php
			$dataSlide = 0;
			while ( have_posts() ) : the_post();
			if ($dataSlide == 0) { $activeClass = ' active';} else { $activeClass = ''; }
			$dataSlide ++;
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				    add_filter( 'post_thumbnail_html', 'remove_img_attr' ); // removes the size attributes ?>
			<div class="item<?php echo $activeClass;?>">
			<?php the_post_thumbnail("full"); ?>
			</div>
			<?php

				}
			endwhile;
			echo '</div>';
			// Reset Query
			wp_reset_query();
			?>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="clearfix"></div>
		<div class="cell">
			<div class="hidden-xs col-sm-3 red"></div>
			<div class="hidden-xs col-sm-6 purple"></div>
			<div class="hidden-xs col-sm-3 cyan relative"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sponsor-pic.jpg" class="hidden-xs photoh bottom-right" alt=""></div>

			<div class="hidden-xs col-sm-2 yellow"></div>
			<div class="hidden-xs col-sm-6 cyan"></div>
			<div class="hidden-xs col-sm-4 red relative"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/pic1.jpg" class="photoh bottom-left" alt=""></div>

			<div class="col-sm-5 col-md-6 purple responsive"><p class="tag"><?php _e('[:en]Two round trip WestJet flights to North America/Europe to raffle![:][:fr]Deux billets WestJet aller-retour en Amérique du Nord/Europe à tirer![:]'); ?></p><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/pic4.jpg" class="hidden-xs bottom-right photoh" alt=""></div>
			<div class="hidden-xs col-sm-5 col-md-4 yellow"></div>
			<div class="hidden-xs col-sm-2 cyan"></div>

			<div class="hidden-xs col-sm-3 yellow"></div>
			<div class="hidden-xs col-sm-3 cyan"></div>
			<div class="hidden-xs col-sm-6 pink"></div>

			<div class="hidden-xs col-sm-2 red responsive"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/pic3.jpg" class="bottom-left photov" alt=""></div>
			<div class="hidden-xs col-sm-3 purple"></div>
			<div class="col-sm-7 purple responsive twitter-wrapper"><a class="twitter-timeline bottom-right"  href="https://twitter.com/ARTSIDA6" data-widget-id="603651242682880000">Tweets by @ARTSIDA6</a></div>

<div class="col-sm-12 yellow-grad responsive"></div>
</div>




<?php get_footer(); ?>
