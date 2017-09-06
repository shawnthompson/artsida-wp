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
	</footer>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<?php if (is_home()) { ?>
	<script src="<?php bloginfo('template_url'); ?>/js/twitter.js"></script>
	<script>
		$('.reload').click(function() {
		    location.reload();
		});
	</script>
<?php } ?>
<?php if (is_page_template('page-table.php')) { ?>
	<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function(){
		    $('#myTable').DataTable({
		    	"pageLength": 25,
	            "scrollY": true,
		        "scrollX": true
		    });
		});
	</script>
<?php } ?>
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
