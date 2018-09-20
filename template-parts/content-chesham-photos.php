<article class="around-chesham-images">
  <div class="container">
    <h1><span class="gallery-heading"><?php the_title(); ?></span></h1>
    <p><span class="intro-text">Chesham has a fascinating history. Take a look back through the years with photos of our town and people.</span></p>
  </div>
  <ul class="chesham-images-container">
  <?php
    global $paged;
    $myargs = array(
       'post_type' => 'imagetemplate', //name of post type
       'posts_per_page' => -1,
       'paged' => $paged
    );
    query_posts($myargs );
    if (have_posts()) : while (have_posts()) : the_post(); ?>
    <li><a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('homepage-thumb'); ?><span class="gallery-landing-thumbnail"><?php the_title(); ?></span></a></li>
  <?php endwhile; ?>
  </ul>

</article>
<?php endif; ?>
