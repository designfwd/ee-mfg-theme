<?php // Quicklinks block to feature above the footer ?>
<div class="o-footerLinks">
<?php
  if(have_rows('footer_links','option')):
    while(have_rows('footer_links', 'option')): the_row();
?>
  <a class="o-footerLinks__block" href="<?php the_sub_field('footer_link_title', 'option'); ?>">
    <div class="m-footerLink">
      <img class="m-footerLink__image" src="<?php echo get_acf_image( get_sub_field('footer_link_image', 'option'), '960w', 'http://via.placeholder.com/934x687?text=image'); ?> " />
      <h3 class="m-footerLink__title">
        <?php the_sub_field('footer_link_title', 'option'); ?>
      </h3>
    </div>
  </a>
<?php 
    endwhile;
  endif;
?>

  <div class="o-footerLinks__block o-footerLinks__block--newsletter">
    <div class="m-footerLink m-footerLink--newsletter" href="#">
      <img class="m-footerLink__icon" src="<?php echo get_acf_image( get_sub_field('footer_newsletter_icon', 'option'), 'preload', 'http://via.placeholder.com/64x64?text=image'); ?> " />
      <h3 class="m-footerLink__label">
        <?php the_sub_field('footer_newsletter_title', 'option'); ?>
      </h3>
      <?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
    </div>
  </div>

</div>
