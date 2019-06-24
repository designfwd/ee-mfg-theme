<?php // A grid of solution-related products, with introductory content ?>
<h2 class="o-productGrid__headline">
  <?php the_field('solutions_products_title'); ?>
    <svg class="o-productGrid__topDecoration" viewBox="0 0 100 100">
      <path fill="none" stroke="black" stroke-width="8" d="M 0,0 L 30,25 L 60,0" />
      <path fill="none" stroke="black" stroke-width="8" d="M 0,30 L 30,55 L 60,30" />
      <path fill="none" stroke="black" stroke-width="8" d="M 0,60 L 30,85 L 60,60" />
    </svg>
  </h2>
  <div class="o-productGrid__description">
    <?php the_field('solutions_products_text'); ?>
  </div>
<div class="o-productGrid">
<?php
if(have_rows('solution_products')) :
    while(have_rows('solution_products')): the_row();
        $product = get_sub_field('solution_product_product');
        $background_image = get_acf_image(get_sub_field('solution_product_background_image'), '960w', 'http://via.placeholder.com/934x687?text=image');
        if(!$background_image) :
            $background_image = get_acf_image(get_field('product_default_image', $product->ID), '960w', 'http://via.placeholder.com/934x687?text=image');
        endif; 
?>
  <div class="o-productGrid__block" href="<?php echo get_the_permalink($product->ID); ?>">
    <div class="m-productGrid">
      <img class="m-productGrid__image lazyload" src="<?php echo $background_image; ?>" />
      <h3 class="m-productGrid__title">
        <svg class="m-productGrid__arrow" viewBox="0 0 64 64">
          <path fill="#FF0000" d="M 0,64 L 64,0 L 64,64" />
        </svg>
        <?php echo $product->post_title; ?>
      </h3>
    </div>
  </div>
<?php 
    endwhile;
endif;
?>
</div>
