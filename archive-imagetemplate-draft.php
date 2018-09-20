<?php get_header(); ?>

		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="container">
					<article class="">
					  <ul class="chesham-images-container">
							<?php if( have_posts()) : while( have_posts()) : the_post(); ?>
						    <li><a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('chesham-images-thumb'); ?><span class="gallery-landing-thumbnail"><?php the_title(); ?></span></a></li>
							<?php endwhile; ?>
					  </ul>
					</article>
			<?php endif; ?>
			</div>
		</div>
</main>

<?php get_footer();
