	<div class="clearfix"></div>
	</main>
	<footer class="col-xs-12">
		<div class="col-sm-6 col-sm-push-6">
			<section class="col-xs-6">
				<h2 class="sr-only">Social Media</h2>
				<ul class="list-inline">
					<li>
						<a target="_blank" href="https://www.facebook.com/accm.artsida"><i class="fa fa-facebook-square fa-4x"></i><span class="sr-only">Facebook</span></a>
					</li>
					<li>
						<a target="_blank" href="https://twitter.com/ARTSIDA6"><i class="fa fa-twitter-square fa-4x"></i><span class="sr-only">Twitter</span></a>
					</li>
					<li>
						<a target="_blank" href="http://instagram.com/artsida"><i class="fa fa-instagram fa-4x"></i><span class="sr-only">Instagram</span></a>
					</li>
					<li>
						<a target="_blank" href="http://artsida.tumblr.com/"><i class="fa fa-tumblr-square fa-4x"></i><span class="sr-only">Tumblr</span></a>
					</li>
				</ul>
			</section>
			<section class="col-xs-6 text-right media">
				<h2 class="sr-only"><?php _e('[:en]Information links[:][:fr]Liens d\'informations[:]'); ?></h2>
				<?php wp_nav_menu( array('footer_menu' => 'Footer Menu', 'menu_class' => 'list-unstyled') );?>
			</section>
		</div>
		<section class="col-xs-12 col-sm-6 col-sm-pull-6 sponsors">
			<h2 class="sr-only"><?php _e('[:en]Sponsors[:][:fr]Commanditaires[:]'); ?></h2>
			<section class="col-xs-6">
				<h3><?php _e('[:en]Presented by[:][:fr]Présenté par[:]'); ?>:</h3>
				<ul class="list-unstyled">
					<li><a target="_blank" href="http://www.td.com/"><img class="img-responsive mrgn-tp-sm" src="<?php bloginfo('template_url'); ?>/img/sponsor-td.gif" alt="TD"></a></li>
				</ul>
			</section>
			<div class="col-xs-6">
				<section>
					<h3><?php _e('[:en]Framing Sponsor[:][:fr]Commanditaire Encadrement[:]'); ?>:</h3>
						<ul class="list-unstyled">
							<li><a target="_blank" href="http://www.encadrex.com/"><img class="img-responsive mrgn-tp-sm" src="<?php bloginfo('template_url'); ?>/img/sponsor-encadrex.png" alt="encadrex"></a></li>
						</ul>
				</section>
				<section>
					<h3><?php _e('[:en]Partner Sponsors[:][:fr]Commanditaires partenaires[:]'); ?>:</h3>
						<div class="mrgn-bttm-md"><a href="http://www.westjet.com/guest/en/home.shtml" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/sponsor-westjet.jpg" class="img-responsive" alt="Westjet" /></a></div>
						<div class="row">
						<div class="mrgn-bttm-md col-xs-6"><a href="http://www.unmondeunvillage.com/index.php?lang=<?php _e('[:en]en[:][:fr]fr[:]'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/village.jpg" class="img-responsive" alt="Village" /></a></div>
						<div class="mrgn-bttm-md col-xs-6"><a href="http://www.bellegueule.ca/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/belle-gueule.png" class="img-responsive" alt="La Belle Gueule" /></a></div>
						<div class="mrgn-bttm-md col-xs-6"><a href="http://madcatering.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/mad.jpg" class="img-responsive" alt="Traiteur M.A.D. Catering and Café" /></a></div>
						</div>
				</section>
			</div>
		</section>
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
