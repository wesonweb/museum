<?php get_header(); ?>
	<main id="main" class="content clearfix" role="main">
		<div class="single-event">
			<article class="single-post-content-container container clearfix">
				<div class="event-introduction">
					<h2><?php the_title(); ?></h2>
					<div class="event-thumbnail"><?php the_post_thumbnail(); ?></div>
						<?php
						while ( have_posts() ) : the_post(); ?>
						<p><span class="date"><?php the_field('event_date'); ?></span></p>
						<span class="time"><?php the_field('event_time'); ?></span>
						<?php if( get_field('ticket_price') ): ?>
						<span class="ticket-price">Tickets cost £<?php the_field('ticket_price'); ?></span>
						<?php endif; ?>
						<?php if( get_field('venue') ): ?>
						<span class="venue">Venue: <?php the_field('venue'); ?></span>
						<?php endif; ?>
				</div><!-- end event intro -->
				<div class="event-details">
					<?php the_field('event_details'); ?>
						<?php if( get_field('children_event_info') ): ?>
						<section class="craft-event-info">
							<h3>Information for parents or guardians</h3>
							<?php the_field('children_event_info'); ?>
						</section> <!-- end craft event info -->
						<?php endif; ?>
						<?php get_template_part('template-parts/post', 'nav'); ?>
				</div>
			</article>
		</div><!-- end .single-event -->
		<?php endwhile; ?>
	</main><!-- #main -->
<?php get_footer(); ?>
