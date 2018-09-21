<?php
/*
 Template Name: Full width template
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" >
			<!-- <div class="container"> -->
				<?php if(have_posts()) : while(have_posts()): the_post(); ?>
				<!-- <article class=""> -->
					<?php //the_content(); ?>
				<!-- </article> -->
			<?php endwhile; endif; ?>
		</div>
			<!-- load Around Chesham images if required -->
			<?php if( is_page('images-of-chesham')) :
				get_template_part('template-parts/content'); ?>

				<?php endif; ?>
			</div>
		</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
