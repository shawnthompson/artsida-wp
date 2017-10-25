<?php get_header(); ?>


		<h1 class="sr-only">ArtSida 8, Sunday March 11th 2018</h1>
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			<?php
			$cutoff_date = '2018-12-31';
			$args = array(
				'orderby'        => 'rand',
				'posts_per_page' => '3',
				'date_query' => array( 'after' => $cutoff_date ),
				'cat' => '2'

			);
			// The Query
			query_posts( $args );
			$dataSlide = 0;
			// The Loop
			if ( have_posts() ) :
			while ( have_posts() ) : the_post();
			if ( $dataSlide == 0 ) {
				$activeClass = ' class"active"';
			} else {
				$activeClass = '';
			}
			echo '<li data-target="#carousel" data-slide-to="' . $dataSlide. '"' . $activeClass . '></li>
			';
			$dataSlide ++; ?>
			<?php endwhile; ?>
            <?php else : ?>
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
			<li data-target="#carousel" data-slide-to="3"></li>
			<li data-target="#carousel" data-slide-to="4"></li>
			<li data-target="#carousel" data-slide-to="5"></li>
			<?php endif; ?>
			</ol>
			<div class="carousel-inner" role="listbox">
			<?php
			$dataSlide = 0;
			if ( have_posts() ) :
			while ( have_posts() ) : the_post();
			if ($dataSlide == 0) { $activeClass = ' active';} else { $activeClass = ''; }
			$dataSlide ++;
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				    add_filter( 'post_thumbnail_html', 'remove_img_attr' ); // removes the size attributes ?>
			<div class="item<?php echo $activeClass;?>">
			<?php the_post_thumbnail("full"); ?>
			</div>
			<?php

				} ?>
			<?php endwhile; wp_reset_query(); ?>

            <?php else : ?>
				<div class="item active">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/artsida8/carousel1.jpg" alt="" />
				</div>
				<div class="item">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/artsida8/carousel2.jpg" alt="" />
				</div>
				<div class="item">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/artsida8/carousel3.jpg" alt="" />
				</div>
				<div class="item">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/artsida8/carousel4.jpg" alt="" />
				</div>
				<div class="item">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/artsida8/carousel5.jpg" alt="" />
				</div>
				<div class="item">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/artsida8/carousel6.jpg" alt="" />
				</div>

			<?php endif; ?>


			</div>
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

			<div class="col-sm-5 col-md-6 purple responsive"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/pic4.jpg" class="hidden-xs bottom-right photoh" alt=""></div>
			<div class="hidden-xs col-sm-5 col-md-4 yellow"></div>
			<div class="hidden-xs col-sm-2 cyan"></div>

			<div class="hidden-xs col-sm-3 yellow"></div>
			<div class="hidden-xs col-sm-3 cyan"></div>
			<div class="hidden-xs col-sm-6 pink"></div>

			<div class="hidden-xs col-sm-2 red responsive"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/pic3.jpg" class="bottom-left photov" alt=""></div>
			<div class="hidden-xs col-sm-3 purple"></div>
			<div class="col-sm-7 purple responsive twitter-wrapper"><a class="twitter-timeline" data-height="378" data-width="500" href="https://twitter.com/ARTSIDA8">Tweets by ARTSIDA8</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>

<div class="col-sm-12 yellow-grad responsive"></div>
</div>




<?php get_footer(); ?>
