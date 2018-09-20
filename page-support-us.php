<?php /* Template Name: Support us */ ?>

<?php get_header(); ?>

	<main id="main" class="content" role="main">
		<section class="support-us-intro">
			<div class="welcome-message container">
				<h2>Support us</h2>
			</div>
		</section>
		<div class="support-us-content">
			<div class="support-container">
  			<section class="will">
			    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/legacy.jpg" alt="">
			     <h2>Legacies and bequests</h2>
			    <p>Donate objects to the museum, make a cash gift or a bequest to the museum.</p>
			    <a href="<?php echo get_page_link('450'); ?>" class="center-button">Find out how</a>
			  </section>
				<section class="donate">
			    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pocket-watch.jpg" alt="">
			     <h2>Donate to the museum</h2>
			    <p>You can make a cash donation or become a corporate sponsor of the museum.</p>
			    <a href="<?php echo get_page_link('452'); ?>" class="center-button">Learn how to donate</a>
			  </section>
			  <section class="friend">
			    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/circlefriends.jpg" alt="">
			    <h2>Become a friend of the museum
			    </h2>
			    <p>Get discounts off purchases, guided walks and receive our newsletter to keep up to date with our latest news</p>
					<a href="<?php echo get_page_link('458'); ?>" class="center-button">Become a friend</a>
			  </section>

			  <section class="lottery">
			    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lottery.png" alt="">
			    <h2>Buy a lottery ticket</h2>
			    <p>Support the museum and be in with chance of winning a prize.</p>
			    <a href="<?php echo get_page_link('454'); ?>" class="center-button">buy your ticket</a>
			  </section>
			  <section class="support-volunteer">
			    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/volunteer.jpg" alt="">
			    <h2>Volunteer</h2>
			    <p>Can you give some of your time to help us with the running of the museum? We’d love to hear from you.</p>
			    <a href="<?php echo get_page_link('456'); ?>" class="center-button">Volunteer with us</a>
			  </section>

	</div>
</div>
	</main><!-- .site-main -->

<?php get_footer(); ?>
