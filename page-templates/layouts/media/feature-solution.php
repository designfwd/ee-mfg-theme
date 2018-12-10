<?php // Featured image for solution page layouts ?>
<div class="o-featuredImage o-featuredImage--solution">
  <div class="o-featuredImage__content">
    <?php the_field('featured_solution_image_text'); ?>
  </div>  
  <img class="o-featuredImage__image" src="<?php echo get_acf_image( get_field('featured_solution_image'), '960w', 'http://via.placeholder.com/941x697?text=featured+image'); ?>" />
</div>
