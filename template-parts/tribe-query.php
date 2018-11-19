<?php
$myargs = array(
   'post_type' => 'tribe_events', //name of post type
   'posts_per_page' => -1
);

query_posts($myargs );

if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

</div>


<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
