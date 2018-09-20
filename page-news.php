<?php /* Template Name: News */ ?>

<?php get_header(); ?>

	<main id="main" class="" role="main">
		<section class="homepage-intro">
			<div class="welcome-message container">
				<h2>Chesham Museum News</h2>
			</div>
		</section>

			<?php
			global $paged;

				$myargs = array(
					 'post_type' => 'news', //name of post type
					 'posts_per_page' => -1, //number of post to show
					 'order' => 'DESC',
					 'paged' => $paged
				);

				query_posts($myargs ); ?>
				<section class="container news-listing">
					<?php	if (have_posts()) : while (have_posts()) : the_post(); ?>
						<ul class="archive-news-listings">
							<li><?php the_title(); ?>
								<a href="<?php the_permalink(); ?>">Read more &rarr; </a>
							</li>
						<?php endwhile; ?>
					</ul>
				</section>
			<?php endif; ?>



<?php get_footer(); ?>
