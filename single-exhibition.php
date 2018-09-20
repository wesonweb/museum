<?php get_header(); ?>

		<main id="main" class="content" role="main">
			<article class="single-post-content-container container clearfix">
				<div class="exhibition-introduction">

					<h2><?php the_title(); ?></h2>

				</div>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>
				</article>


			<?php endwhile; ?>

		</main><!-- #main -->

<?php get_footer(); ?>
