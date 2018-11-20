<?php $newsarticles = new WP_Query (
  array (
  'post_type' => 'news',
  'posts_per_page' => 1,
  'order' => 'DESC'
    )
      );
  while ($newsarticles->have_posts() ):
  $newsarticles->the_post(); ?>

  <?php the_post_thumbnail('news-thumb'); ?>
    <div class="latest-post-meta">
      <span class="news-headline"><?php the_title(); ?></span>
      <p><span class="readmore"><a href="<?php the_permalink(); ?>">Read more &rarr;</a></span></p>
    </div>
  <?php endwhile; ?>
