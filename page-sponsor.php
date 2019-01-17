<?php
	/*
		Template Name: Sponsor Page
	*/
?>
<?php get_header(); the_post(); ?>
		<div class="cell purple">
			<div class="col-sm-2 hidden-xs pink"></div>
			<div class="col-sm-3 hidden-xs cyan"></div>
			<div class="col-sm-7 purple">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="clearfix"></div>
		</div>

<div class="text">
	<div class="sponsor-list">
		<p class="text-center"></p>
		<?php _e('[:en]We rely greatly on corporate sponsors to help us make Artsida a success. If you or your company are interested in supporting our event in some way, contact <a href="mailto:artsida@accmontreal.org">artsida@accmontreal.org</a>[:]
		[:fr]Le succès d’Artsida repose en grande partie sur l’aide de commanditaires. Si vous, ou votre entreprise, souhaitez appuyer l’événement de quelconque façon, communiquez avec nous à l’adresse <a href="mailto:artsida@accmontreal.org" data-external="true">artsida@accmontreal.org</a>[:]'); ?>
		<div class="row container">
			<div class="col-md-10 col-lg-9 col-md-offset-2 col-lg-offset-3">
				<section class="col-md-6">
					<h2><?php _e('[:en]Presenting Sponsor[:][:fr]Commanditaire principal[:]')?></h2>
					<p><a href="<?php _e('[:en]https://www.td.com/ca/en/personal-banking/[:][:fr]https://www.td.com/francais/a-propos-du-gfbtd/nos-entreprises/index.jsp[:]')?>"><img src="/wp-content/uploads/2015/06/sponsor-td.gif" alt="sponsor-td" />
					<span class="sr-only">TD</span></a></p>
				</section>
				<div class="col-md-6">
					<section>
						<h2><?php _e('[:en]Framing Sponsor[:][:fr]Commanditaire à l’encadrement[:]')?></h2>
						<p class="mrgn-tp-lg"><a href="<?php _e('[:en]http://www.encadrex.com/index.php/en-US/[:][:fr]http://www.encadrex.com/index.php/fr/[:]')?>" target="_blank" rel="noopener"><img class="img-responsive" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/encadrex.png" alt="" />
						<span class="sr-only">Encadrex</span></a></p>			
					</section>
				</div>
			</div>
		</div>
		<div class="row mrgn-bttm-lg sponsorsPartners">
			<section class="col-md-12">
			<h2 class="text-center"><?php _e('[:en]Partner Sponsors[:][:fr]Commanditaires partenaires[:]')?></h2>
            <div class="row">
                <div class="col-md-4">
					<a href="<?php _e('[:en]https://www.viivhealthcare.ca[:][:fr]https://www.viivhealthcare.ca/fr/[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/viiv.png" alt="" />
                        <span class="sr-only">Viiv</span>
                    </a>
                </div>
				<div class="col-md-4">
					<a href="<?php _e('[:en]http://www.eskawater.com[:][:fr]http://www.eskawater.com/?lang=fr[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/eska.png" alt="" />
						<span class="sr-only">ESKA</span>
					</a>
				</div>
                <div class="col-md-4">
					<a href="<?php _e('[:en]https://www.segalcentre.org[:][:fr]https://www.segalcentre.org/fr/home[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/segal2019.png" alt="" />
                        <span class="sr-only">Segal Centre</span>
                    </a>
                </div>
            </div>
            <div class="row">
				<div class="col-md-4">
					<a href="https://www.matthewperrin.photos" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/matthew-perrin.png" alt="" />
                        <span class="sr-only">Matthew Perrin Photos</span>
                    </a>
                </div>
                <div class="col-md-4">
					<a href="<?php _e('[:en]https://www.westjet.com/en-ca/index[:][:fr]https://www.westjet.com/fr-ca/index[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/westjet.png" alt="" />
                        <span class="sr-only">Westjet</span>
                    </a>
                </div>
				<div class="col-md-4">
					<a href="<?php _e('[:en]http://www.epikmontreal.com[:][:fr]http://www.epikmontreal.com/fr/[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/epik2.png" alt="" />
						<span class="sr-only">Epik</span>
					</a>
				</div>
            </div>
			<div class="row">
				<div class="col-md-4">
					<a href="<?php _e('[:en]http://www.viarail.ca/en[:][:fr]http://www.viarail.ca/fr[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/via-rail.png" alt="" />
						<span class="sr-only">VIA Rail</span>
					</a>
				</div>				
				<div class="col-md-4">
					<a href="<?php _e('[:en]http://www.westmountmoving.com[:][:fr]http://www.demenagementwestmount.com[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/westmount.png" alt="" />
						<span class="sr-only"><?php _e('[:en]Westmount Moving[:][:fr]Déménagement Westmount[:]')?></span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="https://cliniquelactuel.com" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/lactuel.png" alt="" />
						<span class="sr-only" lang="fr">L'Actuel - Centre d'excellence VIH - ITS - Hépatites</span>
					</a>
				</div>
			</div>
            <div class="row">
                <div class="col-md-4">
					<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/olivier-gagnon.png" alt="" />
					<span class="sr-only">Oliver Gagnon</span>
                </div>
				<div class="col-md-4">
					<a href="<?php _e('[:en]https://www.montrealgayvillage.com/[:][:fr]https://www.villagegaimontreal.com/[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/village.png" alt="" />
						<span class="sr-only"><?php _e('[:en]Gay Village of Montreal[:][:fr]Village Gai de Montréal[:]')?></span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php _e('[:en]https://www.galeriemx.com/en/[:][:fr]https://www.galeriemx.com/[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/galerie-mx.png" alt="" />
						<span class="sr-only">Galerie MX</span>
					</a>
				</div>
            </div>
			<div class="row">
				<div class="col-md-4">
					<a href="http://www.lbvinternational.com/" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/lbv.png" alt="" />
						<span class="sr-only">LBV International</span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="http://theratech.com" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/thera.jpg" alt="" />
						<span class="sr-only">Thera technologies</span>
					</a>
				</div>
				<div class="col-md-4">
				<a href="https://www1.pharmaprix.ca/<?php _e('[:en]en[:][:fr]fr[:]')?>/store-locator/store/29" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/pharmaprix.jpg" alt="" />
						<span class="sr-only" lang="en">Pharmaprix - Van Hoenacker Tremblay - 901 Ste Catherine Est - 3861 St-Laurent, Montreal</span>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="<?php _e('[:en]http://cliniqueopus.com[:][:fr]http://cliniqueopus.com/fr/[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/opus.png" alt="" />
						<span class="sr-only">Clinique OPUS</span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php _e('[:en]https://bydealers.com/[:][:fr]https://bydealers.com/fr/[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/bydealersWhite.jpg" alt="" />
						<span class="sr-only"><?php _e('[:en]BYDealers Auction house[:fr]Les enchères BYDealers[:]')?> </span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php _e('[:en]https://www.alphaplantes.com/en-CA/home[:][:fr]https://www.alphaplantes.com/accueil[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/alpha.png" alt="" />
						<span class="sr-only">Alpha Plantes</span>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="http://www.myhomeourcity.com/" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/myhomeLG.png" alt="" />
						<span class="sr-only" lang="en">My home our city</span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php _e('[:en]https://havana-club.com/en-ca/[:][:fr]https://havana-club.com/fr-fr/home[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/havana.png" alt="" />
						<span class="sr-only">Havana Club</span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php _e('[:en]https://www.absolut.com/ca/[:][:fr]https://www.absolut.com/fr[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/absolut.jpg" alt="" />
						<span class="sr-only">Absolut</span>
					</a>
				</div>
			</div>
			<div class="row">
			<div class="col-md-4">
					<a href="www.gilead.com" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/gilead.jpg" alt="" />
						<span class="sr-only" lang="en">Gilead - Advance Therapeutics. Impoving Lives</span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="www.image-nation.org" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/imagenation.jpg" alt="" />
						<span class="sr-only" lang="en">Image + nation - Festival film LGBTQueen Montreal</span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="https://prelib.ca/<?php _e('[:en]en[:][:fr]fr[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/prelib.jpg" alt="" />
						<span class="sr-only" lang="fr">Prelib - Centre d'auto-prélèvement</span>
					</a>
				</div>
			</div>
			<div class="row">
			<div class="col-md-4">
					<a href="<?php _e('[:en]http://silvermanavocat.ca[:][:fr]http://silvermanavocat.ca/fr/[:]')?>" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/maxsilverman.jpg" alt="" />
						<span class="sr-only">Max Silverman: <span lang="fr">Avocat </span><span lang="en">Lawyer</span></span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="https://www.cliniquemedicalelalicorne.com/" target="_blank" rel="noopener" data-external="true">
						<img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/lalicorne.png" alt="" />
						<span class="sr-only" lang="fr">Clinique M&eacute;dicale La Licorne</span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php _e('[:en]http://www.claudecormier.com/en/[:][:fr]http://www.claudecormier.com[:]')?>" target="_blank" rel="noopener">
						<img class="img-responsive" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/claude-cormier.png" alt="" />
						<span class="sr-only"><?php _e('[:en]Claude Cormier + <span lang="fr">associés</span> inc. - Landscape Architecture and Urban Design[:][:fr]Claude Cormier + associés inc. - <span lang="en">Landscape Architecture and Urban Design</span>[:]')?></span>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="https://www.carreconfiseries.com" target="_blank" rel="noopener" data-external="true">
                        <img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/carre-confiseries.png" alt="" />
                        <span class="sr-only">Carré Confiseries</span>
                    </a>
				</div>
				<div class="col-md-4">
					<a href="<?php _e('[:en]https://www.davidstea.com/ca_en/home/[:][:fr]https://www.davidstea.com/ca_fr/home/[:]')?>" target="_blank" rel="noopener" data-external="true">
                        <img class="img-responsive center-block" src="/wp-content/themes/artsida-wp/img/artsida8-sponsors/davidstea.jpg" alt="" />
                        <span class="sr-only"><?php _e('[:en]Davis Tea[:][:fr]Les th&eactue;s Davis Tea[:]')?></span>
                    </a>
				</div>
			</div>
		</section>
	</div>
</div>

</div>
<?php wp_reset_query(); get_footer(); ?>
