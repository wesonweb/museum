<?php /* Template Name: What's on */ ?>

<?php get_header(); ?>

	<main id="main" class="content whatson" role="main">
		<section class="whatson-intro">
			<div class="welcome-message">
				<h2>What's on at Chesham museum</h2>
			</div>
		</section>

		<!-- opening times -->
		<?php get_template_part('template-parts/opening', 'times'); ?>


			<!-- <section class="exhibition-image">
				<img src="<?php //echo get_template_directory_uri(); ?>/images/embassy-frontage-web.jpg" alt="">
				<div class="exhibition-text">
					<h3>Our latest exhibition: Chesham cinemas</h3>
					<a href="http://cheshammuseum.org.uk/wp-content/uploads/2017/04/cm_publication_order_form.pdf" class="cta">Find out more</a>
				</div>
			</section> -->

			<div class="inner-content">
				<?php //get_template_part('template-parts/childrens', 'events'); ?>

			</div>

		<div class="inner-content whatson-container">
			<ul class="event-container">

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
				<a href="<?php the_permalink(); ?>">
				<li>
					<div class="event-meta">

						<h2><?php the_title(); ?></h2>

							<?php
								$date = DateTime::createFromFormat('Ymd', get_field('event_date'));
								echo '<p><span class="date"> ';
								echo $date->format('j F Y');
								echo '</span> ';
								echo '</p>';
							?>

							<span class="time"><?php the_field('event_time'); ?></span>
						</div> <!-- end .event-meta -->

						<?php the_post_thumbnail('event-page-image'); ?>
							<div class="event-summary"><?php the_field('event_summary'); ?>
								<a href="<?php the_permalink(); ?>" class="button">Find out more</a>
							</div>
						</li>
					</a>

						<?php endwhile; endif; ?>
						</ul>
		</div> <!-- end inner content container -->

	</main><!-- .site-main -->


<?php get_footer(); ?>
