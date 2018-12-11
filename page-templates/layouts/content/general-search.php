<?php // Page content for search page layouts ?>
<div class="o-bodyContent o-bodyContent--general">
<?php

    global $query_string;

    wp_parse_str( $query_string, $search_query );
    $search = new WP_Query( $search_query );     while ( have_posts() ) : the_post(); 
?>
  <div class="m-articlePreview o-articleGrid__article">
    <a href="<?php the_permalink(); ?>" >      
      
      <h3 class="m-articlePreview__title">
        <?php the_title(); ?>
      </h3>
      <p class="m-articlePreview__content">
        <?php the_excerpt(); ?>  
      </p>
    </a>
  </div>
<?php 
    endwhile;
 ?>

</div>
