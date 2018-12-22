<?php
	$date = strtotime("February 3, 2019 18:30");
	$remaining = $date - time();
	$days = floor($remaining / 86400);
	$hours = floor(($remaining % 86400) / 3600);
	$cssVersion = "2.0.3";
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
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
				elseif (is_page_template('page-table.php')) {
					_e('[:en]FAIR MARKET VALUE[:][:fr]JUSTE VALEUR MARCHANDE[:]');
				}
			  elseif (is_404()) {
				 _e('[:en]Error 404 - Page Not Found - [:][:fr]Erreur 404 - Page introuvable - [:]'); }
			  if (is_home()) {
				 bloginfo('name');}
			  else {
				  bloginfo('name'); }
			  if ($paged>1) {
				 echo ' - page '. $paged; }
		   ?>
	</title>
	<?php if (is_home()) :?>
	<meta property="og:image" content="http://artsida.org/artsida7-og2.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:title" content="Artsida 9 - February 3rd, 2019" />
	<meta property="og:url" content="http://artsida.org" />
	<meta property="og:site_name" content="Artsida 9"/>
	<meta property="og:type" content="Website"/>
	<meta property="og:description" content="Artsida is an art auction fundraiser for AIDS Community Care Montreal, a volunteer-based community organization working to enhance the quality of life of people living with HIV/AIDS, to prevent HIV transmission, and to promote community awareness and action."/>
	<?php endif; ?>
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico"  type="image/x-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<?php if (is_page_template('page-table.php')) { ?>
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" />
	<?php } ?>
	<!--[if gte IE 9 | !IE ]><!-->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme.css?v=<?php echo $cssVersion; ?>">
	<?php if (is_single() | is_search()) {?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<?php } ?>
	<?php if (is_page_template('page-catalog.php' || 'page-catalog-draft.php')) {?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/catalog.min.css">
	<?php } ?>
	<?php if (is_page_template('page-sponsor.php')) {?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sponsor.css?v=<?php echo $cssVersion; ?>">
	<?php } ?>
	<!--<![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!--[if lt IE 9]>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme.ie.css" />
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="relative">
		<div class="col-sm-8 mrgn-tp-md">
			<div class="row">
				<div class="col-xs-2 mrgn-tp-md accm-logo">
				<p><a target="_blank" href="http://accmontreal.org/fr"><img src="<?php bloginfo('template_url'); ?>/img/accm.png" alt="ACCM" class="img-responsive" /></a></p>
				</div>
				<div class="col-xs-8">
					<h1 class="mrgn-tp-md"><a href="<?php echo get_option('home'); ?>/<?php _e('[:en]en[:][:fr]fr[:]'); ?>"><span class="sr-only">Artsida 8</span><img src="<?php bloginfo('template_url'); ?>/img/artsida9.png" class="center-block img-responsive" alt="" /></a></h1>
					<h2><?php _e('[:en]Raise your hand for ACCM[:][:fr]Levez votre main pour ACCM[:]'); ?></h2>
					<div class="event">
						<p class="date"><?php _e('[:en]Sunday February 3<sup>rd</sup>[:][:fr]Dimanche le 3 février[:]'); ?> 2019</p>
						<p class="time"><?php _e('[:en]6:30pm - 10:30pm[:][:fr]18h30 - 22h30[:]'); ?></p>
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
				<section class="col-xs-12 text-right">
					<h2 class="sr-only"><?php _e('[:en]Language selection[:][:fr]Sélection de langue[:]'); ?></h2>
					<ul class="list-unstyled">
					<?php
						if (!is_home()) {
							$postid = get_page_uri( $page_id );
						}
					?>
						<li class="text-right"><a lang="<?php _e('[:en]fr[:][:fr]en[:]'); ?>" href="<?php _e('[:en]/fr/[:][:fr]/en/[:]'); ?><?php echo $postid; ?>" class="lang"><?php _e('[:en]Fr<span class="sr-only">ançais</span>[:][:fr]En<span class="sr-only">glais</span>[:]'); ?></a></li>
					</ul>
				</section>
			</div>
			<div class="venue">
				<p><a target="_blank" href="<?php _e('[:en]https://macm.org/en/[:][:fr]https://macm.org/[:]'); ?>"><span lang="fr" class="sr-only">Musée d'art contemporain de Montréal</span><img src="<?php bloginfo('template_url'); ?>/img/logo-mac.png" alt=""></a></p>
				<p>185 <?php _e('[:en]Sainte-Catherine Street West[:][:fr]rue Sainte-Catherine Ouest[:]'); ?></p>
			</div>
			<p class="text-center time-left"><strong><?php echo $days; ?></strong> <?php _e('[:en]days[:][:fr]jours[:]'); ?> <span class="text-nowrap"> <?php _e('[:en]until[:][:fr]avant[:]'); ?> <strong class="large">Artsida 9</strong></span></p>
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
				<div class="col-sm-3 red cell"><p class="bids"><a href="http://artsida.org/<?php _e('[:en]en[:][:fr]fr[:]'); ?>/absentee/"><?php _e('[:en]Absentee bids[:][:fr]Mise à distance[:]'); ?></a></p></div>
				<div class="col-sm-1 pink hidden-xs cell"></div>
			</div>
		</div>
	</header>
	<div class="clearfix"></div>
	<main class="relative">
