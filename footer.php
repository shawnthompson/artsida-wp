	<div class="clearfix"></div>
	</main>
	<footer>
		<section class="col-xs-3 text-right media pull-right">
			<h2 class="sr-only"><?php _e('[:en]Information links[:][:fr]Liens d\'informations[:]'); ?></h2>
			<?php wp_nav_menu( array('footer_menu' => 'Footer Menu', 'menu_class' => 'list-unstyled') );?>
		</section>
		<section class="col-xs-3 pull-right">
			<h2 class="sr-only">Social Media</h2>
			<ul class="list-inline">
				<li>
					<a target="_blank" href="https://www.facebook.com/ARTSIDA/"><i class="fa fa-facebook-square fa-4x"></i><span class="sr-only">Facebook</span></a>
				</li>
				<li>
					<a target="_blank" href="https://twitter.com/ARTSIDA7"><i class="fa fa-twitter-square fa-4x"></i><span class="sr-only">Twitter</span></a>
				</li>
			</ul>
		</section>
		<section class="col-xs-3">
			<h3><?php _e('[:en]Presented by[:][:fr]Présenté par[:]'); ?>:</h3>
				<a target="_blank" href="<?php _e('[:en]https://www.td.com/about-tdbfg/our-business/index.jsp[:][:fr]https://www.td.com/francais/a-propos-du-gfbtd/nos-entreprises/index.jsp[:]'); ?>"><img class="img-responsive mrgn-tp-sm" src="<?php bloginfo('template_url'); ?>/img/sponsor-td.gif" alt="TD"></a>
		</section>
		<section class="col-xs-3">
			<h3><?php _e('[:en]Framing Sponsor[:][:fr]Commanditaire Encadrement[:]'); ?>:</h3>
				<a target="_blank" href="http://www.encadrex.com/index.php/<?php _e('[:en]en-US/[:][:fr]fr/[:]'); ?>"><img class="img-responsive mrgn-tp-sm" src="<?php bloginfo('template_url'); ?>/img/sponsor-encadrex.png" alt="encadrex"></a>
		</section>
		<div class="col-xs-8 row mrgn-bttm-lg">
			<div class="col-xs-4">
				<a target="_blank" href="http://www.eskawater.com/?lang=<?php _e('[:en]en[:][:fr]fr[:]'); ?>"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/sponsor-eska.png" alt=""></a>
			</div>
			<div class="col-xs-4">
				<a target="_blank" href="<?php _e('[:en]http://image-24.com/[:][:fr]http://image-24.com/fr/[:]'); ?>"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/sponsor-image24.png" alt=""></a>
			</div>
			<div class="col-xs-4">
				<a target="_blank" href="http://maysys.com/"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/sponsor-maysys.png" alt=""></a>
			</div>
		</div>
			<div class="col-xs-8 text-center row sponsor">
				<div class="col-xs-4">
					<a target="_blank" href="https://www.matelasbonheur.ca/<?php _e('[:en]en[:][:fr]fr[:]'); ?>"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/sponsor-matelas.png" alt=""></a>
				</div>
				<div class="col-xs-4">
					<a target="_blank" href="http://pamco.ca/"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/sponsor-pamco.jpg" alt=""></a>
				</div>
				<div class="col-xs-4">
					<a target="_blank" href="<?php _e('[:en]http://codespark.ca/en/[:][:fr]http://codespark.ca/[:]'); ?>"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/sponsor-CodeSpark.png" alt=""></a>
				</div>
				<div class="col-xs-4">
					<a target="_blank" href="<?php _e('[:en]http://lmkca.com/en/[:][:fr]http://lmkca.com[:]'); ?>"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/sponsor-lacharite.png" alt=""></a>
				</div>
				<div class="col-xs-4">
					<a target="_blank" href="<?php _e('[:en]http://theratech.com[:][:fr]http://theratech.com/fr[:]'); ?>"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/sponsor-thera.png" alt=""></a>
				</div>
				<div class="col-xs-4">
					<a target="_blank" href="<?php _e('[:en]http://www.montrealgayvillage.com[:][:fr]http://www.villagegaimontreal.com/[:]'); ?>"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/sponsor-village.png" alt=""></a>
				</div>
		</div>
	</footer>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<?php if (is_home()) {?>
	<script src="<?php bloginfo('template_url'); ?>/js/twitter.js"></script>
	<script>
		$('.reload').click(function() {
		    location.reload();
		});
	</script>
<?php }?>
<?php if (is_single() | is_search()) {?>
	<script src="<?php bloginfo('template_url'); ?>/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox();
		});
	</script>
<?php } ?>

	<?php wp_footer(); ?>
</body>
</html>
