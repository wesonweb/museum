<?php

/*
 Template Name: Full width template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" >
			<div class="container">
				<?php if(have_posts()) : while(have_posts()): the_post(); ?>
				<article class="">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</article>
			<?php endwhile; endif; ?>

			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
