<?php
	$date = strtotime("September 30, 2015 17:00");
	$remaining = $date - time();
	$days = floor($remaining / 86400);
	$hours = floor(($remaining % 86400) / 3600);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>
	<title>
		   <?php
			  if (function_exists('is_tag') && is_tag()) {
				 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
			  elseif (is_archive()) {
				 wp_title(''); echo ' Archive - '; }
			  elseif (is_search()) {
				 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
			  elseif (!(is_404()) && (is_single()) || (is_page())) {
				 wp_title(''); echo ' - '; }
			  elseif (is_404()) {
				 echo 'Not Found - '; }
			  if (is_home()) {
				 bloginfo('name'); echo ' - '; bloginfo('description'); }
			  else {
				  bloginfo('name'); }
			  if ($paged>1) {
				 echo ' - page '. $paged; }
		   ?>
	</title>
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico"  type="image/x-icon">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!--[if gte IE 9 | !IE ]><!-->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme.min.css">
	<?php if (is_page_template('page-catalog.php') | is_single()) {?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<?php } ?>
	<!--<![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme.ie.css" />
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="relative">
		<div class="col-sm-8">
			<div class="row">
				<div class="col-xs-2 mrgn-tp-md">
					<p class="mrgn-tp-lg"><a href="<?php echo get_option('home'); ?>/"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo.gif" alt="Artsida logo" /></a></p>
				</div>
				<div class="col-xs-8">
					<h1 class="mrgn-tp-md"><a href="index.php"><span class="sr-only">Artsida 6</span><img src="<?php bloginfo('template_url'); ?>/img/artsida6.jpg" class="center-block img-responsive" alt="" /></a></h1>
					<h2><?php _e('[:en]Raise your hand for ACCM[:][:fr]Levez votre main pour ACCM[:]'); ?></h2>
					<p class="text-center date"><?php _e('[:en]Wednesday September 30<sup>th</sup> 2015[:][:fr]Mercredi le 30 septembre 2015[:]'); ?></p>
					<div class="col-xs-8 col-xs-push-2 mrgn-tp-sm">
						<p><a target="_blank" href="http://accmontreal.org/fr"><img src="<?php bloginfo('template_url'); ?>/img/accm-<?php _e('[:en]en[:][:fr]fr[:]'); ?>.jpg" alt="<?php _e('[:en]ACCM: AIDS Community Care Montreal[:][:fr]ACCM: Sida Bénévoles Montréal[:]'); ?>" class="img-responsive" /></a></p>
					</div>
				</div>
				<div class="col-xs-2">
					<p><span class="small"><?php _e('[:en]Presented&nbsp;by:[:][:fr]Présenté&nbsp;par:[:]'); ?></span><br />
					<p><a target="_blank" href="http://www.td.com/"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/sponsor-td.gif" alt="TD logo" /></a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-4 yellow info">
			<div class="row">
				<div class="col-xs-10 text-left"><p class="small"><a href="mailto:artsida@accmontreal.org"><?php _e('[:en]Subscribe to the Artsida newsletter[:][:fr]Abonnez-vous au bulletin électronique d\'Artsida[:]'); ?></a></p></div>
				<section class="col-xs-2">
					<h2 class="sr-only"><?php _e('[:en]Language selection[:][:fr]Sélection de langue[:]'); ?></h2>
					<ul class="list-unstyled">
					<?php
						if (!is_home()) {
							$postid = 'p=' . get_the_ID() . '&amp;' ;
						}
					?>
						<li class="text-right"><a lang="<?php _e('[:en]fr[:][:fr]en[:]'); ?>" href="?<?php echo $postid; ?>&amp;lang=<?php _e('[:en]fr[:][:fr]en[:]'); ?>" class="lang"><?php _e('[:en]Fr<span class="sr-only">ançais</span>[:][:fr]En<span class="sr-only">glais</span>[:]'); ?></a></li>
					</ul>
				</section>
			</div>
				<p><a target="_blank" href="http://entrepotsdominion.ca/"><span class="sr-only">Entrepôts Dominion</span><img src="<?php bloginfo('template_url'); ?>/img/venue-dominion.png" alt=""></a></p>
				<p>3968 St-Ambroise<br />
				<?php _e('[:en]5:00pm - 10:30pm[:][:fr]17h00 - 22h30[:]'); ?></p>
				<p class="text-center time-left"><strong><?php echo $days; ?></strong> <?php _e('[:en]days[:][:fr]jours[:]'); ?>, <span class="text-nowrap"><strong><?php echo $hours;?></strong> <?php _e('[:en]hours until[:][:fr]heures avant[:]'); ?> <strong class="large">Artsida 6</strong></span></p>
		</div>
		<div class="col-sm-12 menu">
			<div class="row">
				<div class="col-sm-8 cell">
					<div class="row">
					 <?php
				            wp_nav_menu(
				            	array(
					                'menu'              => 'Main menu',
					                'theme_location'    => 'Main menu',
					                'depth'             => 2,
					                'container'         => 'nav',
					                'menu_class'        => false,
					                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					                'walker'            => new wp_bootstrap_navwalker()
				                )
				            );
				        ?>
					</div>
				</div>
				<div class="col-sm-3 red hidden-xs cell"></div>
				<div class="col-sm-1 pink hidden-xs cell"></div>
			</div>
		</div>
	</header>
	<div class="clearfix"></div>
	<main class="relative">
