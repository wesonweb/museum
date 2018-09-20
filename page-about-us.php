<?php /* Template Name: About us */ ?>

<?php get_header(); ?>

	<main id="main" class="content" role="main">
		<section class="aboutus-intro">
			<div class="welcome-message container">
				<h2>About us</h2>
			</div>
		</section>

			<?php
				// Start the loop.
				while ( have_posts() ) : the_post(); ?>

				<article class="container">
					<?php the_content(); ?>

					<?php if(get_field('constitution')) : ?>

					<?php the_field('constitution'); ?>
				<?php endif; ?>
				</article>

			<?php	endwhile;?>

	</main><!-- .site-main -->

<?php get_footer(); ?>
