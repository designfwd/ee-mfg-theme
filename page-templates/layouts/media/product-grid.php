<?php // A grid of solution-related products, with introductory content ?>
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
  <a class="o-productGrid__block" href="<?php echo get_the_permalink($product->ID); ?>">
    <div class="m-productGrid">
      <img class="m-productGrid__image" src="<?php echo $background_image; ?>" />
      <h3 class="m-productGrid__title">
        <?php echo $product->post_title; ?>
      </h3>
    </div>
  </a>
<?php 
    endwhile;
endif;
?>
</div>
