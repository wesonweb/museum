<div class="inner-content story-themes">

  <h2>Menu</h2>
  <ul class="story-list-sidebar" id="jumptop">
  <?php
    // Start the loop.
    // while ( have_posts() ) : the_post();
    // your taxonomy name
    $tax = 'story-category';

    // get the terms of taxonomy
    $terms = get_terms( $tax, [
    'hide_empty' => false, // do not hide empty terms
    ]);

    // loop through all terms
    foreach( $terms as $term ) {

    // if no entries attached to the term
    if( 0 == $term->count )
    // display only the term name
    echo '<li>' . $term->name . '</li>';

    // if term has more than 0 entries
    elseif( $term->count > 0 )
    // display link to the term archive
    echo '<li><a href="'. get_term_link( $term ) .'">'. $term->name .'</a></li>';
    } ?>
    <?php	//endwhile;?>
  </ul>
</div> <!-- end .story-navigation -->
