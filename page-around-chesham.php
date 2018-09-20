<?php /* Template Name: Around Chesham */ ?>

<?php get_header();?>

	<main id="main" class="content" role="main">

			<section class="around-chesham-intro">
				<div class="welcome-message">
					<h2><?php //the_title(); ?>Explore Chesham's history</h2>
				</div>
				</section>
				<section class="collection-landing-container clearfix">
					<section class="images-collection-link">
					<a href="<?php echo get_page_link(388); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cheshamimages-landingimage.jpg"
							height="200" alt="picture Church Street in Chesham" />
					<span>See photos of Chesham's past</span></a>
					</section>
					<section class="stories-collection-link">
						<a href="<?php echo get_page_link(437); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cheshamstories-landingimage.jpg"
							height="200" alt="picture of woman with her dogs" />
						<span>Read the stories of Chesham's residents</span></a>
					</section>
			</section>
		</section>

		<div class="container">
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
	</main><!-- .site-main -->

<?php get_footer(); ?>
