<?php

/*
 Template Name: Full width support template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" >
			<div class="container">
				<section class="support-us-intro">
					<div class="welcome-message container">
						<h2>Support us: <?php the_title(); ?></h2>
					</div>
				</section>
				<?php if(have_posts()) : while(have_posts()): the_post(); ?>

				<article class="">
					<?php the_content(); ?>
				</article>

				<?php endwhile; endif; ?>
				<?php wp_reset_query();
				if(
					is_page_template('page-full-width-support.php')) : ?>
					<h3>Find other ways to get involved</h3>
					<p><a href="<?php echo get_page_link(30); ?>" class="back-link"><i class="far fa-arrow-alt-circle-left"></i> Visit our support us page </a></p>
				<?php endif; ?>


			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
