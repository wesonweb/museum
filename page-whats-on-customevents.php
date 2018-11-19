<?php /* Template Name: what's on template */ ?>

<?php get_header(); ?>

	<main id="main" class="content whatson" role="main">
		<section class="whatson-intro">
			<div class="welcome-message">
				<h2>What's on at Chesham museum</h2>
			</div>
		</section>

		<div class="container whatson-container clearfix">
			<ul class="event-container clearfix">
			<?php

				global $paged;

				$myargs = array(
					 'post_type' => 'event', //name of post type
					 'posts_per_page' => -1, //number of post to show
					 'meta_key' => 'event_date', //name of date field
					 'orderby' => 'meta_value_num',
					 'order' => 'ASC',
					 'paged' => $paged
				);

				query_posts($myargs );

				if (have_posts()) : while (have_posts()) : the_post(); ?>

				<li>
					<div class="event-meta">
						<h2><?php the_title(); ?></h2>
						<p><span class="date"><?php the_field('event_date'); ?></span></p>
						<span class="time"><?php the_field('event_time'); ?></span>
					</div>

					<?php the_post_thumbnail('event-page-image'); ?>
						<div class="event-summary"><?php the_field('event_summary'); ?>
							<a href="<?php the_permalink(); ?>" class="button">Find out more</a>
						</div>
					</li>


			<?php  endwhile; else: ?>

				<div class="container">
					<p>We don't have any events at the moment. Keep checking as we'll be adding
					more events soon. </p>
				</div>

			</ul>
		<?php endif; ?>
	</div>

	</main><!-- .site-main -->


<?php get_footer(); ?>
