<?php // Category-related links block ?>
<div class="o-categoryLinks">

  <?php
  if(have_rows('general_supplementary_links','option')):
    while(have_rows('general_supplementary_links', 'option')): the_row();
?>
  <a class="o-categoryLinks__link" href="<?php the_sub_field('general_supplementary_link_title', 'option'); ?>">
    <div class="m-categoryLinks">
      <img class="m-categoryLinks__image" src="<?php echo get_acf_image( get_sub_field('general_supplementary_link_image', 'option'), '960w', 'http://via.placeholder.com/934x687?text=image'); ?> " />
      <h3 class="o-categoryLinks__title">
        <?php the_sub_field('general_supplementary_link_title', 'option'); ?>
      </h3>
    </div>
  </a>
<?php 
    endwhile;
  endif;
?>

</div>
