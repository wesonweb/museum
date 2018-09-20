<?php /* Template Name: Support us */ ?>

<?php get_header(); ?>

	<main id="main" class="content" role="main">
		<section class="support-us-intro">
			<div class="welcome-message container">
				<h2>Support us</h2>
			</div>
		</section>

		<section class="support-us">
			<div class="support-us-text-intro container">
				<!-- <h2>Volunteer some time at the museum</h2> -->
				<div class="section-content">
					<p><?php the_field('support_us_intro'); ?><p>
				</div> <!-- end .section-content -->
			</div>
		</section>
		<?php if( get_field('lottery') ): ?>
		<section class="support-us-lottery">
			<div class="support-us-text-intro container">
				<!-- <h2>Volunteer some time at the museum</h2> -->
				<div class="section-content">
					<?php the_field('lottery'); ?>
				</div> <!-- end .section-content -->
			</div>
		</section>
	<?php endif; ?>


		<section class="donate container clearfix">
			<div class="donate-money">
				<div class="section-content">
					<?php the_field('donate_money'); ?>
				</div><!-- end .section-content -->
			</div> <!-- end .donate-money -->
			<div class="donate-objects">
				<div class="section-content">
					<?php the_field('donate_objects'); ?>
				</div>
			</div>
		</section>
		<?php if( get_field('volunteer_time') ): ?>
		<section class="container volunteer">
			<h2>Volunteer some time at the museum</h2>
			<div class="section-content">

				<?php the_field('volunteer_time'); ?>
			</div> <!-- end .section-content -->
		</section>
	<?php endif; ?>

		<section class="museum-friends container clearfix">
			<h2>Become a friend of Chesham Museum</h2>
			<div class="center-content">
				<?php the_field('friend_intro'); ?>
			</div>
				<div class="friend-container">
					<div class="section-content">
						<h3>friend</h3>
							<?php the_field('friend_of_chesham_museum'); ?>
					</div>
				</div>

				<div class="friend-container">
					<div class="section-content">
						<h3>super-friend</h3>
							<?php the_field('super_friend_of_chesham_museum'); ?>
					</div>
				</div>

				<div class="friend-container">
					<div class="section-content">
						<h3>life-friend</h3>
						<?php the_field('life_friend_of_chesham_museum'); ?>
							<span class="for-life">for life</span>
						</div>
				</div>

				<div class="friend-application">
					<div class="section-content">
						<h3>How to become a friend</h3>
						<?php the_field('apply_to_be_a_friend'); ?>
					</div> <!-- .section-content -->
				</div> <!-- .friend-application -->
			</section>


			<section class="corporate-sponsors container clearfix">
				<h2>Corporate sponsors</h2>
					<div class="corporate-info section-content">
						<?php the_field('corporate_sponsors_intro'); ?>
					</div>

					<div class="corporate-donations clearfix">
						<p><span class="amount">£<?php the_field('first_sponsor_amount'); ?></span>
							<span class="benefit">
							<?php the_field('first_sponsor_benefits'); ?></span></p>
						<p><span class="amount">£<?php the_field('second_sponsor_amount'); ?></span>
							<span class="benefit"><?php the_field('second_sponsor_benefits'); ?> </span></p>
						<p><span class="amount">£<?php the_field('third_sponsor_amount'); ?></span>
							<span class="benefit"><?php the_field('third_sponsor_benefits'); ?></span></p>
					</div>
				</section>

			<section class="corporate-friends container clearfix">
					<h2>Corporate friends</h2>
					<div class="section-content">
						<?php the_field('corporate_friends'); ?>
					</div><!-- end .section-content -->
			</section>

			<?php
				// Start the loop.
				while ( have_posts() ) : the_post(); ?>


			<?php	endwhile;?>

			<?php //get_template_part('template-parts/coming', 'soon'); ?>

	</main><!-- .site-main -->

<?php get_footer(); ?>
