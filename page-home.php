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
		
		<div class="homepage-features container clearfix">
			<section class="homepage-asset-container">
				<a href="<?php echo get_permalink(11); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market-square250.jpg"
						height="200" alt="picture of Market Square Chesham">
					<div class="section-nav">
						<div>
							<h3>What's on</h3>
							<p>Join us on one of our upcoming events.</p>
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
							<h3>Explore Chesham's history</h3>
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
								<h3>Support us</h3>
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
							<h3>Chesham stories</h3>
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
