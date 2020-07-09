<?php get_header(); ?>

		<main id="main" class="site-main content-area" role="main">
			<div class="container">
				<h1>Chesham Museum news</h1>
				<ul class="news__listing">
				<?php if( have_posts()) : while( have_posts()) : the_post(); ?>
					<li class="news__item"><a href="<?php the_permalink();?>" ><h3><?php the_title(); ?></h3><?php the_post_thumbnail();?>
					</a></li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
			</div>
	</main>
<?php get_footer();
