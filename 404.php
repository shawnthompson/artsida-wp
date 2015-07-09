<?php get_header(); ?>
		<header class="cell purple">
			<div class="col-sm-2 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>
			<div class="col-sm-7 purple">
				<h1><?php _e('[:en]Error 404 - Page Not Found[:][:fr]Erreur 404 - Page introuvable[:]'); ?></h1>
			</div>
			<div class="clearfix"></div>
		</header>
		<div class="col-sm-12 text">
			<p class="text-center"><?php _e('[:en]Page not find. Please visit the <a href="'. get_option('home'). '/?p=16">artwork</a> or use the menu to navigate to the right page.[:][:fr]Cette page ne trouvez pas. S\'il vous plaît visiter <a href="'. get_option('home') . '/?p=16">l\'œuvre d\'art</a> ou utiliser le menu pour accéder à la bonne page.[:]'); ?></p>
		</div>
<?php get_footer(); ?>
