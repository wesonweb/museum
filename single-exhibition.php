<?php get_header(); ?>

<main id="main" class="content content-area" role="main">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/exhibitions-banner.jpg"
                        height="" class="exhibition-banner" alt="Chesham museum banner">
	<?php
	/* Start the Loop */
	while ( have_posts() ) : the_post(); ?>
	<article class="exhibition clearfix">
		<!-- <section class=""> -->
			
				<div class="banner-image">
					<?php 
					$image = get_field('banner_image');
					if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" class="image-banner" alt="<?php echo $image['alt']; ?>" />
					<?php endif; ?>
			</div>
		<!-- </section> -->
		<section class="exhibition__content">
			<div class="exhibition__summary">
				<h3 class="exhibition__title"><?php the_field('exhibition_title'); ?></h3>
					<div class="exhibition__meta">
						<?php if(get_field('exhibition_dates')) : ?>
						<p><span class="exhibition__date">On display: </span><?php the_field('exhibition_dates'); ?></p>
						<?php endif; ?>
						<?php if(get_field('exhibition_location')) :?>
						<p><span class="exhibition__location">Visit us at: </span><?php the_field('exhibition_location'); ?></p>
						<?php endif; ?>
					</div>
			</div>
			<?php the_field('exhibition_content'); ?>
		</section>
	</article>
	<?php wp_reset_query(); ?>
	<div class="exhibition__extra-info">
		<aside class="exhibition__extra-info--download">
			<?php
		$file = get_field('download');
		if( $file ): ?>
			<a href="<?php echo $file['url']; ?>">
				<h3><i class="far fa-arrow-alt-circle-down"></i> Download this exhibition</h3>
			<?php the_post_thumbnail(); ?>
			</a>
		<?php endif; ?>
		</aside>
		<aside class="other-exhibitions" role="complementary">
			<a href="<?php echo get_permalink(977); ?>"><h3><i class="far fa-arrow-alt-circle-left"></i> Back to all exhibitions</h3></a>
			<h4><span class="lowercase">or</span> View our other exhibitions</h4>

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
			<ul class="other-exhibitions--lists">
				<?php foreach ($myposts as $mypost): ?>
				<li><a href="<?php echo get_permalink($mypost->ID); ?>" class="button"><?php echo get_the_title($mypost->ID); ?></a></li>
			<?php endforeach; wp_reset_postdata(); ?>
			</ul>
			<?php endif; ?>
		</aside>
		
	</div>
	<?php endwhile; ?>
</main><!-- #main -->
<?php get_footer(); ?>
