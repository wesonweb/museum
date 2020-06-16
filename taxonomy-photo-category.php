<?php get_header(); ?>

		<main id="main" class="content content-area" role="main">


			<article class="container clearfix">
				<div class="main-content-area stories">
					<div class="container">
						<h2><?php $term = get_term_by( 'slug', get_query_var( 'term' ),
						get_query_var( 'taxonomy' ) ); echo $term->name; ?></h2>
						<ul class="story-themes-list">
							<?php while ( have_posts() ) : the_post(); ?>
							<li class="single-story-summary">
								<h3><?php the_title(); ?></h3>
								<span class="author"><?php the_field('author'); ?></span>
								<div class="excerpt"><?php the_excerpt(); ?></div>
								<a href="<?php the_permalink(); ?>">Read more &rarr; </a>
							</li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
				</article>

		</main>

<?php get_footer(); ?>
