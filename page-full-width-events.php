<?php
/*
 Template Name: Full width events template
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" >
            <div class="container">
                <h3>Coronavirus (COVID-19) information </h3>
                <p>Due to the COVID-19 pandemic some Chesham Museum events may be cancelled until further notice.</p>
            </div>

            <?php if(have_posts()) : while(have_posts()): the_post();

                get_template_part('template-parts/content');

			?>
				
			<?php endwhile; endif; ?>
		</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
