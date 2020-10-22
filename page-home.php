<?php /* Template Name: Homepage template */ ?>
<?php get_header(); ?>
<section class="homepage-intro">
			<div class="welcome-message container">
				<h2>Welcome to Chesham Museum</h2>
			</div>
		</section>
	<main id="main" class="" role="main">
		<!-- <section class="homepage-intro">
			<div class="welcome-message container">
				<h2>Welcome to Chesham Museum</h2>
			</div>
		</section> -->
		<!-- opening times -->
		<section class="home__latest-news container">
			<div class="home__latest-news-text">
				<?php if(get_field('latest_news')) : ?>
					<?php the_field('latest_news'); ?>
				<?php endif; ?>
				<?php if(get_field('latest_news_link')) : ?>
					<a href="<?php the_field('latest_news_link'); ?>" class="button">Find out more</a>
				<?php endif; ?>
			</div>
			<div class="home_latest-news-image">
				<?php if(get_field('latest_news_image')) : ?>
					<?php 
						$image = get_field('latest_news_image');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
				<?php endif; ?>
			</div>
			
		</section>
		<div class="homepage-features container clearfix">
			<section class="homepage-asset-container">
				<a href="<?php echo get_permalink(11); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market-square250.jpg"
						height="200" alt="picture of Market Square Chesham">
					<div class="section-nav">
						<div>
							<h3>What's on <i class="fas fa-angle-right"></i></h3>
							<p>Join us on one of our upcoming events or view our exhibitions.</p>
						</div>
					</div>
				</a>
			</section>

			<section class="homepage-asset-container">
				<a href="<?php echo get_permalink(582); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aerial-shot.jpg"
					height="200" alt="map of Chesham museum location">
					<div class="section-nav">
						<div>
							<h3>Explore Chesham's history <i class="fas fa-angle-right"></i></h3>
							<p>Photos of Chesham's past</p>
						</div>
					</div>
				</a>
			</section>

			<section class="homepage-asset-container">
				<a href="<?php echo get_permalink(30); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stewards250.jpg"
					height="200" alt="photo of two stewards at Chesham museum">
						<div class="section-nav">
							<div>
								<h3>Support us <i class="fas fa-angle-right"></i></h3>
								<p>Make a cash gift, donate items or volunteer to support the museum.</p>
							</div>
						</div>
				</a>
			</section>

			<section class="homepage-asset-container">
				<a href="<?php echo get_permalink(893); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/charles-collins.jpg"
					height="200" width="200" alt="photo of an area in Chesham">
					<div class="section-nav">
						<div>
							<h3>Chesham stories <i class="fas fa-angle-right"></i></h3>
							<p>Read the life stories of
							Chesham's residents.</p>
						</div>
					</div>
				</a>
			</section>


	</div> <!-- end homepage features -->
	<?php get_template_part('template-parts/opening', 'times'); ?>
		<section class="latest-news-container">
			<?php get_template_part('template-parts/news'); ?>
		</section><!-- .news-wrapper-->
	</main><!-- .site-main -->
<?php get_footer(); ?>
