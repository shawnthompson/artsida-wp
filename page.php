<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




			<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>
		</div>


		<?php endwhile; endif; ?>


<?php get_footer(); ?>
