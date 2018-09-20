<?php /* Template Name: Plan your visit */ ?>

<?php get_header(); ?>

	<main id="main" class="content" role="main">
		<section class="plan-your-visit-intro">
			<div class="welcome-message container">
				<h2>Plan your visit</h2>
			</div>
		</section>

		<!-- opening times -->
		<?php get_template_part('template-parts/opening', 'times'); ?>

		<?php //get_template_part('template-parts/address'); ?>


				<div class="container">
					<div class="location-message">
					<?php the_field('temporary_message'); ?>
					</div>
				</div>



	</main><!-- .site-main -->

<?php get_footer(); ?>
