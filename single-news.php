<?php get_header(); ?>
	<main id="main" class="content content-area clearfix" role="main">
		<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
			<article class="container clearfix single-news-article">
				<h2><?php the_title(); ?></h2>
				<!-- <p><span class="publish-date"> -->
					<?php //the_time('j F Y'); ?>
				<!-- </span></p> -->
				<?php the_content(); ?>
			</article>
			<?php endwhile; endif; ?>
	</main><!-- #main -->
<?php get_footer(); ?>
