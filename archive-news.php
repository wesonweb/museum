<?php get_header(); ?>

		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="container">
					<?php if( have_posts()) : while( have_posts()) : the_post(); ?>
					<ul class="archive-news-listings">
						<li><h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
						</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
		</main>
<?php get_footer();
