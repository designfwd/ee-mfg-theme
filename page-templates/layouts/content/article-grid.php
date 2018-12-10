<?php // Preview grid of articles and pages ?>
<div class="o-articleGrid">
<?php
  // WP_Query arguments
  $args = array(
    // 'cat' => ??,
    'orderby' => 'date',
    );
    // The Query
    $query = new WP_Query( $args );  
    if( $query->have_posts() ):
      while( $query->have_posts() ): $query->the_post();
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), '800w' );
?>
  <div class="m-articlePreview o-articleGrid__article">
    <a href="<?php the_permalink(); ?>" >
      <img class="m-articlePreview__image" src="<?php echo $image[0]; ?>" />
      <h4 class="m-articlePreview__date"><?php echo get_the_date( 'm/d/Y'); ?></h4>
      
      
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
    endif;
  ?>
</div>
