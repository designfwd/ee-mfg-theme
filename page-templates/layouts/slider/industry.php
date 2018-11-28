<?php // Industry slider for use in the body of a page ?>
<h2><?php the_field('industry_title'); ?></h2>
  <div class="o-industrySlider__description">
    <?php the_field('industry_description'); ?>
  </div>
<div class="o-industrySlider">
  <?php
  if(have_rows('industry_slides')) :
      while(have_rows('industry_slides')): the_row();

  ?>
  <div class="m-industrySlider__slide">
    <a class="m-industrySlider__block" href="<?php the_sub_field('industry_slide_link'); ?>">
      <div class="m-industrySlider">
        <img class="m-industrySlider__image" data-lazy="<?php echo get_acf_image(get_sub_field('industry_slide_image'), '960w', 'http://via.placeholder.com/934x687?text=image'); ?>" />
        <div class="m-industrySlider__content">
          <h3 class="m-industrySlider__title">
            <?php the_sub_field('industry_slide_title'); ?>
          </h3>
          <?php the_sub_field('industry_slide_text'); ?>

        </div>
      </div>
    </a>
  </div>
  <?php 
      endwhile;
  endif;
  ?>  
</div>
