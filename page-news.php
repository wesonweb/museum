<?php /* Template Name: News */ ?>

<?php get_header(); ?>
	<section class="homepage-intro">
		<div class="welcome-message container">
			<h2>Chesham Museum News</h2>
		</div>
	</section>
	<main id="main" class="" role="main">
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
			<?php	//if (have_posts()) : while (have_posts()) : the_post(); ?>	
				<ul class="news__listing">
				<?php if( have_posts()) : while( have_posts()) : the_post(); ?>
					<li class="news__item"><div class="news__meta"><h3><?php the_title(); ?></h3><a href="<?php the_permalink();?>">Read more</a></div><?php the_post_thumbnail();?>
					</li>
					<?php endwhile; ?>
				</ul>
		</section>
				<?php endif; ?>
<?php get_footer(); ?>
