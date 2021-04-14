<?php get_header(); ?>
		<main id="main" class="archive-stories container content-area" role="main">
			<aside class="minor-content-area inner-content">
				<?php get_template_part('template-parts/story', 'nav'); ?>
			</aside>

			<div class="main-content-area stories">
				<div class="">
					<h2><?php $term = get_term_by( 'slug', get_query_var( 'term' ),
					get_query_var( 'taxonomy' ) ); echo $term->name; ?></h2>
					<ul class="story-themes-list">
						<?php while ( have_posts() ) : the_post(); ?>
						<li class="single-story-summary">
							<h3><?php the_title(); ?></h3>
							<span class="author"><?php the_field('author'); ?></span>
							<div class="excerpt"><?php the_excerpt(); ?></div>
							<a href="<?php the_permalink(); ?>">Read more <i class="far fa-arrow-alt-circle-right"></i> </a>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
		</div>
	</main>
<!-- <span class="jumpto"><a href="#jumptop">Back to menu &uarr; </span> -->
<?php get_footer(); ?>
