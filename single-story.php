<?php get_header(); ?>

		<main id="main" class="content" role="main">
			<div class="single-story-container container clearfix">

				<aside class="story-navigation">
					<?php get_template_part('template-parts/story', 'nav'); ?>
				</aside>

					<?php while ( have_posts() ) : the_post(); ?>

						<article class="story-container container clearfix">

							<span class="story-term">
								<?php
									$terms = get_the_terms( $post->ID, 'story-category' );
									if ($terms) {
									    foreach($terms as $term) {
									      // echo $term->name . ' ';
												$story_category[] = $term->name;
												}
												$story_category = join( ", ", $story_category );
									}
									?>
									<p><?php echo $story_category ?></p>
							</span>

						<h2><?php the_title(); ?></h2>
						<h3><span class="author"><?php	the_field('author'); ?></span></h3>
						<div class="story-content">
							<?php	the_content(); ?>

							<?php if (get_field('author_info')): ?>
							<div class="author-info">
								<p><span class="author-name"><?php the_field('author_info') ?></span></p>
							</div>
						<?php endif; ?>

						<!-- left hand story navigation -->
							<?php get_template_part('template-parts/post', 'nav'); ?>
						</div> <!-- end .story-content -->

				</article>

			<?php endwhile; ?>
				</div><!-- end single story container -->

		</main>


<?php get_footer(); ?>
