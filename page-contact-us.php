<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
	<main id="main" class="container" role="main">
		<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
			<article class="container">
				<h2><?php the_title(); ?></h2>
					<?php the_field('contact_page_introduction_paragraph'); ?>
					<section class="contact-form">
						<?php the_content(); ?>
					</section>
			</article>	<!-- END article -->
		<?php	endwhile;?>
	</main><!-- .site-main -->
<?php get_footer(); ?>
