<?php get_header(); ?>



		<h1 class="sr-only">ArtSida 6, September 30, 2015</h1>
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel1-new.png" alt="" />
				</div>
				<div class="item">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel2-new.png" alt="" />
				</div>
				<div class="item">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/carousel3-new.png" alt="" />
				</div>
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
