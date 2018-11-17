<?php // Preview grid of articles and pages ?>
<div class="o-articleGrid">
<<<<<<< HEAD

  <div class="m-articlePreview o-articleGrid__article">
    <img class="m-articlePreview__image" src="http://via.placeholder.com/862x433?text=preview" />
    <h4 class="m-articlePreview__date">
      04/23/15
    </h4>
    <h3 class="m-articlePreview__title">
      Maecenas luctus malesu ada tellus
    </h3>
    <p class="m-articlePreview__content">
      Nullam semper imperdiet magna, ut mattis tortor gravida sit amet. Integer sagittis finibus enim, id tempus purus vulputate vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet ante leo.
    </p>
  </div>

  <div class="m-articlePreview o-articleGrid__article">
    <img class="m-articlePreview__image" src="http://via.placeholder.com/862x433?text=preview" />
    <h4 class="m-articlePreview__date">
      09/17/16
    </h4>
    <h3 class="m-articlePreview__title">
      Quisque consequat lorem id vulputate
    </h3>
    <p class="m-articlePreview__content">
      Sed nec diam et nunc lacinia vestibulum. Mauris pellentesque metus ultricies urna pulvinar auctor. Maecenas luctus malesuada tellus, sit amet euismod nunc.
    </p>
  </div>

  <div class="m-articlePreview o-articleGrid__article">
    <img class="m-articlePreview__image" src="http://via.placeholder.com/862x433?text=preview" />
    <h4 class="m-articlePreview__date">
      08/05/17
    </h4>
    <h3 class="m-articlePreview__title">
      Suspendisse fermentum
    </h3>
    <p class="m-articlePreview__content">
      Suspendisse fermentum, ex quis vehicula placerat, ligula nibh pulvinar leo, nec bibendum tellus orci vel arcu. Quisque congue condimentum turpis sed laoreet. 
    </p>
  </div>

=======
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
      <?php the_date( 'm/d/Y', '<h4 class="m-articlePreview__date">', '</h4>', true ); ?>
      
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
>>>>>>> saji
</div>
