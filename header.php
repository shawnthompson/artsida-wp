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

	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico"  type="image/x-icon">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css">
	<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
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
					<p class="mrgn-tp-lg"><a href="<?php echo get_option('home'); ?>/"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.gif" alt="ArtSIDA" /></a></p>
				</div>
				<div class="col-xs-8">
					<h1 class="mrgn-tp-md"><a href="<?php echo get_option('home'); ?>/"><span class="sr-only"><?php bloginfo('name'); ?></span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/artsida6.jpg" class="center-block img-responsive" alt="" /></a></h1>
					<h2><?php bloginfo('description'); ?></h2>
					<p class="text-center date">Wednesday September 30<sup>th</sup> 2015</p>
					<p><a href="http://accmontreal.org/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/accm-en.jpg" alt="ACCM: AIDS Community Care Montreal" class="mrgn-tp-sm center-block img-responsive" /></a></p>
				</div>
				<div class="col-xs-2">
					<p><span class="small">Presented&nbsp;by:</span><br />
					<p><a href="http://www.td.com/"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sponsor-td.gif" alt="TD logo" /></a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-4 yellow info">
			<div class="row">
				<div class="col-xs-10 text-left"><p class="small"><a href="mailto:artsida@accmontreal.org">Subscribe to the Artsida newsletter</a></p></div>
				<section class="col-xs-2">
					<h2 class="sr-only">Language selection</h2>
					<ul class="list-unstyled">
						<li class="text-right"><a lang="en" href="<?php _e("<!--:en-->" . qtranxf_convertURL($url, 'fr') . "<!--:--><!--:fr-->" . qtranxf_convertURL($url, 'en') . "<!--:-->"); ?>" class="lang">Fr<span class="sr-only">ançais</span></a>
						</li>
					</ul>
				</section>
			</div>
				<p><a href="http://entrepotsdominion.ca/"><span class="sr-only">Entrepôts Dominion</span><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/venue-dominion.png" alt=""></a></p>
				<p>3968 St-Ambroise<br />
				5:00pm - 10:30pm</p>
				<p class="text-center time-left"><?php echo $days; ?> days, <span class="text-nowrap"><?php echo $hours;?> hours  until Artsida 6</span></p>
		</div>
		<div class="col-sm-8 cell">
			<div class="row">
				<nav>
					<ul>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="artsida.php">Artsida 6 Auction</a></li>
								<li><a href="vernissage.php">Artsida 6 Vernissage</a></li>
								<li><a href="honorary.php">Honorary Co-Chairs</a></li>
								<li><a href="venues.php">Event Venues</a></li>
								<li><a href="team.php">Artsida 6 Team</a></li>
								<li><a href="history.php">Artisda History</a></li>
								<li><a href="accm.php">ACCM</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Artwork <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="catalog.php">Catalog</a></li>
								<li><a href="rules.php">Auction Rules</a></li>
								<li><a href="submissions.php">Submissions</a></li>
							</ul>
						</li>
						<li><a href="tickets.php">Tickets</a></li>
						<li><a href="sponsors.php">Sponsors</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="col-sm-3 red hidden-xs cell"></div>
		<div class="col-sm-1 pink hidden-xs cell"></div>
	</header>
	<div class="clearfix"></div>
	<main class="relative">
