<?php get_header(); ?>

<main id="main" class="content" role="main">
	<?php
	/* Start the Loop */
	while ( have_posts() ) : the_post(); ?>
	<article class="single-exhibition clearfix">
		<section class="">
			<div class="exhibition-summary">
				<h3 class="exhibition-title"><?php the_field('exhibition_title'); ?></h3>
				<div class="exhibition-meta">
						<?php if(get_field('exhibition_dates')) : ?>
						<p><span class="exhibition-date">On display: </span><?php the_field('exhibition_dates'); ?></p>
						<?php endif; ?>
						<?php if(get_field('exhibition_location')) :?>
						<p><span class="exhibition-location">Visit us at: </span><?php the_field('exhibition_location'); ?></p>
						<?php endif; ?>
				</div>
				<div class="banner-image">
					<?php 
					$image = get_field('banner_image');
					if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" class="image-banner" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
				</div>
			</div>
		</section>
		<section class="exhibition-content">
			<?php the_field('exhibition_content'); ?>
		</section>
	</article>
	<?php wp_reset_query(); ?>
	<aside class="other-exhibitions container" role="complementary">
		<h3>View our other exhibitions</h3>

		<?php 
			// Set the arguments for the query
			$args = array( 
			'numberposts'		=> 9999,
			'post_type'		=> 'exhibition', 
			'orderby' 		=> 'date', // or 'date', 'rand'
			'order' 		=> 'ASC', // or 'DESC'
			//'category' 		=> $category_id,
			//'exclude'		=> get_the_ID()
	);
		// Get the posts
		$myposts = get_posts($args);
		// If there are posts
		if($myposts):
		// Loop the posts
		?>
		<ul class="other-exhibition-lists">
			<?php foreach ($myposts as $mypost): ?>
			<li><a href="<?php echo get_permalink($mypost->ID); ?>"><?php echo get_the_title($mypost->ID); ?></a></li>
		<?php endforeach; wp_reset_postdata(); ?>
		</ul>
		<?php endif; ?>
	</aside>
	<?php endwhile; ?>
</main><!-- #main -->
<?php get_footer(); ?>
