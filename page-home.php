<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
	<main id="main" class="" role="main">
		<section class="homepage-intro">
			<div class="welcome-message container">
				<h2>Welcome to Chesham Museum</h2>
			</div>
		</section>
		<!-- opening times -->
		<?php get_template_part('template-parts/opening', 'times'); ?>
		<?php if( get_field('latest_news') ): ?>
		<section class="latest-news">
			<div class="container">
				<h2>Latest from the museum</h2>
					<div class="latest-news-image">
						<img class="latest-news-feature-image"
						<?php ar_responsive_image(get_field( 'latest_news_image' ),'latest-news','640px'); ?>
								alt="text" />
						</div>
						<div class="latest-news-text">
							<?php the_field('latest_news'); ?>
						</div>
				</div> <!-- end .container -->
		</section>
	<?php endif; ?>
		<div class="homepage-features container clearfix">
			<section class="homepage-asset-container">
				<a href="<?php echo get_permalink(11); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market-square250.jpg"
						height="200" alt="picture of Market Square Chesham">
					<div class="section-nav">
						<h3>What's on</h3>
						<p>Join us on one of our upcoming events.</p>
					</div>
				</a>
			</section>

			<section class="homepage-asset-container">
				<a href="<?php echo get_permalink(388); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aerial-shot.jpg"
					height="200" alt="map of Chesham museum location">
					<div class="section-nav">
						<h3>Explore Chesham's history</h3>
						<p>Photos of Chesham's past</p>
					</div>
				</a>
			</section>

			<section class="homepage-asset-container">
					<a href="<?php echo get_permalink(30); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stewards250.jpg"
						height="200" alt="photo of two stewards at Chesham museum">
							<div class="section-nav">
								<h3>Support us</h3>
								<p>Make a cash gift, donate items or volunteer to support the museum.</p>
							</div>
					</a>
			</section>

			<section class="homepage-asset-container">
				<a href="<?php echo get_permalink(437); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/christopher-mulkern-crop.jpg"
					height="200" alt="photo of an area in Chesham">
					<div class="section-nav">
						<h3>Chesham stories</h3>
						<p>Read the life stories of
						Chesham's residents.</p>
					</div>
				</a>
			</section>

	</div> <!-- end homepage features -->

			<!-- <section class="supportus-lottery">
				<div class="container">
					<h2>Support us</h2>
					<p>Buy your lottery ticket and help raise funds for Chesham Museum.</p>
					<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/museum-lottery.png" alt="South Bucks Lottery aids Chesham Museum">
					<a href="<?php echo get_page_link(30); ?>">Find out more</a>
				</div>
			</section> -->


		<section class="latest-news-container">
			<div class="latest-news-article container clearfix">
				<!-- temporary message that museum is closed -->
				<?php the_field('homepage_temp_message'); ?>
				<br />

				<!-- <h3><span class="latest-news-header">Latest news</span>
				<span class="view-all"><a href="<?php //echo get_page_link(321); ?>">read all news &rarr;</a></span>
				</h3> -->

					<?php /*$newsarticles = new WP_Query (
					array (
					'post_type' => 'news',
					'posts_per_page' => 1,
					'order' => 'DESC'
								)
									);
					while ($newsarticles->have_posts() ):
					$newsarticles->the_post(); */?>

				<?php //the_post_thumbnail('news-thumb'); ?>
				<!-- <div class="latest-post-meta">
					<span class="news-headline"><?php //the_title(); ?></span>
					<span class="readmore"><a href="<?php //the_permalink(); ?>">Read more &rarr;</a></span>
				</div> -->
			</div><!-- end .latest-news-article-->
		</section><!-- .news-wrapper-->

		<?php //endwhile; ?>




	</main><!-- .site-main -->
<?php get_footer(); ?>
