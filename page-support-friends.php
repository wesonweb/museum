<?php /* Template Name: Become a friend */ ?>

<?php get_header(); ?>

	<main id="main" class="content container" role="main">
		<section class="support-us-intro">
			<div class="welcome-message container">
				<h2>Support us: <?php the_title();?></h2>
			</div>
		</section>

		<section class="support-us">
			<div class="support-us-text-intro container">
				<div class="section-content">
					<p><?php the_field('support_us_intro'); ?><p>
				</div> <!-- end .section-content -->
			</div>
		</section>


		<section class="museum-friends container clearfix">
			<!-- <h2>Become a friend of Chesham Museum</h2> -->

				<div class="friend-container">
					<div class="friend-intro">
						<?php the_field('friend_intro'); ?>
					</div>
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

			<?php if(is_page_template('page-support-friends.php')): ?>
				<h3>Find other ways to get involved</h3>
				<p><a href="<?php echo get_page_link(30); ?>" class="back-link">Visit our support us page</a></p>
			<?php endif; ?>
			<?php //get_template_part('template-parts/coming', 'soon'); ?>

	</main><!-- .site-main -->

<?php get_footer(); ?>
